<x-guest-layout>

    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.1/src/css/pagedone.css" />

    <div class="px-0 pt-10 md:px-20 md:pt-[6px]">
        @include('frontend.user.dashboard.userhead')

        <div class="tabs flex  grid-cols-4 gap-4  sm:pr-30  ">
            <div class=" hidden lg:block ">
                <ul class=" rounded-2xl transition-all duration-300  overflow-hidden pt-3">
                    <li class="hover:bg-gray-600 hover:text-white">
                        <a href="javascript:void(0)"
                            class="inline-block pt-2 pr-44 pl-5 text-gray-900 hover:text-gray-800 font-medium  tab-active:bg-white tab-active:rounded-xl tab-active:text-indigo-600 active tablink whitespace-nowrap"
                            data-tab="tabs-with-background-1" role="tab"> Timeline </a>
                    </li>
                    <li class="hover:bg-gray-600 hover:text-white">
                        <a href="javascript:void(0)"
                            class="inline-block pt-2 pr-44 pl-5 text-gray-900 hover:text-gray-800 font-medium  tab-active:bg-white tab-active:rounded-xl tab-active:text-indigo-600 tablink whitespace-nowrap"
                            data-tab="tabs-with-background-2" role="tab"> Profile Edit </a>
                    </li>
                    <li class="hover:bg-gray-600 hover:text-white">
                        <a href="javascript:void(0)"
                            class="inline-block pt-2 pr-44 pl-5 text-gray-900 hover:text-gray-800 font-medium  tab-active:bg-white tab-active:rounded-xl tab-active:text-indigo-600 tablink whitespace-nowrap"
                            data-tab="tabs-with-background-3" role="tab"> Tab 2 </a>
                    </li>
                    <li class="hover:bg-gray-600 hover:text-white">
                        <a href="javascript:void(0)"
                            class="inline-block pt-2 pr-44 pl-5 text-gray-900 hover:text-gray-800 font-medium  tab-active:bg-white tab-active:rounded-xl tab-active:text-indigo-600 tablink whitespace-nowrap"
                            data-tab="tabs-with-background-4" role="tab"> Tab 3 </a>
                    </li>
                </ul>
            </div>
            <div class=" col-span-3 mt-3 w-5/6 pl-3">
                <div id="tabs-with-background-1" class="hidden tabcontent" role="tabpanel"
                    aria-labelledby="tabs-with-background-item-1">
                  @include('frontend.user.dashboard.timeline')
                </div>
                <div id="tabs-with-background-2" role="tabpanel" aria-labelledby="tabs-with-background-item-2"
                    class="tabcontent">
                   @include('frontend.user.dashboard.profile-setting')

                </div>
                <div id="tabs-with-background-3" class="hidden tabcontent" role="tabpanel"
                    aria-labelledby="tabs-with-background-item-3">
                    <p class="text-gray-500 "> This is the <em class="font-semibold text-gray-800 ">second</em>
                        item's tab body. </p>
                </div>
                <div id="tabs-with-background-4" class="hidden tabcontent" role="tabpanel"
                    aria-labelledby="tabs-with-background-item-4">
                    <p class="text-gray-500 "> This is the <em class="font-semibold text-gray-800 ">third</em>
                        item's tab body. </p>
                </div>
            </div>
        </div>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.1/src/js/pagedone.js"></script>



</x-guest-layout>
