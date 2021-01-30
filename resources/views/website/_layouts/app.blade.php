@extends('_base')

@section('main')
    <div class="fixed w-full bg-white shadow-md z-50">
        @include('website._components.nav')
    </div>
    @yield('layout')
    @include('website._components.footer')
@endsection
