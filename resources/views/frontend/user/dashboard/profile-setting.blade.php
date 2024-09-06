@extends('frontend.user.dashboard.dashboard')

@section('content')
<div class="content px-5  md:px-7 col-span-3">
    <h1 class="font-semibold text-3xl">Profile Setting</h1>
    <h1 class="font-semibold text-2xl mt-5">General </h1>
    @include('error')
    <form class="ml-0 md:ml-4 md:mx-0 font-[sans-serif] my-3 mt-3" action="{{ route('user.profile.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf

        <x-frontend.forms.input-type-field :value="old('username', $registeredUser?->username)" label="Username" id="username" name="username"
            type="text" />

        <x-frontend.forms.input-type-field :value="$registeredUser?->email" label="Email Address" id="email" name="email"
            type="email" />
        <x-frontend.forms.input-type-field :value="$registeredUser?->phone_no" label="Phone No" id="phone_no" name="phone_no"
            type="text" />
            <x-frontend.forms.select-type-field :value="$registeredUser?->gender" label="Gender" id="gender" name="gender"
            :options="['male' => 'Male', 'female' => 'Female', 'other' => 'Other']" />
            {{-- <x-frontend.forms.select-type-field :value="$registeredUser?->gender" label="Gender" id="gender" name="gender" /> --}}
        <x-frontend.forms.input-type-field :value="$registeredUser?->d_o_b" label="Date of Birth" id="d_o_b" name="d_o_b"
            type="date" />
        <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->address" label="Address" id="address" name="address"
            type="text" />
        <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->ward_no" label="Ward No" id="ward_no" name="ward_no"
            type="number" />

        <x-frontend.remove-button :value="$registeredUser?->registeredUserDetail?->image" />

        <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->image" label="Image" id="image" name="image"
            type="file" />
        <x-frontend.remove-button :value="$registeredUser?->registeredUserDetail?->cover_image" />

        <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->cover_image" label="Cover Image" id="cover_image" name="cover_image"
            type="file" />

        <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->citizenship_no" label="Citizenship No" id="citizenship_no"
            name="citizenship_no" type="text" />
        <x-frontend.remove-button :value="$registeredUser?->registeredUserDetail?->citizenship_image_front" />

        <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->citizenship_image_front" label="Citizenship Image Front"
            id="citizenship_image_front" name="citizenship_image_front" type="file" />
        <x-frontend.remove-button :value="$registeredUser?->registeredUserDetail?->citizenship_image_back" />

        <x-frontend.forms.input-type-field :value="$registeredUser?->registeredUserDetail?->citizenship_image_back" label="Citizenship Image Back" id="citizenship_image_back"
            name="citizenship_image_back" type="file" />

        <button type="button submit"
            class="!mt-8 px-6 pt-1 pb-2  bg-[#333] hover:bg-[#444] text-xs text-white mx-auto block">Submit</button>
    </form>
</div>
@endsection
