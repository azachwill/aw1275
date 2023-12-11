<!doctype html>
<html class="scroll-smooth" lang="en">
<head>
    <title>{{ wp_title('') }}</title>

    <meta charset="{{ bloginfo('charset') }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale='2.0', minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta property="og:image" content="{{ asset('images/site-share-image.jpg') }}">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="https://www.posit.co/"/>
    <meta property="og:title" content="Posit" />
    
    {{ wp_head() }}
    {!! get_field('head_snippets', 'options') !!}

    <link rel="stylesheet" type="text/css" href="{{ getHashedAsset('/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ getHashedAsset('/algolia.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    @if(isset($postContent))
        <meta name="post-content" content="{{$postContent}}">
    @endif

    @include('partials.favicon')
    @include('partials.icon-masks')
</head>
<!-- js--wip -->
<body class="antialiased text-[12px]">

    @include('partials.navigation')

    <main class="pt-[70px] md:pt-[76px] lg:pt-[78px]" aria-label="Posit page content">
        @yield('content')
    </main>

    <div id="rstudio-search-box"></div>

    @include('partials.footer')

    <script src="{{ getHashedAsset('/app.js') }}"></script>
    <script src="{{ getHashedAsset('/algolia.js') }}"></script>

    <script>
        window.ajax_url = '{{ admin_url('admin-ajax.php') }}'
    </script>

    {{ wp_footer() }}
    {!! get_field('body_snippets', 'options') !!}
</body>
</html>
