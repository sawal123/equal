<!DOCTYPE html>
<html lang="en">

<head>


    @php
    $title = 'Equallfresh';
    $logo5 = true;
    @endphp

    @include('layouts.partials.title-meta', [
    'title' => $title,
    'logo5' => $logo5,
    ])

    @include('layouts.partials.head-css')
    <meta name="google-site-verification" content="wb2D4aYPaYYbWVBL8cVItSFV51KY0bsy6f2ricNVpt0" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B476R5Q272"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-B476R5Q272');

    </script>


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5G8KL5L7');

    </script>
    <!-- End Google Tag Manager -->
    @livewireStyles
</head>


<body class="body">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5G8KL5L7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {{-- @include('layouts.partials.loader') --}}

    @include('layouts.partials.header.navbar')

    {{ $slot }}

    @include('layouts.partials.footer')
    @include('layouts.partials.footer-scripts')
    @livewireScripts
</body>

</html>
