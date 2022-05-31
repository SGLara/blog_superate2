<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('img/favicon/sup_favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbarStyle2.css')}}">
    @yield('style_section')
    <title>@yield('title', 'withoutTitle')</title>
</head>

<body>
    <header class="header">
        @include('components.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    @include('partials.scripts')
</body>
<footer>
    <div>
        <a href="https://www.facebook.com/PESuperate" target="_blank"><img id="facebook"
                src="{{ asset('img/index/social_icons/facebook.svg') }}" alt="facebook_logo" loading="lazy"
                {{-- onmouseover="setHoverFacebook()" onmouseout="setOriginalFacebook()"--}}></a>
        <a href="https://twitter.com/PESuperate" target="_blank"><img id="twitter"
                src="{{ asset('img/index/social_icons/twitter.svg') }}" alt="twitter_logo" loading="lazy"
                {{-- onmouseover="setHoverTwitter()" onmouseout="setOriginalTwitter()"--}}></a>
        <a href="https://www.instagram.com/pesuperate/" target="_blank"><img id="instagram"
                src="{{ asset('img/index/social_icons/instagram.svg') }}" alt="instagram_logo" loading="lazy"
                {{-- onmouseover="setHoverInstagram()" onmouseout="setOriginalInstagram()"--}}></a>
        <a href="https://www.youtube.com/user/ProgramaSuperate" target="_blank"><img id="youtube"
                src="{{ asset('img/index/social_icons/youtube.svg') }}" alt="youtube_logo" loading="lazy"
                {{-- onmouseover="setHoverYoutube()" onmouseout="setOriginalYoutube()"--}}></a>
    </div>
    <h5>Copyright &copy; {{ date('Y')}} ¡Supérate!</h5>
</footer>
@yield('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
{{-- <script src="{{ asset('js/hover_icons.js') }}"></script> --}}

</html>