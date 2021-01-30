@extends('website._layouts.app', ['active' => 'blog'])
@section('title', 'Detail')

@section('layout')

    <div class="w-full max-w-screen-xl mx-auto px-6 pt-30">
        <div class="lg:flex -mx-6">
            <div
                class="sticky z-10 inset-0 pt-16 h-full bg-white z-90 w-full border-b -mb-16 lg:-mb-0 lg:static lg:h-auto lg:overflow-y-visible lg:border-b-0 lg:pt-0 lg:w-1/4">
                <div class="h-full overflow-y-auto scrolling-touch lg:h-auto lg:block lg:relative lg:sticky lg:top-16 bg-white lg:bg-transparent">
                    <nav class="tabs lg:block inline-flex px-6 pt-10 pb-2 overflow-y-auto text-base lg:text-sm lg:pt-16 lg:pl-6 lg:pr-8 sticky?lg:h-(screen-16)">
                        <a href="{{route('website.categories.index')}}"  data-target="panel-10" class="tab active flex justify-start text-gray-600 py-2 px-6 block hover:text-gray-900 font-medium
                        text-gray-600
                        focus:outline-none">
                            <svg class="h-6 w-6 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path class="text-gray-400 fill-current" d="M12 21a2 2 0 0 1-1.41-.59l-.83-.82A2 2 0 0 0 8.34 19H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4a5 5 0 0 1 4 2v16z"></path>
                                <path class="text-gray-700 fill-current" d="M12 21V5a5 5 0 0 1 4-2h4a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-4.34a2 2 0 0 0-1.42.59l-.83.82A2 2 0 0 1 12 21z"></path>
                            </svg>
                            Blog
                        </a>
                        <a href="{{route('website.categories.index')}}" data-target="panel-20" class="tab flex justify-start text-gray-600 py-2 px-6 block hover:text-gray-900 font-medium text-gray-600
                        focus:outline-none">
                            <svg class="h-6 w-6 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path class="text-gray-400 fill-current" d="M3 6l9 4v12l-9-4V6zm14-3v2c0 1.1-2.24 2-5 2s-5-.9-5-2V3c0 1.1 2.24 2 5 2s5-.9 5-2z"></path>
                                <polygon class="text-gray-700 fill-current" points="21 6 12 10 12 22 21 18"></polygon>
                            </svg>
                            Stories
                        </a>
                    </nav>
                </div>
            </div>

            <div class="min-h-screen w-full lg:static lg:max-h-full lg:overflow-visible lg:w-3/4 xl:w-4/5 ">
                <div class="pt-7 pb-5">
                    <div class="flex">
                        <div class="pt-16 pb-16 lg:pt-28 w-full">
                            <div class="markdown mb-6 px-6 max-w-3xl mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:px-12 xl:w-3/4">
                                <h1 class="flex items-center font-bold text-xl">
                                    This is second
                                </h1>
                                <p class="text-gray-500 text-sm">Thursday, October 15, 2020</p>
                                <p class="italic mt-3">Posted by Vin Lim, Google Developer Expert</p>
                                <div class="mt-0 mb-4 text-gray-600">
                                    <img src="{{'/images/event/devfest.jpg'}}" class="w-100 py-5">
                                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                        parturient
                                        montes, nascetur ridiculus mus.</p>
                                    <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                                        vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                        parturient
                                        montes, nascetur ridiculus mus.</p>
                                    <p class="mt-5">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                                        vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                        parturient
                                        montes, nascetur ridiculus mus.</p>
                                    <p class="mt-5">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                                        vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                    <p class="mt-5">In fact, we’ve already open sourced this project, which you can find <a href="#" class="text-blue-500 hover:text-blue-700">here</a>.</p>
                                </div>
                                <hr class="mt-8 mb-5 border-b-1 border-gray-200">
                                <div class="flex">
                                    <div class="text-white text-xs px-2 py-1 mr-1 rounded leading-none tracking-wide bg-blue-600">
                                        Online
                                    </div>
                                    <div class="text-white text-xs px-2 py-1 mr-1 rounded leading-none tracking-wide bg-yellow-500">
                                        Web
                                    </div>
                                    <div class="w-10/12 flex justify-end">
                                        <a href="#" class="text-sm text-gray-600 hover:text-gray-800">Read More <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

