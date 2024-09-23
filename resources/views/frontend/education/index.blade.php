<x-guest-layout>
    <div class="mx-24 mt-4 font-mono">


        <x-frontend.education.education-navbar />




        {{-- featured campus --}}
        <div class="px-2 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight"> Featured Campus</h2>
                <p class="mt-1 text-gray-600">Explore our top campuses that are leading the way in education and innovation.</p>
            </div>

            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card 1 -->

                <!-- Card 2 -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card 2 -->

                <!-- Card 3 -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                href="#">
                <div class="aspect-w-16 aspect-h-10">
                    <img class="w-full object-cover rounded-xl"
                        src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                        alt="Campus Image">
                </div>
                <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                    Stanford University
                </h3>
                <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                    See more
                    <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </p>
            </a>
            </div>

            <div class="justify-center items-center text-center mt-8">
                 <a href="{{ route('education.campusListpage') }}"
                    class="text-center bg-black text-white px-8 py-3 rounded-full hover:text-green-400">View More
                </a>
            </div>
            <!-- End Grid -->
        </div>


        {{-- colleges Store --}}
        <div class="px-2 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">

            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight"> Featured Collages</h2>
                <p class="mt-1 text-gray-600">Meet our top doctors who are leading the way in medical excellence and
                    patient
                    care.</p>
            </div>


            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                href="">
                <div class="aspect-w-16 aspect-h-10">
                    <img class="w-full object-cover rounded-xl"
                        src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                        alt="Campus Image">
                </div>
                <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                    Stanford University
                </h3>
                <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                    See more
                    <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </p>
            </a>
                <!-- End Card -->


                <!-- Card -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->


                <!-- Card -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->

            </div>
            <div class="justify-center items-center text-center mt-8">
                <a href="{{ route('education.collegeListPage') }}"
                    class="text-center bg-black text-white px-8 py-3 rounded-full hover:text-green-400">View More
                </a>
            </div>

            <!-- End Grid -->
        </div>

        {{-- featured Schoools --}}
        <div class="px-2 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">

            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight"> Featured Schools</h2>
                <p class="mt-1 text-gray-600">Meet our top doctors who are leading the way in medical excellence and
                    patient
                    care.</p>
            </div>


            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->


                <!-- Card -->
                 <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->


                <!-- Card -->
                 <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->

            </div>
            <div class="justify-center items-center text-center mt-8">
                <a href="{{ route('education.schoolListPage') }}"
                    class="text-center bg-black text-white px-8 py-3 rounded-full hover:text-green-400">View More
                </a>
            </div>

            <!-- End Grid -->
        </div>



        {{-- featured Consultancy --}}
        <div class="px-2 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">

            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight"> Featured Consultancy</h2>
                <p class="mt-1 text-gray-600">Meet our top doctors who are leading the way in medical excellence and
                    patient
                    care.</p>
            </div>


            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->


                <!-- Card -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->


                <!-- Card -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->

            </div>
            <div class="justify-center items-center text-center mt-8">
                <a href="{{ route('healthcare.listPage') }}"
                    class="text-center bg-black text-white px-8 py-3 rounded-full hover:text-green-400">View More
                </a>
            </div>


        </div>



          {{-- featured Institute --}}
          <div class="px-2 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">

            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight"> Featured Institute</h2>
                <p class="mt-1 text-gray-600">Meet our top doctors who are leading the way in medical excellence and
                    patient
                    care.</p>
            </div>


            <!-- Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card -->
                <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->


                <!-- Card -->
               <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->


                <!-- Card -->
               <a class="group border border-green-500 focus:outline-none focus:bg-gray-100 rounded-xl p-5 transition dark:hover:bg-white/10 dark:focus:bg-white/10"
                    href="#">
                    <div class="aspect-w-16 aspect-h-10">
                        <img class="w-full object-cover rounded-xl"
                            src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                            alt="Campus Image">
                    </div>
                    <h3 class="mt-5 text-xl text-gray-800 hover:text-gray-400">
                        Stanford University
                    </h3>
                    <p class="mt-2 text-gray-600">Located in the heart of Silicon Valley, Stanford offers world-class education and innovation.</p>
                    <p class="mt-3 bg-green-400 rounded-3xl px-3 py-2 hover:bg-green-800 hover:text-white inline-flex items-center gap-x-1 text-sm font-semibold text-gray-800 ">
                        See more
                        <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
                <!-- End Card -->

            </div>
            <div class="justify-center items-center text-center mt-8">
                <a href="{{ route('healthcare.listPage') }}"
                    class="text-center bg-black text-white px-8 py-3 rounded-full hover:text-green-400">View More
                </a>
            </div>


        </div>



        <x-frontend.PropertiesFooter.properties-footer />



    </div>


</x-guest-layout>
