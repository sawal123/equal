<!DOCTYPE html>
<html lang="en">

<head>
    @php
    $title = 'Web Page Builder';
    $logo5 = true;
    @endphp

    @include('layouts.partials.title-meta', [
    'title' => $title,
    'logo5' => $logo5
    ])

    @include('layouts.partials.head-css')
    @vite([])
    @livewireStyles
</head>

<body class="body">

    {{-- @include('layouts.partials.loader') --}}

    @include('layouts.partials.header.navbar')

    {{ $slot }}

    @include('layouts.partials.footer')
    @include('layouts.partials.footer-scripts')
    @livewireScripts
</body>

</html>
