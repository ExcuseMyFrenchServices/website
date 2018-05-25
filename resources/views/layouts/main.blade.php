<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @yield('head')
        
        <meta name="author" content="Thomas Leclercq <https://github.com/ThomasLeclercq/>">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome/css/font-awesome.css') }}">

        @stack('styles')

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-89338358-1', 'auto');
          ga('send', 'pageview');
        </script>
        
    </head>
    <body>
       @section('header')
           @include('partials.header')
       @show

    @yield('content')
        <script type="text/javascript">

          function downloadJSAtOnload() {
            var element = document.createElement("script");
            element.src = "{{ asset('js/app.js') }}";
            document.body.appendChild(element);
          }

          if (window.addEventListener)
            window.addEventListener("load", downloadJSAtOnload, false);
          else if (window.attachEvent)
            window.attachEvent("onload", downloadJSAtOnload);
          else window.onload = downloadJSAtOnload;

        </script>

        @stack('scripts')

       @section('footer')
           @include('partials.footer')
       @show

    </body>
</html>



