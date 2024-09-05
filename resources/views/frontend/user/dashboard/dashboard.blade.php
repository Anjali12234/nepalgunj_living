{{-- <x-guest-layout>


    <div class="px-0 pt-10 md:px-20 md:pt-[6px]">
        @include('frontend.user.dashboard.userhead')
        <div class="flex  grid-cols-4 gap-4  sm:pr-30 ">
            <div class=" hidden lg:block ">

                @include('frontend.user.dashboard.layout.sidebar')
            </div>
            <div class=" col-span-3 mt-3 w-5/6 pl-3">

                @yield('content')
            </div>
        </div>

</x-guest-layout> --}}
<x-guest-layout>
    <div class="px-0 pt-10 md:px-20 md:pt-[6px] ">
        @include('frontend.user.dashboard.userhead')

       <div class="grid grid-cols-4 mt-4">
        <div>
           @include('frontend.user.dashboard.layout.sidebar')
        </div>
@yield('content')
       </div>
    </div>
</x-guest-layout>
