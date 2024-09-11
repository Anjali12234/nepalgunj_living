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
                    Hospital
                </li>
            </ol>
        </div>
        <div class="mt-6 mx-5 mb-40">
            <h1 class="font-bold text-xl text-purple-950">Add the complete detail of your Hospital</h1>
            @include('error')

            <form class="mt-8" action="{{ route('user.hospitalList.store',$subCategory) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block md:grid grid-cols-4 pr-16">
                    <div class="col-span-2 mr-6">

                        <x-frontend.forms.input-type-field label="Hospital Name" id="hospital_name"
                            name="hospital_name" type="text" class="text-sm font-semibold" />


                        <x-frontend.forms.input-type-field label="Contact No" id="contact_number"
                            name="contact_number" type="text" class="text-sm font-semibold"
                            {{-- placeholder="Per Month" --}} />

                            <x-frontend.forms.text-area-component label="OPD Schedules" id="editor" name="o_p_d_schedule"
                            class="text-sm font-semibold" />

                        <x-frontend.forms.input-type-field label="Hospital Address" id="hospital_address"
                            name="hospital_address" type="text" class="text-sm font-semibold"
                            {{-- placeholder="Per Month" --}} />

                        <x-frontend.forms.text-area-component label="Details" id="editor" name="details"
                            class="text-sm font-semibold" />
                    </div>
                    <div class="col-span-2">

                        <x-frontend.forms.input-type-field label="YouTub Link" id="youtube_link"
                            name="youtube_link" type="text" class="text-sm font-semibold"
                            {{-- placeholder="Per Month" --}} />

                        <x-frontend.forms.input-type-field label="Map Url" id="map_url" name="map_url"
                            type="text" class="text-sm font-semibold" {{-- placeholder="Per Month" --}} />
                        <x-frontend.forms.input-type-field label="Twitter Url" id="twitter_url"
                            name="twitter_url" type="text" class="text-sm font-semibold"
                            {{-- placeholder="Per Month" --}} />


                        <x-frontend.forms.input-type-field label="Facebook Url" id="facebook_url"
                            name="facebook_url" type="text" class="text-sm font-semibold" />
                        <x-frontend.forms.input-type-field label="Whats App" id="whats_app_no"
                            name="whats_app_no" type="number" class="text-sm font-semibold" />

                            <x-frontend.forms.file-component
                            label="Hospital Image Of All Side"
                            id="files"
                            name="files[]"
                            type="file"
                            class="text-sm font-semibold" multiple="multiple"
                            {{-- placeholder="Per Month" --}}
                            />
                    </div>
                    <div class="col-span-4 flex justify-center mt-8">
                        <button type="submit"
                            class="px-6 pt-1 pb-2 bg-[#333] hover:bg-[#444] text-sm font-semibold text-white">Submit</button>
                    </div>
                </div>

            </form>


        </div>

    </div>


</x-guest-layout>
