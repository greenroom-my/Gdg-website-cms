@extends('website._layouts.app', ['active' => 'event'])
@section('title', 'Events')

@section('layout')
    <div class="container mx-auto lg:pt-20 px-10">
        <h2 class="lg:text-4xl text-3xl font-semibold text-blue-500 mb-4">Blog</h2>
        <div class="flex -mx-1 overflow-hidden sm:-mx-2 md:-mx-1">
            <div class="my-1 px-1 w-1/1 overflow-hidden sm:my-2 sm:px-2 w-1/1 md:my-1">
                <p class="text-gray-900 mb-10">There are no upcoming events at the moment. Please check again soon.</p>
            </div>
        </div>
    </div>

@endsection
