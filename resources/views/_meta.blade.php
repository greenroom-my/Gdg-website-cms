@php
    $title = 'Laravel';
    $description = 'Here is description';
@endphp

<title>@yield('title', config('app.name', $title) )</title>
<meta name="description" content="@yield('meta-description', $description)">
<meta name="author" content="@yield('meta-author', 'Green Room')">
<meta name="theme-color" content="@yield('meta-theme-color', '#a77f66')">

<meta property="og:title" content="@yield('title', $title)"/>
<meta property="og:description" content="@yield('description', $description)"/>
<meta property="og:url" content="@yield('og-url', url()->full())"/>
<meta property="og:image" content="@yield('og-image', asset('images/og-cover.jpg'))"/>
<meta property="og:type" content="@yield('og-type', 'website')"/>

<link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png">
<link rel="apple-touch-icon" sizes="1024x1024" href="{{ asset('icons/icon-maskable.png') }}">
<link rel="manifest" href="{{asset('manifest.json')}}">
