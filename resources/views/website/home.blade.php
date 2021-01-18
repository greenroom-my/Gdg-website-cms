@extends('website._layouts.app', ['active' => 'home'])
@section('title', 'HomePage')

@section('layout')
    <!--banner--->
    <div style="background-image: url('images/sliderOne.jpg');" class="relative bg-no-repeat bg-cover lg:bg-center p-6 bg-top-center">
        <div class="max-w-6xl mx-auto lg:py-56 md:py-40 py-10">
            <h2 id="title" class="lg:text-5xl text-4xl font-semibold text-white leading-none mb-4">GDG George Town</h2>
            <div class="flex items-center flex-wrap justify-start max-w-2xl lg:mx-0 mx-auto">
                <div class="lg:pr-5 w-full mb-4 lg:mb-0">
                    <p class="text-white mb-2 tracking-wide">Google Developer Group (GDG) George Town started since 2013, We are a non profit community of like-minded developers who enjoy sharing our
                        experiences in developing applications with open sourced technologies. Meet other local developers and those interested in developer technologies.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!---connect learn grow--->
    <div class="container mx-auto lg:py-20 py-10">
        <div class="grid lg:grid-cols-3 md:grid-cols-6 sm:grid-cols-12 gap-4">
            <div class="lg:col-span-1 md:col-span-6 lg:p-10 px-10 py-5">
                <img class="h-20 w-100" src="{{'images/connect.svg'}}" alt="icon">
                <h4 class="text-blu-900 font-bold mt-2">Connect</h4>
                <p class="text-gray-900">Meet other local developers and those interested in developer technologies. </p>
            </div>

            <div class="lg:col-span-1 md:col-span-6 lg:p-10 px-10 py-5">
                <img class="h-20 w-100" src="{{'images/code.svg'}}" alt="icon">
                <h4 class="text-gray-900 font-bold mt-2">Learn</h4>
                <p class="text-gray-900">Learn about a wide range of technical topics where you can gain new skills through hands-on workshops and in-person training.</p></div>

            <div class="lg:col-span-1 md:col-span-6 lg:p-10 px-10 py-5">
                <img class="h-20 w-100" src="{{'images/grow.svg'}}" alt="icon">
                <h4 class="text-gray-900 font-bold mt-2">Grow</h4>
                <p class="text-gray-900">Apply your new learnings and connections to build great products, advance your skills, career and network.</p></div>
        </div>
    </div>

    <!---what we do--->
    <div class="container mx-auto px-10">
        <div class="grid lg:grid-cols-3 md:grid-cols-6 sm:grid-cols-12 gap-4">
            <div class="lg:col-span-1 md:col-span-6 lg:block hidden">
                <img src="{{'images/sliderTwo.jpg'}}" class="w-100 rounded-2xl">
            </div>
            <div class="lg:col-span-1 md:col-span-6 lg:block hidden">
                <img src="{{'images/sliderFour.jpg'}}" class="w-100 rounded-2xl">
            </div>
            <div class="lg:col-span-1 md:col-span-6 lg:block hidden">
                <img src="{{'images/sliderSix.jpg'}}" class="w-100 rounded-2xl">
            </div>

            <div class="lg:col-span-2 md:col-span-6 xl:block md:hidden hidden">
                <img src="{{'images/sliderThreeCode.jpg'}}" class="w-100 rounded-2xl">
            </div>

            <div class="lg:col-span-2 md:col-span-6 xl:hidden md:block">
                <img src="{{'images/sliderThreeCode-sm.jpg'}}" class="w-100 rounded-2xl">
            </div>

            <div class="xl:p-9 lg:p-5 p-1 lg:col-span-1 md:col-span-6">
                <h2 class="lg:text-5xl text-3xl font-semibold text-blue-500 mb-4">What we do?</h2>
                <p class="text-gray-900 mb-7">We organize over the year has organized various events, from talks, workshop, codelabs, hackathon & conferences talks for local
                    developers.</p>
                <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-blue-500 uppercase transition bg-transparent border-2 border-blue-500 rounded-full ripple
                hover:bg-blue-100 focus:outline-none waves-effect">
                    Know more
                </button>
            </div>
        </div>
    </div>

    <!---our past event--->
    <div class="bg-gray-100 mt-10">
        <div class="container mx-auto lg:py-20 py-10 px-10">
            <h2 class="lg:text-4xl text-3xl font-semibold text-blue-500 mb-4">Our Past Event</h2>
            <div class="flex flex-wrap overflow-hidden -mx-1 sm:-mx-2">
                <div class="w-full overflow-hidden my-3 px-1 sm:my-3 sm:px-2 md:w-1/2 lg:w-1/3 xl:w-1/3">
                    <a href="#">
                        <img src="{{'images/event/devfest-wtm.jpg'}}" class="w-100 rounded-2xl border hover:shadow">
                        <p class="font-bold text-gray-900 hover:text-gray-700 mt-2">DevFest WTM George Town 2020</p>
                        <div class="flex flex-wrap">
                            <div class="text-white text-xs px-2 py-1 mr-1 mt-1 rounded leading-none tracking-wide bg-blue-600">
                                Online
                            </div>
                            <div class="text-white text-xs px-2 py-1 mr-1 mt-1 rounded leading-none tracking-wide bg-green-600">
                                Flutter
                            </div>
                            <div class="text-white text-xs px-2 py-1 mr-1 mt-1 rounded leading-none tracking-wide bg-red-500">
                                Ui Ux
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-full overflow-hidden my-3 px-1 sm:my-3 sm:px-2 md:w-1/2 lg:w-1/3 xl:w-1/3">
                    <a href="#">
                        <img src="{{'images/event/devfest.jpg'}}" class="w-100 rounded-2xl border hover:shadow">
                        <p class="font-bold text-gray-900 hover:text-gray-700 mt-2">DevFest GDG George Town 2020</p>
                        <div class="flex flex-wrap">
                            <div class="text-white text-xs px-2 py-1 mr-1 mt-1 rounded leading-none tracking-wide bg-blue-600">
                                Online
                            </div>
                            <div class="text-white text-xs px-2 py-1 mr-1 mt-1 rounded leading-none tracking-wide bg-yellow-500">
                                Web
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-full overflow-hidden my-3 px-1 sm:my-3 sm:px-2 md:w-1/2 lg:w-1/3 xl:w-1/3">
                    <a href="#">
                        <img src="{{'images/event/webdev.jpg'}}" class="w-100 rounded-2xl border hover:shadow">
                        <p class="font-bold text-gray-900 hover:text-gray-700 mt-2">web.dev Live George Town 2020</p>
                        <div class="flex flex-wrap">
                            <div class="text-white text-xs px-2 py-1 mr-1 mt-1 rounded leading-none tracking-wide bg-blue-600">
                                Online
                            </div>
                            <div class="text-white text-xs px-2 py-1 mr-1 mt-1 rounded leading-none tracking-wide bg-yellow-500">
                                Web
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full overflow-hidden flex justify-center mt-10">
                    <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-blue-500 uppercase transition bg-transparent border-2 border-blue-500 rounded-full ripple
                hover:bg-blue-100 focus:outline-none waves-effect">
                        View More
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!---Join Us-->
    <div class="bg-blue-700">
        <div class="container mx-auto px-10 py-20">
            <h2 class="lg:text-4xl text-3xl font-semibold text-white mb-4">Join us as community</h2>
            <p class="text-white mb-5">Be respectful to each other. Treat everyone with respect. Participate while acknowledging that everyone deserves to be here — and each of us has the right to
                enjoy our experience without fear of harassment, discrimination, or condescension, whether blatant or via micro-aggressions. All forms of communication should not demean others.
                Consider what you are saying and how it would feel if it were said to you or about you.</p>
            <p class="text-white mb-10">Speak up if you see or hear something. Harassment is not tolerated, and you are empowered to politely engage when you or others are disrespected. The person
                making you feel
                uncomfortable may not be aware of what they are doing, and politely bringing their behavior to their attention is encouraged.
            </p>
            <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-transparent border-2 border-white rounded-full ripple
                hover:bg-blue-500 focus:outline-none waves-effect">
                Apply Now
            </button>
        </div>
    </div>

    <!---partner-->
    <div class="container mx-auto py-10 px-10 pb-10">
        <div class="flex -mx-1 overflow-hidden sm:-mx-2 md:-mx-1">
            <div class="my-1 px-1 w-1/1 overflow-hidden sm:my-2 sm:px-2 w-1/1 md:my-1">
                <h2 class="lg:text-4xl text-3xl font-semibold text-blue-500 mb-4">Partners</h2>
                <p class="text-gray-900 mb-10">A very big thank you to all our partners for their continued partnership. <br>
                    If you’re interested in being showcased throughout GDG George Town, contact hello@gdggeorgetown.dev to discuss sponsorship opportunities.</p>
                <p class="text-gray-500">Community Partner</p>
            </div>
        </div>

        <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-2 md:-mx-1 lg:-mx-8">
            <div class="my-1 px-1 w-1/2 overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-1 lg:m md:px-1 md:w-1/3 lg:px-10 lg:w-1/4 xl:w-1/4">
                <img class="w-100" src="{{'images/partners/gdg.svg'}}" alt="logo">
            </div>

            <div class="my-1 px-1 w-1/2 overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-1 lg:m md:px-1 md:w-1/3 lg:px-10 lg:w-1/4 xl:w-1/4">
                <img class="w-100" src="{{'images/partners/wtm.svg'}}" alt="logo">
            </div>

            <div class="my-1 px-1 w-1/2 overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-1 lg:m md:px-1 md:w-1/3 lg:px-10 lg:w-1/4 xl:w-1/4">
                <img class="w-100" src="{{'images/partners/gbg.png'}}" alt="logo">
            </div>

            <div class="my-1 px-1 w-1/2 overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-1 lg:m md:px-1 md:w-1/3 lg:px-10 lg:w-1/4 xl:w-1/4">
                <img class="w-100" src="{{'images/partners/womenwill.png'}}" alt="logo">
            </div>

            <div class="my-1 px-1 w-1/2 overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-1 lg:m md:px-1 md:w-1/3 lg:px-10 lg:w-1/4 xl:w-1/4">
                <img class="w-100" src="{{'images/partners/emanon.svg'}}" alt="logo">
            </div>

            <div class="my-1 px-1 w-1/2 overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-1 lg:m md:px-1 md:w-1/3 lg:px-10 lg:w-1/4 xl:w-1/4">
                <img class="w-100" src="{{'images/partners/greenroom.svg'}}" alt="logo">
            </div>

        </div>
    </div>
@endsection

@push('script')
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        (function () {
            var title = ['GDG George Town', 'Make good things together',], i = 0;
            setInterval(function () {
                $('#title').fadeOut(function () {
                    $(this).html(title[i = (i + 1) % title.length]).fadeIn();
                });
            }, 3500);
        })();
    </script>
@endpush
