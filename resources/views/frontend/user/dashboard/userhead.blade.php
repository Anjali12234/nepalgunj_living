<div class="h-72 md:h-24 bg-neutral-100">
    <div class="block md:flex md:justify-between px-0 md:px-5 pt-3 items-center text-center md:text-left">
        <div class="flex flex-col md:flex-row items-center">
            <img src="{{ asset('assets/frontend/static/Missing-Avatar.png') }}" class="rounded-full w-16 h-16 mx-auto md:mx-0" alt="">
            <div class="block ml-0 md:ml-5 mt-3 md:mt-0">
                <h1 class="font-semibold text-[2rem] md:text-xl mb-1">{{ Auth::guard('registered-user')->user()->username }}</h1>
                <h1 class="font-semibold text-[12px] mb-1">
                    Member since: {{ Auth::guard('registered-user')->user()->created_at->format('F Y') }}
                </h1>
                <img src="{{ asset('assets/frontend/static/verified-off.png') }}" class=" mb-2 rounded-full mx-auto md:mx-0" alt="">
            </div>
        </div>
        <a href="" class="mt-3 md:mt-0 bg-white p-2 text-xs md:ml-auto">Send a Message</a>
    </div>
</div>
