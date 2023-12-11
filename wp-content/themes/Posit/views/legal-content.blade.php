@extends('master')

@section('content')
    @while( have_posts() )
        @php
            the_post();
            $content = get_the_content();
            $title = get_the_title();
            $header = null;
            $menu_name = 'legal'; //menu slug
            $locations = get_nav_menu_locations();
            $menu = $locations ? wp_get_nav_menu_object( $locations[ $menu_name ] ) : null;
            $menuitems = $menu ? wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) ) : null;
            $sideMenu = [];

            if($menuitems) {
                foreach ($menuitems as $menuitem) {
                    array_push($sideMenu, ['label' => $menuitem->title,'link'=>$menuitem->url]);
                }
            }
        @endphp

        @while (have_rows('section_header'))
            @php the_row();
            $header = [
                'author' => get_sub_field('author'),
                'last_updated' => get_sub_field('last_updated'),
                'file'=>get_sub_field('file')
            ]
            @endphp
        @endwhile


        @include('components.table-of-content',[
            'placeholder'=>'Legal Menu',
            'title'=> $title,
            'header'=> view('partials.legal-header',['title'=>$title, 'data'=> $header, 'containerClasses'=>'my-[40px] lg:my-[80px]']),
            'content'=> $content,
            'contentTable'=>$sideMenu,
        ])

    @endwhile
@endsection
