<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Coffee Break')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <link href="{{ asset('FE/css/bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('FE/css/style.css') }}" rel="stylesheet"/>
    <script src="{{ asset('FE/js/jquery.min.js') }}"></script>
    <script src="{{ asset('FE/js/move-top.js') }}"></script>
    <script src="{{ asset('FE/js/easing.js') }}"></script>
    <script>
        $(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    @stack('scripts')
</head>
<body>

@include('Client.header')

@yield('content')

@include('Client.footer')

</body>
</html>
