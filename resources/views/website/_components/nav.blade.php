<nav class="flex flex-wrap items-center justify-between p-5">
    <a href="{{route('website.home')}}"><img class="h-10 w-100" src="{{'/images/gdg-logo.svg'}}" alt="logo"></a>

    <div class="flex md:hidden">
        <button id="hamburger">
            <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
            <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
    </div>
    <div class="toggle hidden md:flex w-full md:w-auto text-right text-bold mt-5 md:mt-0 border-t-2 border-gray-200 md:border-none">
        <a href="{{route('website.home')}}" class="block md:inline-block text-gray-900 hover:text-gray-500 font-bold px-3 py-3 border-b-2 border-gray-200 md:border-none">Home</a>
        <a href="{{route('website.event.index')}}" class="block md:inline-block text-gray-900 hover:text-gray-500 font-bold px-3 py-3 border-b-2 border-gray-200 md:border-none">Events</a>
        <a href="{{route('website.team')}}" class="block md:inline-block text-gray-900 hover:text-gray-500 font-bold px-3 py-3 border-b-2 border-gray-200 md:border-none">Team</a>
        <a href="#" class="block md:inline-block text-gray-900 hover:text-gray-500 font-bold px-3 py-3 border-b-2 border-gray-200 md:border-none">About Us</a>
        <a href="{{route('website.categories.index')}}" class="block md:inline-block text-gray-900 hover:text-gray-500 font-bold px-3 py-3 border-b-2 border-gray-200 md:border-none">Blog</a>
        <a href="#" class="block md:inline-block text-gray-900 hover:text-gray-500 font-bold px-3 py-3 border-b-2 border-gray-200 md:border-none">Contact</a>

    </div>

{{--    <a href="#" class="toggle hidden md:flex w-full md:w-auto px-4 py-2 text-right bg-blue-900 hover:bg-blue-500 text-white md:rounded">Create Account</a>--}}

</nav>

@push('script')
    <script>
        document.getElementById("hamburger").onclick = function toggleMenu() {
            const navToggle = document.getElementsByClassName("toggle");
            for (let i = 0; i < navToggle.length; i++) {
                navToggle.item(i).classList.toggle("hidden");
            }
        };
    </script>
@endpush
