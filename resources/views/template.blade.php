<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

        <?php //========== Render CSS =========== ?>
        @foreach($data['css'] as $key => $asset)
            {!! Html::style($asset) !!}
        @endforeach

        <?php //========== Render Js in Header =========== ?>
        @if(!empty($data['js_assets_head']))
            @foreach($data['js_assets_head'] as $key => $asset)
                {!! Html::script($asset) !!}
            @endforeach
        @endif
        <?php //========== Header Script =========== ?>
        @yield('header_script')

<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body class='fixed sidebar-mini @yield('class-body')' @yield('id-body')>
        <?php //========== Start Content =========== ?>
        @yield('content')

        <?php //========== Render Js =========== ?>
        @if(isset($data['js']))
            @foreach($data['js'] as $key => $asset)
                {!! Html::script($asset) !!}
            @endforeach
        @endif

        <?php //========== Footer Script =========== ?>
        @yield('footer_script')

</body>
</html>
