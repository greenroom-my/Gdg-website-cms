@extends('website._layouts.app', ['active' => 'blog'])
@section('title', 'Blog')

@section('layout')

    <div class="w-full max-w-screen-xl mx-auto px-6 lg:pt-30">
        <div class="lg:flex -mx-6">
            <div
                class="sticky z-10 inset-0 pt-16 h-full bg-white z-90 w-full border-b -mb-16 lg:-mb-0 lg:static lg:h-auto lg:overflow-y-visible lg:border-b-0 lg:pt-0 lg:w-1/4
                lg:block
                lg:border-0
                xl:w-1/5">
                <div class="h-full scrolling-touch lg:h-auto lg:block lg:relative lg:sticky lg:top-16 bg-white lg:bg-transparent">
                    <nav class="tabs lg:block inline-flex lg:justify-start justify-center w-full px-6 pt-10 pb-2 text-base lg:text-sm lg:pt-16 lg:pl-6 lg:pr-8 sticky?lg:h-(screen-16)">
                        <button data-target="panel-blog" class="tab active flex justify-start text-gray-600 py-2 px-6 block hover:text-gray-900 font-medium text-gray-600 focus:outline-none">
                            <svg class="h-6 w-6 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path class="text-gray-400 fill-current" d="M12 21a2 2 0 0 1-1.41-.59l-.83-.82A2 2 0 0 0 8.34 19H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4a5 5 0 0 1 4 2v16z"></path>
                                <path class="text-gray-700 fill-current" d="M12 21V5a5 5 0 0 1 4-2h4a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-4.34a2 2 0 0 0-1.42.59l-.83.82A2 2 0 0 1 12 21z"></path>
                            </svg>
                            Blog
                        </button>
                        <button data-target="panel-stories" class="tab flex justify-start text-gray-600 py-2 px-6 block hover:text-gray-900 font-medium text-gray-600 focus:outline-none">
                            <svg class="h-6 w-6 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path class="text-gray-400 fill-current" d="M3 6l9 4v12l-9-4V6zm14-3v2c0 1.1-2.24 2-5 2s-5-.9-5-2V3c0 1.1 2.24 2 5 2s5-.9 5-2z"></path>
                                <polygon class="text-gray-700 fill-current" points="21 6 12 10 12 22 21 18"></polygon>
                            </svg>
                            Stories
                        </button>
                    </nav>
                </div>
            </div>

            <div id="panels" class="min-h-screen w-full lg:static lg:max-h-full lg:overflow-visible lg:w-3/4 xl:w-4/5 ">
                <div class="panel-blog tab-content active py-5">
                    <div class="flex">
                        <div class="pb-16 lg:pt-24 pt-14 w-full">
                            <div class="grid lg:mx-20 mx-5">
                                @include('website.categories.blog.list')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-stories tab-content py-5">
                    <div class="flex">
                        <div class="pb-16 lg:pt-24 pt-14 w-full">
                            <div class="grid lg:mx-20 mx-5">
                                @include('website.categories.stories.list')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script>
        const tabs = document.querySelectorAll(".tabs");
        const tab = document.querySelectorAll(".tab");
        const panel = document.querySelectorAll(".tab-content");

        function onTabClick(event) {

            // deactivate existing active tabs and panel
            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active");
            }

            for (let i = 0; i < panel.length; i++) {
                panel[i].classList.remove("active");
            }

            // activate new tabs and panel
            event.target.classList.add('active');
            let classString = event.target.getAttribute('data-target');
            console.log(classString);
            document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
        }

        for (let i = 0; i < tab.length; i++) {
            tab[i].addEventListener('click', onTabClick, false);
        }
    </script>
@endpush
