@extends('frontend.user.dashboard.dashboard')

@section('content')
    <div class="content px-5  md:px-7 col-span-3 mt-8 md:mt-0">
        <h1 class="font-semibold text-3xl">Property List</h1>

        {{-- Tab Navigation --}}
        <div class="border-b border-gray-200 dark:border-neutral-700">
            <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active"
                    id="tabs-with-icons-item-1" aria-selected="true" data-hs-tab="#tabs-with-icons-1"
                    aria-controls="tabs-with-icons-1" role="tab">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    Doctor
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                    id="tabs-with-icons-item-2" aria-selected="false" data-hs-tab="#tabs-with-icons-2"
                    aria-controls="tabs-with-icons-2" role="tab">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="10" r="3"></circle>
                        <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                    </svg>
                    Hospital
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                    id="tabs-with-icons-item-3" aria-selected="false" data-hs-tab="#tabs-with-icons-2"
                    aria-controls="tabs-with-icons-3" role="tab">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="10" r="3"></circle>
                        <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                    </svg>
                    Medical
                </button>
            </nav>
        </div>

        {{-- Tab Content --}}
        <div class="mt-3">

            {{-- Doctor Table --}}
            <div id="tabs-with-icons-1" role="tabpanel" aria-labelledby="tabs-with-icons-item-1">
                @foreach ($categories as $category)
                    @foreach ($category->subCategories as $subCategory)
                        {{-- Show doctor data only if category type is health care --}}
                        @if ($subCategory->category_type == \App\Enums\CategoryTypeEnum::HEALTH_CARE)
                            @if ($subCategory->doctors->isNotEmpty())
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                <x-frontend.forms.table-component :headers="[
                                                    'Reference No',
                                                    'Doctor Name',
                                                    'Department',
                                                    'NMC No',
                                                    'Phone Number',
                                                    'Action',
                                                ]" :data="$subCategory->doctors">
                                                    @foreach ($subCategory->doctors as $doctorList)
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                                {{ $doctorList->reference_no }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                                {{ $doctorList->doctor_name }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                {{ $doctorList->department }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                {{ $doctorList->n_m_c_no }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                {{ $doctorList->phone_number }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium ">
                                                                <a type="button"
                                                                    href="{{ route('user.doctorList.edit', [$subCategory, $doctorList]) }}"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">
                                                                    <i
                                                                        class="ti ti-edit text-2xl font-bold text-purple-700"></i>
                                                                </a>
                                                                <form
                                                                    action="{{ route('user.doctorList.destroy', [$subCategory, $doctorList]) }}"
                                                                    method="post" style="display: inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400"
                                                                        onclick="return confirm('Are You sure want to delete?')">
                                                                        <i
                                                                            class="ti ti-trash text-2xl font-bold text-red-700"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </x-frontend.forms.table-component>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                @endforeach
            </div>

            {{-- Hospital Table --}}
            <div id="tabs-with-icons-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-2">
                @foreach ($categories as $category)
                    @foreach ($category->subCategories as $subCategory)
                        {{-- Show hospital data only if category type is health care --}}
                        @if ($subCategory->category_type == \App\Enums\CategoryTypeEnum::HEALTH_CARE)
                            @if ($subCategory->hospitals->isNotEmpty())
                                <div class="flex flex-col">
                                    <div class="-m-1.5 overflow-x-auto">
                                        <div class="p-1.5 min-w-full inline-block align-middle">
                                            <div class="overflow-hidden">
                                                <x-frontend.forms.table-component :headers="['Reference No', 'Hospital Name', 'Phone Number', 'Action']" :data="$subCategory->hospitals">
                                                    @foreach ($subCategory->hospitals as $hospitalList)
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                                {{ $hospitalList->reference_no }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                                {{ $hospitalList->hospital_name }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                {{ $hospitalList->contact_number }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium ">
                                                                <a type="button"
                                                                    href="{{ route('user.hospitalList.edit', [$subCategory, $hospitalList]) }}"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400">
                                                                    <i
                                                                        class="ti ti-edit text-2xl font-bold text-purple-700"></i>
                                                                </a>
                                                                <form
                                                                    action="{{ route('user.hospitalList.destroy', [$subCategory, $hospitalList]) }}"
                                                                    method="post" style="display: inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400"
                                                                        onclick="return confirm('Are You sure want to delete?')">
                                                                        <i
                                                                            class="ti ti-trash text-2xl font-bold text-red-700"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </x-frontend.forms.table-component>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <p>No Data found !!</p>
                            @endif
                        @endif
                    @endforeach
                @endforeach
            </div>
            <div id="tabs-with-icons-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-3">


                <p>hello its medical tab</p>

            </div>

        </div>
    </div>

    {{-- Script to handle tab switching --}}
    <script>
        document.querySelectorAll('[data-hs-tab]').forEach(function(tabButton) {
            tabButton.addEventListener('click', function() {
                const target = this.getAttribute('data-hs-tab');
                const allTabs = document.querySelectorAll('[role="tabpanel"]');
                const activeTabs = document.querySelectorAll('[aria-selected="true"]');

                activeTabs.forEach(function(activeTab) {
                    activeTab.setAttribute('aria-selected', 'false');
                });

                allTabs.forEach(function(tabContent) {
                    tabContent.classList.add('hidden');
                });

                this.setAttribute('aria-selected', 'true');
                document.querySelector(target).classList.remove('hidden');
            });
        });
    </script>
@endsection
