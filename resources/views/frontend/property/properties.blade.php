<x-guest-layout>
    <div class="bg-sky-700 mx-24 font-mono">
        <!-- Toggle for For Rent and For Sale -->
        <div class="flex justify-center mb-4">
            <div class="flex items-center bg-white rounded-full p-1 mt-6">
                <button class="bg-blue-700 text-white px-4 py-1 rounded-full">For Rent</button>
                <button class="text-blue-700 px-4 py-1 rounded-full">For Sale</button>
            </div>
        </div>
        <!-- Tabs for Residential and Commercial -->
        <div class="flex space-x-1">
            <button class="bg-blue-700 text-white px-4 py-2  focus:outline-none">Residential</button>
            <button class="bg-white text-blue-700 px-4 py-2  focus:outline-none">Commercial</button>
        </div>
    </div>
    <div class="bg-cyan-900 mx-24 p-4 font-mono">


        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-3 md:col-span-8 flex gap-6">
                <div>
                    <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-4">
                        <div class="w-full sm:w-1/4">
                            <label for="bedrooms" class=" text-white text-xs mb-1">PROPERTIES</label>
                            <select type="text" id="bedrooms" placeholder="Any"
                                class="w-56 p-1 text-xs text-white bg-cyan-900 border-b border-blue-400 focus:outline-none focus:border-blue-300 placeholder-blue-300">
                                <option>Any</option>
                            </select>
                        </div>
                        <div class="w-full sm:w-1/4">
                            <label for="bedrooms" class=" text-white text-xs mb-1">BEDROOMS</label>
                            <select type="text" id="bedrooms" placeholder="Any"
                                class="w-56 p-1 text-xs text-white bg-cyan-900 border-b border-blue-400 focus:outline-none focus:border-blue-300 placeholder-blue-300">
                                <option>Any</option>
                            </select>
                        </div>
                        <div class="w-full sm:w-1/4">
                            <label for="location" class=" text-white text-xs mb-1">LOCATION</label>
                            <select type="text" id="bedrooms" placeholder="Any"
                                class="w-56 p-1 text-white text-xs bg-cyan-900 border-b border-blue-400 focus:outline-none focus:border-blue-300 placeholder-blue-300">
                                <option>Any</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 md:col-span-4">
                <div
                    class="flex rounded-md border-2 border-blue-500 overflow-hidden max-w-md mt-4 mx-auto font-[sans-serif]">
                    <input type="email" placeholder="Search Something..."
                        class="w-full h-[34px] outline-none bg-white text-gray-600 text-sm px-4 py-3" />
                    <button type='button' class="flex items-center justify-center bg-[#007bff] px-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"
                            class="fill-white">
                            <path
                                d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                            </path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>


        <!-- Price Section -->
        <div class="grid grid-cols-2 gap-4 mb-4 text-xs">
            <div class="mt-4">
                <label class="text-white block mb-1">PRICE</label>
                <div class="flex space-x-2">
                    <input type="number" placeholder="- Min-"
                        class=" bg-cyan-900 border border-indigo-100 text-white p-2  w-16">
                    <input type="number" placeholder="- Max -"
                        class="bg-cyan-900 border border-indigo-100 text-white p-2  w-16">
                </div>
            </div>
            <div class="mt-4">
                <div class="flex space-x-2 justify-end mt-4">
                    <button type="button" class="bg-cyan-900 border border-indigo-100 text-white p-2 text-center">
                        SEARCH </button>
                    <button type="button"
                        class="bg-cyan-900 border border-indigo-100 text-white p-2  text-center">-CLEAR -</button>
                    <button type="button" class="border border-white text-white px-4 py-2 rounded">VIEW ALL
                        FILTER</button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 items-center">
            <div class="w-full">
                <label for="bedrooms" class="text-white text-xs mb-1">BATHROOMS</label>
                <select id="bedrooms"
                    class="w-full p-1 text-xs text-white bg-cyan-900 border-b border-blue-400 focus:outline-none focus:border-blue-300 placeholder-blue-300">
                    <option>Any</option>
                </select>
            </div>

            <div class="w-full">
                <label for="property-features" class="text-white text-xs mb-1">PROPERTY FEATURES</label>
                <select id="property-features"
                    class="w-full p-1 text-xs text-white bg-cyan-900 border-b border-blue-400 focus:outline-none focus:border-blue-300 placeholder-blue-300">
                    <option>Any</option>
                </select>
            </div>

            <div class="w-full">
                <label for="furnishing" class="text-white text-xs mb-1">FURNISHING</label>
                <select id="furnishing"
                    class="w-full p-1 text-xs text-white bg-cyan-900 border-b border-blue-400 focus:outline-none focus:border-blue-300 placeholder-blue-300">
                    <option>Any</option>
                </select>
            </div>

            <div class="w-full">
                <label for="parking" class="text-white text-xs mb-1">PARKING</label>
                <select id="parking"
                    class="w-full p-1 text-xs text-white bg-cyan-900 border-b border-blue-400 focus:outline-none focus:border-blue-300 placeholder-blue-300">
                    <option>Any</option>
                </select>
            </div>

            <div class="w-full">
                <label for="sort-by" class="text-white text-xs mb-1">SORT BY</label>
                <select id="sort-by"
                    class="w-full p-1 text-xs text-white bg-cyan-900 border-b border-blue-400 focus:outline-none focus:border-blue-300 placeholder-blue-300">
                    <option>Any</option>
                </select>
            </div>

            <div class="w-full">
                <label for="company-or-agent" class="text-white text-xs mb-1">COMPANY OR AGENT</label>
                <select id="company-or-agent"
                    class="w-full p-1 text-xs text-white bg-cyan-900 border-b border-blue-400 focus:outline-none focus:border-blue-300 placeholder-blue-300">
                    <option>Any</option>
                </select>
            </div>

            <!-- Buttons aligned to the end of the container -->
            <div class="w-full flex justify-end ml-[49rem] gap-2">
                <button class="border border-gray-100 p-1 text-white text-xs w-28">SEARCH</button>
                <button class="border border-gray-100 p-1 text-white text-xs w-28">CLEAR</button>
            </div>
        </div>

    </div>



    <div class="overflow-hidden mx-24 mt-4 mb-4 grid grid-cols-1 lg:grid-cols-3 gap-4 font-mono">
        <!-- News & Articles Section -->
        <div class="col-span-1">
            <h2 class="text-xl font-semibold mb-4">News & Articles</h2>
            <div class="space-y-2">
                <!-- Article Item -->
                <div class="bg-white  shadow-md p-4 overflow-hidden">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Flisting_ratio_3_2%2Fs3%2Fpost%2F2024%2F08%2F25%2FArticle%2520Artwork.jpg&w=384&q=75"
                        alt="News Image" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-sm font-medium">The Commercial Avenue and Al Saif Gallery Sign Long-Term Lease
                            Agreement</h3>
                    </div>
                </div>
                <!-- Add more articles here -->
                <div class="bg-white  shadow-md overflow-hidden">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Flisting_ratio_3_2%2Fs3%2Fpost%2F2024%2F08%2F25%2FArticle%2520Artwork.jpg&w=384&q=75"
                        alt="News Image" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="text-sm font-medium">The Commercial Avenue and Al Saif Gallery Sign Long-Term Lease
                            Agreement</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Property Listings Section -->
        <div class="col-span-2 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            <!-- Property Card -->
            <div class="bg-white shadow-md overflow-hidden">
                <a href="{{ route('propertyDetails') }}">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F07%2F20%2F9999102%2FDSC09776_1.jpg&w=384&q=75"
                        alt="Property Image" class="w-full h-40 object-cover">
                    <div class="p-2">
                        <h4 class="text-xs font-bold text-gray-500 uppercase">Apartment</h4>
                        <p class="text-lg font-semibold">Brand New Furnished Studio</p>
                        <p class="text-lg text-blue-600 font-bold">4,300 QAR/Month</p>
                        <div class="flex items-center gap-6">
                            <p class="text-xs text-gray-400">FEREEJ ABDEL AZIZ</p>
                            <p class="text-xs text-gray-400">9 hours ago</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="bg-white shadow-md overflow-hidden">
                <a href="{{ route('propertyDetails') }}">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F07%2F20%2F9999102%2FDSC09776_1.jpg&w=384&q=75"
                        alt="Property Image" class="w-full h-40 object-cover">
                    <div class="p-2">
                        <h4 class="text-xs font-bold text-gray-500 uppercase">Apartment</h4>
                        <p class="text-lg font-semibold">Brand New Furnished Studio</p>
                        <p class="text-lg text-blue-600 font-bold">4,300 QAR/Month</p>
                        <div class="flex items-center gap-6">
                            <p class="text-xs text-gray-400">FEREEJ ABDEL AZIZ</p>
                            <p class="text-xs text-gray-400">9 hours ago</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="bg-white shadow-md overflow-hidden">
                <a href="{{ route('propertyDetails') }}">
                    <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Fvehicle_listing_v3%2Fs3%2Fvehicles%2F2024%2F07%2F20%2F9999102%2FDSC09776_1.jpg&w=384&q=75"
                        alt="Property Image" class="w-full h-40 object-cover">
                    <div class="p-2">
                        <h4 class="text-xs font-bold text-gray-500 uppercase">Apartment</h4>
                        <p class="text-lg font-semibold">Brand New Furnished Studio</p>
                        <p class="text-lg text-blue-600 font-bold">4,300 QAR/Month</p>
                        <div class="flex items-center gap-6">
                            <p class="text-xs text-gray-400">FEREEJ ABDEL AZIZ</p>
                            <p class="text-xs text-gray-400">9 hours ago</p>
                        </div>
                    </div>
                </a>
            </div>



            <!-- Repeat for other property cards -->

            <!-- Single Ad Section -->


            <div class="bg-white  shadow-md col-span-full flex flex-col md:flex-row gap-4 overflow-hidden">
                <img src="https://www.qatarliving.com/q/s3/files/styles/listing_ratio_3_2/s3/vehicles/2024/08/04/7476736/%D9%A2%D9%A0%D9%A2%D9%A4%D9%A0%D9%A8%D9%A0%D9%A4_%D9%A1%D9%A2%D9%A5%D9%A5%D9%A1%D9%A0.jpg"
                    alt="Ad Image" class="w-full md:w-1/3 h-40 object-cover mb-2 md:mb-0">
                <div class="flex-1 mt-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <h4 class="text-xs font-bold text-blue-500 uppercase mb-1">For Rent • Residential • Villa
                                Apartment</h4>
                        </div>
                        <div class="col-span-1 flex justify-end items-center">
                            <h4 class="text-xs font-bold text-blue-500 uppercase mb-1 flex items-center mr-4">
                                <i class="ti ti-map-pin"></i> Nepalgunj
                            </h4>
                        </div>
                    </div>
                    <p class="text-lg font-semibold">Flat for rent in bin Omran.. room hall.. only Philippines</p>
                    <div class="flex items-center space-x-4 mt-2 justify-end mr-8">
                        <button class="bg-blue-600 text-white py-1 px-3 rounded text-sm">Contact</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 mt-4 gap-4 mb-2">
                        <div class="col-span-1">
                            <div>
                                <p class="text-lg text-blue-600 font-bold">2,800 QAR/Month</p>
                                <div class="flex gap-4">
                                    <p class="text-md font-normal flex items-center">
                                        <i class="ti ti-bed text-2xl mr-2"></i> Studio
                                    </p>
                                    <p class="text-md font-normal flex items-center">
                                        <i class="ti ti-bath text-2xl mr-2"></i>1
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 justify-end items-center">
                            <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Ficons%2Fs3%2Fusers%2F2016%2F06%2F07%2FVILLA%20PHOTO.jpg&w=48&q=75"
                                alt="" class="ml-56 mt-2">
                            <p class="text-xs  text-gray-400 mt-1">Updated 52 minutes ago by Hamdan real estate</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white  shadow-md col-span-full flex flex-col md:flex-row gap-4 overflow-hidden">
                <img src="https://www.qatarliving.com/q/s3/files/styles/listing_ratio_3_2/s3/vehicles/2024/08/04/7476736/%D9%A2%D9%A0%D9%A2%D9%A4%D9%A0%D9%A8%D9%A0%D9%A4_%D9%A1%D9%A2%D9%A5%D9%A5%D9%A1%D9%A0.jpg"
                    alt="Ad Image" class="w-full md:w-1/3 h-40 object-cover mb-2 md:mb-0">
                <div class="flex-1 mt-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <h4 class="text-xs font-bold text-blue-500 uppercase mb-1">For Rent • Residential • Villa
                                Apartment</h4>
                        </div>
                        <div class="col-span-1 flex justify-end items-center">
                            <h4 class="text-xs font-bold text-blue-500 uppercase mb-1 flex items-center mr-4">
                                <i class="ti ti-map-pin"></i> Nepalgunj
                            </h4>
                        </div>
                    </div>
                    <p class="text-lg font-semibold">Flat for rent in bin Omran.. room hall.. only Philippines</p>
                    <div class="flex items-center space-x-4 mt-2 justify-end mr-8">
                        <button class="bg-blue-600 text-white py-1 px-3 rounded text-sm">Contact</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 mt-4 gap-4 mb-2">
                        <div class="col-span-1">
                            <div>
                                <p class="text-lg text-blue-600 font-bold">2,800 QAR/Month</p>
                                <div class="flex gap-4">
                                    <p class="text-md font-normal flex items-center">
                                        <i class="ti ti-bed text-2xl mr-2"></i> Studio
                                    </p>
                                    <p class="text-md font-normal flex items-center">
                                        <i class="ti ti-bath text-2xl mr-2"></i>1
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 justify-end items-center">
                            <img src="https://www.qatarliving.com/_next/image?url=https%3A%2F%2Fwww.qatarliving.com%2Fq%2Fs3%2Ffiles%2Fstyles%2Ficons%2Fs3%2Fusers%2F2016%2F06%2F07%2FVILLA%20PHOTO.jpg&w=48&q=75"
                                alt="" class="ml-56 mt-2">
                            <p class="text-xs  text-gray-400 mt-1">Updated 52 minutes ago by Hamdan real estate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- footer --}}
    <div class="mx-24">
        <x-frontend.propertiesFooter.properties-footer/>
    </div>





</x-guest-layout>
