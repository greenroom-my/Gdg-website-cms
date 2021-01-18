@extends('website._layouts.app', ['active' => 'team'])
@section('title', 'Team')

@section('layout')

    <div class="container mx-auto lg:pt-20 px-10">
        <div class="flex -mx-1 overflow-hidden sm:-mx-2 md:-mx-1">
            <div class="my-1 px-1 w-1/1 overflow-hidden sm:my-2 sm:px-2 w-1/1 md:my-1">
                <p class="text-gray-900 mb-10">We are a big family, bla bla <br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </div>

    <!---team--->
    <div class="container mx-auto lg:pb-20 py-10">
        <div class="grid lg:grid-cols-6 md:grid-cols-6 sm:grid-cols-12 gap-6">
            <div class="lg:col-span-1 md:col-span-6 lg:p-5 px-10 py-2">
                <div class="flex flex-wrap justify-center">
                    <div class="w-6/12 sm:w-8/12 text-center">
                        <img src="images/team/vin.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none"/>
                        <p class="font-bold text-gray-800 mt-2">Vin Lim</p>
                        <p class="text-sm mb-2">Founder</p>
                        <a href=""><i class="fab fa-twitter text-blue-500 pr-1"></i></a> <a href=""><i class="fab fa-linkedin-in text-blue-600 pr-1"></i></a> <a href=""><i class="fab fa-github
                        text-gray-500"></i></a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1 md:col-span-6 lg:p-5 px-10 py-2">
                <div class="flex flex-wrap justify-center">
                    <div class="w-6/12 sm:w-8/12 text-center">
                        <img src="images/team/louis.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none"/>
                        <p class="font-bold text-gray-800 mt-2">Louis Yoong</p>
                        <p class="text-sm mb-2">Organizer GDG</p>
                        <a href=""><i class="fab fa-twitter text-blue-500 pr-1"></i></a> <a href=""><i class="fab fa-linkedin-in text-blue-600 pr-1"></i></a> <a href=""><i class="fab fa-github
                        text-gray-500"></i></a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1 md:col-span-6 lg:p-5 px-10 py-2">
                <div class="flex flex-wrap justify-center">
                    <div class="w-6/12 sm:w-8/12 text-center">
                        <img src="images/team/rara.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none"/>
                        <p class="font-bold text-gray-800 mt-2">Racheal Ooi</p>
                        <p class="text-sm mb-2">Organizer WTM</p>
                        <a href=""><i class="fab fa-twitter text-blue-500 pr-1"></i></a> <a href=""><i class="fab fa-linkedin-in text-blue-600 pr-1"></i></a> <a href=""><i class="fab fa-github
                        text-gray-500"></i></a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1 md:col-span-6 lg:p-5 px-10 py-2">
                <div class="flex flex-wrap justify-center">
                    <div class="w-6/12 sm:w-8/12 text-center">
                        <img src="images/team/edward.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none"/>
                        <p class="font-bold text-gray-800 mt-2">Edward Cheng</p>
                        <p class="text-sm mb-2">Co-Organizer</p>
                        <a href=""><i class="fab fa-twitter text-blue-500 pr-1"></i></a> <a href=""><i class="fab fa-linkedin-in text-blue-600 pr-1"></i></a> <a href=""><i class="fab fa-github
                        text-gray-500"></i></a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1 md:col-span-6 lg:p-5 px-10 py-2">
                <div class="flex flex-wrap justify-center">
                    <div class="w-6/12 sm:w-8/12 text-center">
                        <img src="images/team/jun.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none"/>
                        <p class="font-bold text-gray-800 mt-2">Jun Teoh</p>
                        <p class="text-sm mb-2">Designer</p>
                        <a href=""><i class="fab fa-twitter text-blue-500 pr-1"></i></a> <a href=""><i class="fab fa-linkedin-in text-blue-600 pr-1"></i></a> <a href=""><i class="fab fa-github
                        text-gray-500"></i></a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1 md:col-span-6 lg:p-5 px-10 py-2">
                <div class="flex flex-wrap justify-center">
                    <div class="w-6/12 sm:w-8/12 text-center">
                        <img src="images/team/jason.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none"/>
                        <p class="font-bold text-gray-800 mt-2">Jason Seah</p>
                        <p class="text-sm mb-2">Committee</p>
                        <a href=""><i class="fab fa-twitter text-blue-500 pr-1"></i></a> <a href=""><i class="fab fa-linkedin-in text-blue-600 pr-1"></i></a> <a href=""><i class="fab fa-github
                        text-gray-500"></i></a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1 md:col-span-6 lg:p-5 px-10 py-2">
                <div class="flex flex-wrap justify-center">
                    <div class="w-6/12 sm:w-8/12 text-center">
                        <img src="images/team/jc.jpg" alt="..." class="shadow rounded-full max-w-full h-auto align-middle border-none"/>
                        <p class="font-bold text-gray-800 mt-2">Jc Tan</p>
                        <p class="text-sm mb-2">Committee</p>
                        <a href=""><i class="fab fa-twitter text-blue-500 pr-1"></i></a> <a href=""><i class="fab fa-linkedin-in text-blue-600 pr-1"></i></a> <a href=""><i class="fab fa-github
                        text-gray-500"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
