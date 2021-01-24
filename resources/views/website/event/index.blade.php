@extends('website._layouts.app', ['active' => 'event'])
@section('title', 'Events')

@section('layout')
    @include('website.event._partial.upcoming')
    @include('website.event._partial.past')
@endsection
