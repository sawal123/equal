<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $seo->title ?? config('app.name') }}</title>

<meta name="description" content="{{ $seo->meta_description }}">
<meta name="keywords" content="{{ $seo->meta_keywords }}">

<meta property="og:title" content="{{ $seo->og_title ?? $seo->title }}">
<meta property="og:description" content="{{ $seo->og_description ?? $seo->meta_description }}">
<meta property="og:image" content="{{ asset('storage/'.$seo->og_image) }}">
<!--=====FAB ICON=======-->
<link rel="shortcut icon" href="{{ asset('storage/'. $logo->logo_icon) }}" type="image/x-icon">
