<x-guest-layout>

    <div class="sm:pl-20 sm:pr-30 ">
        <div class="mx-5  mt-14">
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
        <div class="mt-6 mx-5">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of your property</h1>
            @include('error')

            <form class="mt-8" action="{{ route('user.property.store',$subCategory) }}" method="POST" enctype="multipart/form-data">
               @csrf
                <div class="block md:grid grid-cols-3 pr-16">
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

                        <x-frontend.forms.text-area-component
                        label="Description"
                        id="editor"
                        name="description" class="text-sm font-semibold"/>

                        <x-frontend.forms.text-area-component
                        label="Location"
                        id="location"
                        name="location" class="text-sm font-semibold"/>

                        <x-frontend.forms.input-type-field
                        label="Bed Room"
                        id="bed_room"
                        name="bed_room"
                        type="number"
                        class="text-sm font-semibold"
                        {{-- placeholder="Per Month" --}}
                        />

                        <x-frontend.forms.input-type-field
                        label="Bath Room"
                        id="bathroom"
                        name="bathroom"
                        type="number"
                        class="text-sm font-semibold"
                        {{-- placeholder="Per Month" --}}
                        />


                        <button type="button submit"
                        class="!mt-8 px-6 pt-1 pb-2  bg-[#333] hover:bg-[#444] text-sm font-semibold text-white mx-auto block">Submit</button>
                    </div>
                    <div class="">

                        <x-frontend.forms.select-type-field label="Internet" id="internet" name="internet" class="text-sm font-semibold"
                        :options="['include' => 'Include', 'exclude' => 'Exclude']" />

                        <x-frontend.forms.select-type-field label="Parking" id="parking" name="parking" class="text-sm font-semibold"
                        :options="['include' => 'Include', 'exclude' => 'Exclude']" />


                        <x-frontend.forms.input-type-field
                        label="Square Feet"
                        id="area"
                        name="area"
                        type="type"
                        class="text-sm font-semibold"
                        {{-- placeholder="Per Month" --}}
                        />

                        <x-frontend.forms.input-type-field
                        label="Parking"
                        id="parking"
                        name="parking"
                        type="type"
                        class="text-sm font-semibold"
                        {{-- placeholder="Per Month" --}}
                        />
                    </div>

                </div>
            </form>
        </div>

    </div>


</x-guest-layout>
