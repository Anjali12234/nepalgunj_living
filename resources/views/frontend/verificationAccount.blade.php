<x-guest-layout>


    <div class="grid grid-cols-4 gap-4 sm:pl-20 sm:pr-30 ">

        <div class="hidden lg:block my-5 mr-11">
            <h1 class="text-gray-800 font-medium text-2xl">About</h1>
            <div class="text-gray-800 font-medium text-base my-3 font-serif text-justify">
                <p class="leading-5 mb-2">In order to post classified ads on Qatar Living you have to verify your
                    account. This is how it works:
                </p>
                <p class="leading-5 mb-2">
                    You must register with a mobile phone number
                    An SMS will be sent to your phone that you have to enter on "Verify my account"
                </p>
                <p class="leading-5 mb-2"> page after logging in
                    Your can now post classified ads. Previously posted ads will be published within minutes</p>
            </div>


        </div>
        <div class="col-span-3 ">


            <section class="gap-4 ml-4 mr-[-6rem] md:mx-0 font-sans mt-8  uppercase text-xs font-bold">

                <input id="tab-one" type="radio" name="tabs" class="peer/tab-one opacity-0 absolute" checked />
                <label for="tab-one" class=" cursor-default ">
                    Create new account
                </label>

                <input id="tab-two" type="radio" name="tabs" class="peer/tab-two opacity-0 absolute " />
                <label for="tab-two" class=" cursor-default ml-5">
                    Login
                </label>



                <div class=""></div>

                <div class="hidden peer-checked/tab-one:block">
                   Hello  {{ $registeredUser->username }} you have been registered but your account is not been 
                </div>
              @include('frontend.user.login')


            </section>


        </div>

    </div>


</x-guest-layout>
