<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png"/>
    <!-- meta character set -->
    <meta charset="UTF-8"/>


    {{-- SEO Follow this page --}}
    <meta name="robots" content="index, follow">
    <!-- Site Title -->
    <title>@yield('title')</title>

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
        rel="stylesheet"
    />

    {{--    Local CSS       --}}
    <link rel="stylesheet" href="{{asset('front-panel/css/linearicons.css')}}"/>
    <link rel="stylesheet" href="{{asset('front-panel/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front-panel/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('front-panel/css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('front-panel/css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('front-panel/css/wyswyg-post.css')}}"/>
    <link rel="stylesheet" href="{{asset('front-panel/css/custom.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('front-panel/high-lightjs/default.min.css')}}">
    <script src="{{asset('front-panel/high-lightjs/highlight.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('front-panel/codesnippet/lib/highlight/styles/monokai_sublime.css') }}">

    <style>
        @media only screen and (min-width: 790px) {
            .menu1 {
                /* border: 1px solid #333; */
                margin-left: -5rem;
            }
        }

        .c1 {
            color: #007bff;
        }
    </style>
    {{-- Fix Drop Down menu --}}
    <script>
        function dropMenu() {
            var dropmenu = document.getElementById('dropMenu');
            if (dropmenu.style.display === "none") {
                dropmenu.style.display = "block";
            } else {
                dropmenu.style.display = "none";
            }
        }
    </script>
    {{-- Adsense --}}
    <script data-ad-client="ca-pub-4597251290683570" async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    {{--    @stack('header')--}}
</head>
<body>
{{--Start HeaderArea--}}
@include('layouts.front-panel.partials.navbar')
{{--End HeaderArea--}}

{{--Start Content Area--}}
@yield('content')
{{--End Content Area--}}

{{--Start footer Area --}}
@include('layouts.front-panel.partials.footer')
<!-- End footer Area -->

<script src="{{asset('front-panel/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"
></script>
<script src="{{asset('front-panel/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('front-panel/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('front-panel/js/parallax.min.js')}}"></script>
<script src="{{asset('front-panel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front-panel/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front-panel/js/jquery.sticky.js')}}"></script>
<script src="{{asset('front-panel/js/main.js')}}"></script>
<script src="{{ asset('front-panel/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
<script>hljs.initHighlightingOnLoad();</script>
{{--    @stack('footer')--}}
</body>
</html>
