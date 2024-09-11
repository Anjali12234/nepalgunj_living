@extends('frontend.user.dashboard.dashboard')

@section('content')
    <div class="content px-5  md:px-7 col-span-3 mt-8 md:mt-0">
        <h1 class="font-semibold text-3xl">Health Care List</h1>
        <div class="border-b border-gray-200 dark:border-neutral-700">
            <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                @foreach ($categories as $category)
                    @foreach ($category->subCategories as $subCategory)
                        @if ($subCategory->category_type == \App\Enums\CategoryTypeEnum::HEALTH_CARE)
                            <button type="button"
                                class="hs-tab-active:font-semibold
                    hs-tab-active:border-blue-600 hs-tab-active:text-blue-600
                    py-4 px-1 inline-flex items-center gap-x-2 border-b-2
                    border-transparent text-sm whitespace-nowrap
                    text-gray-500 hover:text-blue-600 focus:outline-none
                    focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none
                    dark:text-neutral-400 dark:hover:text-blue-500 active"
                                id="tab-{{ $subCategory->id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                data-hs-tab="#tab-content-{{ $subCategory->id }}"
                                aria-controls="tab-content-{{ $subCategory->id }}" role="tab">
                                {{ $subCategory->title_en }}
                            </button>
                        @endif
                    @endforeach
                @endforeach
            </nav>
        </div>

        <div class="mt-3">
            @foreach ($categories as $category)
                @foreach ($category->subCategories as $subCategory)
                    @if ($subCategory->category_type == \App\Enums\CategoryTypeEnum::HEALTH_CARE)
                        <div id="tab-content-{{ $subCategory->id }}" role="tabpanel"
                            aria-labelledby="tab-{{ $subCategory->id }}" class="{{ $loop->first ? '' : 'hidden' }}">


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
                                                                method="post" style="display: inline" method="post"
                                                                style="display: inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 dark:text-blue-500 dark:hover:text-blue-400"
                                                                    onclick="return confirm('Are You sure want to delete')">
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
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
