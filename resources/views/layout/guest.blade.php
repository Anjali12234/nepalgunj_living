<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepalgunj Living</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    @vite('resources/js/app.js')
</head>


<body>
    <x-frontend.nav />
    {{-- hero section --}}

    {{ $slot }}
    <div class=" mx-14 overflow-hidden">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Main Article -->
                <div class="md:col-span-2">
                    <div>
                        <img src="https://files.qatarliving.com/styles/image_h_xlarge_1600x900/s3/post/2024/09/02/QATAR_JOB_LEAD_QATAR_LIVING.jpg?itok=wY_y3VTj"
                            alt="Qatar flags" class="w-[55rem] h-[400px]  mb-4">
                        <h2 class="text-2xl font-bold mb-2">HH The Amir issues new law on nationalization of private
                            sector
                            jobs</h2>
                        <p class="text-gray-600 mb-4 mr-28 items-center justify-center">HH The Amir Sheikh Tamim bin
                            Hamad Al
                            Thani on Sunday issued Law No.
                            12 of 2024 to localize private sector jobs in the country. The law seeks to significantly
                            increase the national workforce in private sector institutions and companies, opening up new
                            employment and career opportunities for Qataris and the children of Qatari women and thereby
                            maximizing the utilization of qualified Qatari citizens.
                        </p>


                    </div>

                    <div class="flex items-center space-x-4 mb-4 mt-8">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/LUSAIL_UNIVERSITY_LEAD_QATAR_LIVING.jpg?itok=ktogHvfU"
                            alt="Scam websites" class="w-54 h-32">

                        <div>
                            <p class="text-fuchsia-600 text-xs font-bold">NEWS</p>
                            <h3 class="text-lg font-semibold">
                                Lusail University starts feasibility study to open nurseries on campus
                            </h3>
                            <p class="text-sm mr-20">
                                Lusail University is currently undertaking a feasibility study to open nurseries for
                                very
                                young children. The aim is to help and support mothers in completing their educational
                                careers after marriage and giving birth.
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="flex items-center space-x-4 mb-4 mt-8">
                        <img src="https://files.qatarliving.com/styles/image_h_medium_440x248/s3/post/2024/09/01/OVERTAKING_LEAD_QATAR_LIVING.jpeg?itok=tJfAVC8i"
                            alt="Scam websites" class="w-54 h-32">

                        <div>
                            <p class="text-fuchsia-600 text-xs font-bold">NEWS</p>
                            <h3 class="text-lg font-semibold">
                                50% discount period for traffic fines extended until November 30
                            </h3>
                            <p class="text-sm mr-20">
                                Qatar’s Ministry of Interior announced a three-month extension to the 50% discount that
                                had been offered for traffic violations in the country. The extension will now be in
                                effect until November 30 and will cover all vehicles, including those of citizens,
                                residents, and visitors, in addition to citizens and GCC residents.
                            </p>
                        </div>
                    </div>
                    <hr>

                </div>

                <!-- Horizontal Line -->
                <hr class="col-span-full border-t border-gray-300 my-6 md:hidden">

                <!-- Sidebar News Items -->
                <div class="space-y-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2022/08/17/SCAM_WEBSITES_SCAM_ACCOUNTS_QATAR.jpg?itok=O9ubELV4"
                            alt="Scam websites" class="w-44 h-24">
                        <h3 class="text-sm font-semibold">How to spot scam websites & social media accounts in Qatar
                        </h3>
                    </div>
                    <hr>
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/09/02/WhatsApp%20Image%202024-09-02%20at%2015.56.50.jpg?itok=TDaVpNeu"
                            alt="Sushi Night" class="w-44 h-24">
                        <h3 class="text-sm font-semibold">Sora Rooftop launches Monday Sushi Night</h3>
                    </div>
                    <hr>
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/08/30/TRAVEL_LEAD_QATAR_LIVING.jpg?itok=kIqtUPJD"
                            alt="Travel warning" class="w-44 h-24">
                        <h3 class="text-sm font-semibold">MoI warns people never to carry strangers' luggage during
                            travel</h3>
                    </div>
                    <hr>
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/09/01/VISIT_LEAD_QATAR_LIVING.jpg?itok=LbxuMyHS"
                            alt="Visit Qatar" class="w-44 h-24">
                        <h3 class="text-sm font-semibold">Visit Qatar re-aligns itself to build Qatar as a touristic
                            destination</h3>
                    </div>
                    <hr>
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/09/01/MAHMOUD_LEAD_QATAR_LIVING.jpg?itok=dWUHCddb"
                            alt="Mahmoud Trezeguet" class="w-44 h-24">
                        <h3 class="text-sm font-semibold">Egyptian Mahmoud Trezeguet set for Al Rayyan move, says
                            reports</h3>
                    </div>
                    <hr>
                    <div class="flex items-center space-x-4 mb-4">
                        <img src="https://files.qatarliving.com/styles/image_h_small_300x169/s3/post/2024/08/29/Qatar_reads_Qatar_Living_News%20(1).jpg?itok=sLDR35Ms"
                            alt="Mahmoud Trezeguet" class="w-44 h-24">
                        <h3 class="text-sm font-semibold">Egyptian Mahmoud Trezeguet set for Al Rayyan move, says
                            reports</h3>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

    </div>
</body>


</html>
