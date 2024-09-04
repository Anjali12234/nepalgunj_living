<x-guest-layout>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5-premium-features/43.0.0/ckeditor5-premium-features.css">

    <div class="sm:pl-20 sm:pr-30 ">
        <div class="  mt-14">
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                        href="#">
                        Home
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                        href="#">
                        {{ $subCategory->category->title_en }}
                        <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </li>
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200"
                    aria-current="page">
                    {{ $subCategory->title_en }}
                </li>
            </ol>
        </div>
        <div class="mt-6">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of your property</h1>
            @include('error')

            <form class="mt-8" action="">
                <div class="grid grid-cols-3 pr-16">
                    <div class="col-span-2 mr-6">
                        <x-frontend.forms.select-type-field label="Is Rent" id="is_rent" name="is_rent" class="text-sm font-semibold"
                            :options="['rent' => 'For Rent', 'sale' => 'For Sale']" />

                            <x-frontend.forms.input-type-field
                        label="Title"
                        id="title"
                        name="title"
                        type="text"
                        class="text-sm font-semibold"
                        />
                            <x-frontend.forms.input-type-field
                        label="Rate"
                        id="rate"
                        name="rate"
                        type="text"
                        class="text-sm font-semibold"
                        placeholder="Per Month"
                        />
                            <x-frontend.forms.input-type-field
                        label="Property Owner"
                        id="property_owner"
                        name="property_owner"
                        type="text"
                        class="text-sm font-semibold"
                        {{-- placeholder="Per Month" --}}
                        />
                            <x-frontend.forms.input-type-field
                        label="Phone Number"
                        id="phone_no"
                        name="phone_no"
                        type="number"
                        class="text-sm font-semibold"
                        {{-- placeholder="Per Month" --}}
                        />
                            <x-frontend.forms.input-type-field
                        label="Whats App"
                        id="whats_app"
                        name="whats_app"
                        type="text"
                        class="text-sm font-semibold"
                        {{-- placeholder="Per Month" --}}
                        />
                            <x-frontend.forms.input-type-field
                        label="Email"
                        id="email"
                        name="email"
                        type="email"
                        class="text-sm font-semibold"
                        {{-- placeholder="Per Month" --}}
                        />
                            <x-frontend.forms.input-type-field
                        label="Email"
                        id="email"
                        name="email"
                        type="email"
                        class="text-sm font-semibold"
                        {{-- placeholder="Per Month" --}}
                        />
                    </div>
                    <div class="">
                        <h1>haelkj</h1>

                    </div>

                </div>
            </form>
        </div>

    </div>


</x-guest-layout>
