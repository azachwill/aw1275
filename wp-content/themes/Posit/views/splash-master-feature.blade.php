<!doctype html>
<html lang="en">
<head>
    {!! get_field('head_snippets', 'options') !!}
    
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{get_field('site_description', 'options')}}">

    <title>{{get_field('site_title', 'options') }}</title>

    {{ wp_head() }}
    
    <link rel="stylesheet" type="text/css" href="{{ getHashedAsset('/splash-app.css') }}">
    
    @include('partials.favicon')
</head>
<body class="bg-blue1 antialiased overflow-hidden text-[12px]">
    
    <main data-key="{{ FULLPAGE_KEY }}">
        @yield('content')
    </main>
    
    <script src="{{ getHashedAsset('/splash-app.js') }}"></script>
    
    <script>
        const adminUrl = '<?= admin_url('admin-ajax.php') ?>'
    </script>
    {{ wp_footer() }}
    {!! get_field('body_snippets', 'options') !!}
</body>
</html>