<x-guest-layout>


    <div class="block lg:grid grid-cols-3 gap-3  mx-16">
        <div class="col-span-2  mt-14">
            <h1 class="font-medium text-xl ">Choose Category below to post your ad</h1>
            <div class="">
                {{-- <div class="relative right-0">
                    <ul class="relative flex flex-wrap pt-5 list-none rounded-xl bg-blue-gray-50/60" data-tabs="tabs"
                        role="list">
                        @foreach ($categories as $category)
                            <li class="z-30 block text-center flex-auto">
                                <a class="font-bold  text-lg z-30 flex flex-col items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                    data-tab-target="" active="" role="tab" aria-selected="true"
                                    aria-controls="{{ $category->title_en }}">
                                    <img src="{{ asset('assets/frontend/static/logo-drawer.png') }}"
                                        class="h-12 w-12 mb-2" alt="">
                                    <span class="ml-1">{{ $category->title_en }}</span>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                    <div data-tab-content="" class="p-5">
                        <div class="block opacity-100" id="Properties" role="tabpanel">
                            <p
                                class="block font-sans text-base antialiased font-light leading-relaxed text-inherit text-blue-gray-500">
                                Because it's about motivating the doers. Because I'm here to follow my dreams and
                                inspire other people to follow their dreams, too.
                            </p>
                        </div>
                        <div class="hidden opacity-0" id="Vehciles" role="tabpanel">
                            <p
                                class="block font-sans text-base antialiased font-light leading-relaxed text-inherit text-blue-gray-500">
                                The reading of all good books is like a conversation with the finest minds of past
                                centuries.
                            </p>
                        </div>
                        <div class="hidden opacity-0" id="settings" role="tabpanel">
                            <p
                                class="block font-sans text-base antialiased font-light leading-relaxed text-inherit text-blue-gray-500">
                                Comparing yourself to others is the thief of joy.
                            </p>
                        </div>
                    </div>
                </div> --}}
                <div class="w-2/3">
                    <div class="relative right-0">
                        <ul class="relative flex flex-wrap p-1 list-none rounded-xl bg-blue-gray-50/60" data-tabs="tabs"
                            role="list">
                            @foreach ($categories as $key => $category)
                                <li class="z-30 flex-auto text-center">
                                    <a href="#"
                                        class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                        data-tab-target="#{{ $category->title_ne }}" role="tab"
                                        aria-selected="false">
                                        <span class="ml-1">{{ $category->title_ne }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div data-tab-content="" class="p-5">
                            @foreach ($categories as $category)
                                <div class="hidden opacity-0" id="{{ $category->title_en }}" role="tabpanel">
                                    @foreach ($category->subCategories as $subCategory)
                                        @if ($subCategory->category_type == \App\Enums\CategoryTypeEnum
                                        ::PROPERTIES)
                                            <a href="
                                            {{ route('user.property',$subCategory) }}
                                             ">
                                                <p
                                                    class="block font-sans text-base antialiased font-light leading-relaxed text-inherit text-blue-gray-500">
                                                    {{ $subCategory->title_en }}
                                                </p>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="bg-gray-500 p-4 mt-4">
                <h1 class="text-semibold font-2xl text-white leading-5 font-semibold">Here are some important rules for
                    creating classified ads.</h1>
            </div>
            <div class="bg-gray-100 p-4">
                <ul class="list-disc list-inside leading-5 text-sm p-3 text-justify">
                    <li class="">Add a suitable image - your ad may be promoted to the front page if you do</li>
                    <li class="">You must use a valid Qatari phone number for posting ads</li>
                    <li class="">Repeating ads is not allowed</li>
                    <li class="">Do not use repeated UPPERCASE letters and try to use correct English grammar</li>
                    <li class="">You must use a valid Qatari phone number for posting ads</li>
                    <li class="">You must use a valid Qatari phone number for posting ads</li>
                </ul>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('[data-tab-target]');
            const tabContents = document.querySelectorAll('[role="tabpanel"]');

            tabs.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();

                    tabs.forEach(t => t.setAttribute('aria-selected', 'false'));
                    tabContents.forEach(content => {
                        content.classList.add('hidden', 'opacity-0');
                        content.classList.remove('block', 'opacity-100');
                    });

                    tab.setAttribute('aria-selected', 'true');
                    const targetContent = document.querySelector(tab.getAttribute(
                        'data-tab-target'));
                    targetContent.classList.remove('hidden', 'opacity-0');
                    targetContent.classList.add('block', 'opacity-100');
                });
            });

            if (tabs.length > 0) {
                tabs[0].click();
            }
        });
    </script>
</x-guest-layout>
