@php
    $title = 'GDG George Town';
    $description = 'Google Developer Group (GDG) George Town started since 2013, We are a non profit community of like-minded developers who enjoy sharing our experiences in developing applications with open sourced technologies. ';
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
<link rel="apple-touch-icon" sizes="57x57" href="{{asset('icons./apple-icon-57x57.png')}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{asset('icons/apple-icon-60x60.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('icons/apple-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('icons/apple-icon-76x76.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('icons/apple-icon-114x114.png')}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{asset('icons/apple-icon-120x120.png')}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{asset('icons/apple-icon-144x144.png')}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('icons/apple-icon-152x152.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('icons/apple-icon-180x180.png')}}">
<link rel="icon" type="image/png" sizes="36x36" href="{{asset('icons/android-icon-36x36.png')}}">
<link rel="icon" type="image/png" sizes="48x48" href="{{asset('icons/android-icon-48x48.png')}}">
<link rel="icon" type="image/png" sizes="72x72" href="{{asset('icons/android-icon-72x72.png')}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{asset('icons/android-icon-96x96.png')}}">
<link rel="icon" type="image/png" sizes="144x144" href="{{asset('icons/android-icon-144x144.png')}}">
<link rel="icon" type="image/png" sizes="192x192" href="{{asset('icons/android-icon-192x192.png')}}">
