<div class="hidden peer-checked/tab-two:block">
    @include('error')
    <form class="ml-4 md:mx-0 font-[sans-serif] my-3" action="{{ route('userlogin') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <x-frontend.forms.input-type-field
        label="Email Address"
        id="email"
        name="email"
        type="email"
        />


        <x-frontend.forms.input-type-field
        label="Password"
        id="password"
        name="password"
        type="text"
        />



        <button type="button submit"
            class="!mt-8 px-6 pt-1 pb-2  bg-[#333] hover:bg-[#444] text-xs text-white mx-auto block">Login</button>
    </form>
</div>
