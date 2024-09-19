<div class="hidden lg:flex cursor-pointer">
    <div class="lg:grid grid-cols-5 hidden gap-7 mr-4 ml-[18.5rem]">
        <div class="text-black font-medium text-left px-2 py-4 block">
            @foreach (subCategories() as $subCategory)
            @if ($subCategory->category_type == \App\Enums\CategoryTypeEnum::PROPERTIES)
         <a href="{{ route('properties',$subCategory->slug) }}">  <p class="text-xs  lg:text-sm whitespace-nowrap">{{ $subCategory?->title_en }}</p>
         </a>
            @endif
            @endforeach

        </div>
        <div class="text-black font-medium text-left px-2 py-4">
            <p class="text-xs  lg:text-sm whitespace-nowrap">Cars for sale</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Showrooms</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Car for rent</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Car for rentals</p>
        </div>
        <div class="text-black font-medium text-left px-2 py-4">
            <p class="text-xs  lg:text-sm whitespace-nowrap">Cars for sale</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Showrooms</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Car for rent</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Car for rentals</p>
        </div>
        <div class="text-black font-medium text-left px-2 py-4">
            <p class="text-xs  lg:text-sm whitespace-nowrap">Cars for sale</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Showrooms</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Car for rent</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Car for rentals</p>
        </div>
        <div class="text-black font-medium text-left px-2 py-4">
            <p class="text-xs  lg:text-sm whitespace-nowrap">Cars for sale</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Showrooms</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Car for rent</p>
            <p class="text-xs  lg:text-sm whitespace-nowrap">Car for rentals</p>
        </div>
        <!-- Repeat the same structure for the other columns -->
    </div>

    <div class="text-black-200 font-medium text-left py-11">
        <div
            class="bg-white flex px-4 py-3 border-b border-gray-300 focus-within:border-blue-500 overflow-hidden max-w-md mx-auto font-[sans-serif]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="18px"
                class="fill-black-200 mr-3">
                <path
                    d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                </path>
            </svg>
            <input type="email" placeholder="Search Something..." class="w-full outline-none text-xs lg:text-sm" />
        </div>
    </div>
</div>
