<x-guest-layout>
    <div class="block lg:grid grid-cols-3 gap-3 mx-16">
        @if (auth('registered-user')->check())
            @if (auth('registered-user')->user()->is_active == 1)
                <div class="col-span-2 mt-14">
                    <h1 class="font-medium text-xl">Choose Category below to post your ad</h1>
                    <div class="w-2/3">
                        <div class="relative right-0">
                            <ul class="relative flex flex-wrap p-1 list-none rounded-xl bg-blue-gray-50/60" data-tabs="tabs" role="list">
                                @foreach ($categories as $key => $category)
                                    <li class="z-30 flex-auto text-center">
                                        <a href="#" class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit" data-tab-target="#category-{{ $category->id }}" role="tab" aria-selected="false">
                                            <span class="ml-1">{{ $category->title_ne }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                            <div data-tab-content="" class="p-5">
                                @foreach ($categories as $category)
                                    <div class="hidden opacity-0" id="category-{{ $category->id }}" role="tabpanel">
                                        @if ($category->subCategories->isEmpty())
                                            <p class="text-gray-500">No subcategories available.</p>
                                        @else
                                            @foreach ($category->subCategories as $subCategory)
                                                @if ($subCategory->category_type == \App\Enums\CategoryTypeEnum::PROPERTIES)
                                                    <a href="{{ route('user.property', $subCategory) }}">
                                                        <p class="block font-sans text-base font-light leading-relaxed text-inherit text-blue-gray-500">
                                                            {{ $subCategory->title_en }}
                                                        </p>
                                                    </a>
                                                @elseif ($subCategory->category_type == \App\Enums\CategoryTypeEnum::HEALTH_CARE)
                                                    <a href="{{ route('user.doctorList.create',$subCategory) }}">
                                                        <p class="block font-sans text-base font-light leading-relaxed text-inherit text-blue-gray-500">
                                                            Doctors
                                                        </p>
                                                    </a>
                                                    <a href="{{ route('user.doctorList.create',$subCategory) }}">
                                                        <p class="block font-sans text-base font-light leading-relaxed text-inherit text-blue-gray-500">
                                                            Hospital
                                                        </p>
                                                    </a>
                                                    <a href="{{ route('user.doctorList.create',$subCategory) }}">
                                                        <p class="block font-sans text-base font-light leading-relaxed text-inherit text-blue-gray-500">
                                                            Medicals
                                                        </p>
                                                    </a>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-span-2 mt-14">
                    @if (!empty(auth('registered-user')->user()->remarks))
                        {{ auth('registered-user')->user()->remarks }} so correct your details.
                    @else
                        <h1 class="font-medium text-xl">Your account is not verified. Please wait for the account to be verified.</h1>
                    @endif
                </div>
            @endif
        @else
            <div class="col-span-2 mt-14">
                <h1 class="font-medium text-xl">First register to post an ad.</h1>
            </div>
        @endif
        <div>
            <div class="bg-gray-500 p-4 mt-4">
                <h1 class="text-semibold font-2xl text-white leading-5 font-semibold">Here are some important rules for creating classified ads.</h1>
            </div>
            <div class="bg-gray-100 p-4">
                <ul class="list-disc list-inside leading-5 text-sm p-3 text-justify">
                    <li>Add a suitable image - your ad may be promoted to the front page if you do</li>
                    <li>You must use a valid Qatari phone number for posting ads</li>
                    <li>Repeating ads is not allowed</li>
                    <li>Do not use repeated UPPERCASE letters and try to use correct English grammar</li>
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

                    // Remove active states from all tabs
                    tabs.forEach(t => t.setAttribute('aria-selected', 'false'));
                    tabContents.forEach(content => {
                        content.classList.add('hidden', 'opacity-0');
                        content.classList.remove('block', 'opacity-100');
                    });

                    // Add active state to the clicked tab and show the corresponding content
                    tab.setAttribute('aria-selected', 'true');
                    const targetContent = document.querySelector(tab.getAttribute('data-tab-target'));
                    targetContent.classList.remove('hidden', 'opacity-0');
                    targetContent.classList.add('block', 'opacity-100');
                });
            });

            // Activate the first tab by default
            if (tabs.length > 0) {
                tabs[0].click();
            }
        });
    </script>
</x-guest-layout>
