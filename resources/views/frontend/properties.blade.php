<x-guest-layout>
    <div class="bg-sky-700 mx-24 p-6">
        <!-- Toggle for For Rent and For Sale -->
        <div class="flex justify-center mb-4">
            <div class="flex items-center bg-white rounded-full p-1">
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
    <div class="bg-blue-500 mx-24 p-4">
        <div class="grid grid-cols-3 gap-4 mb-4">
            <!-- Property Type -->
            <div>
                <label class="text-white block mb-1">PROPERTIES TYPE</label>
                <select class="w-full bg-blue-300 text-white p-2 rounded">
                    <option>Any</option>
                </select>
            </div>

            <!-- Bedrooms -->
            <div>
                <label class="text-white block mb-1">BEDROOMS</label>
                <select class="w-full bg-blue-300 text-white p-2 rounded">
                    <option>Any</option>
                </select>
            </div>

            <!-- Location -->
            <div>
                <label class="text-white block mb-1">LOCATION</label>
                <select class="w-full bg-blue-300 text-white p-2 rounded">
                    <option>Any</option>
                </select>
            </div>
        </div>

        <!-- Price Section -->
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="text-white block mb-1">PRICE</label>
                <div class="flex space-x-2">
                    <input type="text" placeholder="- Min -" class="bg-blue-300 text-white p-2 rounded w-full">
                    <input type="text" placeholder="- Max -" class="bg-blue-300 text-white p-2 rounded w-full">
                </div>
            </div>
        </div>

        <!-- Search Properties -->
        <div class="flex items-center mb-4">
            <input type="text" placeholder="Search Properties" class="bg-blue-300 text-white p-2 rounded w-full">
            <button class="ml-2 bg-blue-600 text-white px-4 py-2 rounded">🔍</button>
        </div>

        <!-- Action Buttons -->
        <div class="flex space-x-4">
            <button class="border border-white text-white px-4 py-2 rounded">SEARCH</button>
            <button class="border border-white text-white px-4 py-2 rounded">CLEAR</button>
            <button class="border border-white text-white px-4 py-2 rounded">VIEW ALL FILTERS</button>
        </div>
    </div>


</x-guest-layout>
