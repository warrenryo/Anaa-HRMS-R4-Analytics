<x-app-layout>
    <script defer src="/assets/js/apexcharts.js"></script>
    <div x-data="finance">
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Dashboard</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                <span>Analytics</span>
            </li>
        </ul>
        <div class="pt-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-6 text-white">
                <!-- Users Visit -->
                <div class="panel bg-gradient-to-r from-cyan-500 to-cyan-400">
                    <div class="flex justify-between">
                        <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Complete Transaction</div>
                        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                            <a href="javascript:;" @click="toggle">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:opacity-80 opacity-70">
                                    <circle cx="5" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle opacity="0.5" cx="12" cy="12" r="2"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <circle cx="19" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                </svg>
                            </a>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                class="ltr:right-0 rtl:left-0 text-black dark:text-white-dark">
                                <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-5">
                        <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> {{$count_completed_transaction}} </div>
                        {{-- <div class="badge bg-white/30">+ 2.35% </div> --}}
                    </div>
                    {{-- <div class="flex items-center font-semibold mt-5">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                            <path opacity="0.5"
                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                stroke="currentColor" stroke-width="1.5"></path>
                            <path
                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="currentColor" stroke-width="1.5"></path>
                        </svg>
                        Last Week 44,700
                    </div> --}}
                </div>

                <!-- Sessions -->
                <div class="panel bg-gradient-to-r from-violet-500 to-violet-400">
                    <div class="flex justify-between">
                        <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Total Hotel Reviews</div>
                        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                            <a href="javascript:;" @click="toggle">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:opacity-80 opacity-70">
                                    <circle cx="5" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle opacity="0.5" cx="12" cy="12" r="2"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <circle cx="19" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                </svg>
                            </a>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                class="ltr:right-0 rtl:left-0 text-black dark:text-white-dark">

                                <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                <li><a href="javascript:;" @click="toggle">Edit Report</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center mt-5">
                        {{-- <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> {{$count_reviews}} </div> --}}
                        {{-- <div class="badge bg-white/30">- 2.35% </div> --}}
                    </div>
                    {{-- <div class="flex items-center font-semibold mt-5">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                            <path opacity="0.5"
                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                stroke="currentColor" stroke-width="1.5"></path>
                            <path
                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="currentColor" stroke-width="1.5"></path>
                        </svg>
                        Last Week 84,709
                    </div> --}}
                </div>

                <!-- Time On-Site -->
                <div class="panel bg-gradient-to-r from-blue-500 to-blue-400">
                    <div class="flex justify-between">
                        <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Total Stripe Paid</div>
                        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                            <a href="javascript:;" @click="toggle">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:opacity-80 opacity-70">
                                    <circle cx="5" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle opacity="0.5" cx="12" cy="12" r="2"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <circle cx="19" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                </svg>
                            </a>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                class="ltr:right-0 rtl:left-0 text-black dark:text-white-dark">
                                <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                <li><a href="javascript:;" @click="toggle">Edit Report</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-5">
                        <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> {{$countPaid}} </div>
                        {{-- <div class="badge bg-white/30">+ 1.35% </div> --}}
                    </div>
                    {{-- <div class="flex items-center font-semibold mt-5">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                            <path opacity="0.5"
                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                stroke="currentColor" stroke-width="1.5"></path>
                            <path
                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="currentColor" stroke-width="1.5"></path>
                        </svg>
                        Last Week 37,894
                    </div> --}}
                </div>

                <!-- Bounce Rate -->
                <div class="panel bg-gradient-to-r from-fuchsia-500 to-fuchsia-400">
                    <div class="flex justify-between">
                        <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Total Inventory Stocks</div>
                        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                            <a href="javascript:;" @click="toggle">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:opacity-80 opacity-70">
                                    <circle cx="5" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle opacity="0.5" cx="12" cy="12" r="2"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <circle cx="19" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                </svg>
                            </a>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                class="ltr:right-0 rtl:left-0 text-black dark:text-white-dark">
                                <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                <li><a href="javascript:;" @click="toggle">Edit Report</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-5">
                        <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> {{$total_inventory}} </div>
                        {{-- <div class="badge bg-white/30">- 0.35% </div> --}}
                    </div>
                    {{-- <div class="flex items-center font-semibold mt-5">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2">
                            <path opacity="0.5"
                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                stroke="currentColor" stroke-width="1.5"></path>
                            <path
                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="currentColor" stroke-width="1.5"></path>
                        </svg>
                        Last Week 50.01%
                    </div> --}}
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                <!-- Favorites -->
            
                <!-- Live Prices -->
                
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
                <div class="panel h-full p-0 lg:col-span-2">
                    <div
                        class="flex items-start justify-between dark:text-white-light mb-5 p-5 border-b  border-[#e0e6ed] dark:border-[#1b2e4b]">
                        <h5 class="font-semibold text-lg ">Inventory Levels</h5>
                        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                            <a href="javascript:;" @click="toggle">
                                <svg class="w-5 h-5 text-black/70 dark:text-white/70 hover:!text-primary"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="5" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle opacity="0.5" cx="12" cy="12" r="2"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <circle cx="19" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                </svg>
                            </a>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                class="ltr:right-0 rtl:left-0">
                                <li><a href="javascript:;" @click="toggle">View</a></li>
                                <li><a href="javascript:;" @click="toggle">Update</a></li>
                                <li><a href="javascript:;" @click="toggle">Download</a></li>
                            </ul>
                        </div>
                    </div>

                    <div x-ref="uniqueVisitorSeries">
                        <!-- loader -->
                        <div
                            class="min-h-[360px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] ">
                            <span
                                class="animate-spin border-2 border-black dark:border-white !border-l-transparent  rounded-full w-5 h-5 inline-flex"></span>
                        </div>
                    </div>
                </div>

                <div class="panel h-full xl:col-span-2">
                    <div class="flex items-center dark:text-white-light mb-5">
                        <h5 class="font-semibold text-lg">Revenue</h5>
                        <div x-data="dropdown" @click.outside="open = false"
                            class="dropdown ltr:ml-auto rtl:mr-auto">
                            <a href="javascript:;" @click="toggle">
                                <svg class="w-5 h-5 text-black/70 dark:text-white/70 hover:!text-primary"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="5" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <circle opacity="0.5" cx="12" cy="12" r="2"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <circle cx="19" cy="12" r="2" stroke="currentColor"
                                        stroke-width="1.5" />
                                </svg>
                            </a>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                                class="ltr:right-0 rtl:left-0">
                                <li><a href="javascript:;" @click="toggle">Weekly</a></li>
                                <li><a href="javascript:;" @click="toggle">Monthly</a></li>
                                <li><a href="javascript:;" @click="toggle">Yearly</a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="text-lg dark:text-white-light/90">Total Profit / Month<span
                            class="text-primary ml-2"><i class="fa-solid fa-peso-sign"></i> {{$total_profit}}</span></p>
                    <div class="relative">
                        <div x-ref="revenueChart" class="bg-white dark:bg-black rounded-lg">
                            <!-- loader -->
                            <div
                                class="min-h-[325px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] ">
                                <span
                                    class="animate-spin border-2 border-black dark:border-white !border-l-transparent  rounded-full w-5 h-5 inline-flex"></span>
                            </div>
                        </div>
                    </div>
                </div>
                


                <!-- Recent Transactions -->
                <div class="panel">
                    <div class="mb-5 text-lg font-bold">Recent Transactions</div>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Room Number</th>
                                    <th>Status</th>
                                    <th>Orders</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($limitedData as $datas)
                                    <tr>
                                        <td>{{ $datas['invoice_no'] }}</td>
                                        <td>{{ $datas['customer_name'] }}</td>
                                        <td>{{ $datas['customer_email'] }}</td>
                                        <td>{{ $datas['room_no'] }}</td>
                                        <td>
                                            @if ($datas['status'] == 'Completed')
                                                <span class="badge bg-success">{{ $datas['status'] }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Invoice -->
                                            <div class="">
                                                <div class="">
                                                    <button type="button" class="btn btn-primary"
                                                        data-hs-overlay="#order{{$datas['id']}}">
                                                        View Receipt
                                                    </button>
                                                </div>
            
                                                <div id="order{{$datas['id']}}"
                                                    class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-md w-full z-[80] bg-white border-e dark:bg-gray-800 dark:border-gray-700"
                                                    tabindex="-1">
                                                    <div
                                                        class="relative overflow-hidden min-h-32 text-center bg-[url('https://preline.co/assets/svg/examples/abstract-bg-1.svg')] bg-no-repeat bg-center">
                                                        <!-- Close Button -->
                                                        <div class="absolute top-2 end-2">
                                                            <button type="button"
                                                                class="py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-xs dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                                                data-hs-overlay="#order{{$datas['id']}}">
                                                                Close
                                                            </button>
                                                        </div>
                                                        <!-- End Close Button -->
            
                                                        <!-- SVG Background Element -->
                                                        <figure class="absolute inset-x-0 bottom-0">
                                                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                                                                x="0px" y="0px" viewBox="0 0 1920 100.1">
                                                                <path fill="currentColor" class="fill-white dark:fill-gray-800"
                                                                    d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                                                            </svg>
                                                        </figure>
                                                        <!-- End SVG Background Element -->
                                                    </div>
            
                                                    <div class="relative z-10 -mt-12">
                                                        <!-- Icon -->
                                                        <span
                                                            class="mx-auto flex justify-center items-center size-[62px] rounded-full border border-gray-200 bg-white text-gray-700 shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                                            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                                <path
                                                                    d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                            </svg>
                                                        </span>
                                                        <!-- End Icon -->
                                                    </div>
            
                                                    <!-- Body -->
                                                    <div class="p-4 sm:p-7 overflow-y-auto">
                                                        <div class="text-center">
                                                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                                                Invoice from ANAA Hotel and Restaurant
                                                            </h3>
                                                            <p class="text-sm text-gray-500">
                                                                Invoice #{{ $datas['invoice_no'] }}
                                                            </p>
                                                        </div>
            
                                                        <!-- Grid -->
                                                        <div class="mt-5 sm:mt-10 grid grid-cols-2 sm:grid-cols-3 gap-5">
                                                            <div>
                                                                
                                                                <span class="block text-xs uppercase text-gray-500">Amount
                                                                    paid:</span>
                                                                <span
                                                                    class="block text-sm font-medium text-gray-800 dark:text-gray-200">
                                                                    <i class="fa-solid fa-peso-sign"></i>
                                                                    {{ number_format($datas['paid_amount']) }}</span>
                                                            </div>
                                                            <!-- End Col -->
            
                                                            <div>
                                                                <span class="block text-xs uppercase text-gray-500">Date
                                                                    paid:</span>
                                                                <span
                                                                    class="block text-sm font-medium text-gray-800 dark:text-gray-200">
                                                                    @php
                                                                        $createdAtFormatted = Carbon\Carbon::parse(
                                                                            $datas['updated_at'],
                                                                        )->format('F j, Y');
                                                                    @endphp
                                                                    {{ $createdAtFormatted }}</span>
                                                            </div>
                                                            <!-- End Col -->
            
                                                            <div>
                                                                <span class="block text-xs uppercase text-gray-500">Payment
                                                                    method:</span>
                                                                @if ($datas['payment_method'] == 'Card')
                                                                    <div class="flex items-center gap-x-2">
                                                                        <svg class="size-5" width="400" height="248"
                                                                            viewBox="0 0 400 248" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g clip-path="url(#clip0)">
                                                                                <path d="M254 220.8H146V26.4H254V220.8Z"
                                                                                    fill="#FF5F00" />
                                                                                <path
                                                                                    d="M152.8 123.6C152.8 84.2 171.2 49 200 26.4C178.2 9.2 151.4 0 123.6 0C55.4 0 0 55.4 0 123.6C0 191.8 55.4 247.2 123.6 247.2C151.4 247.2 178.2 238 200 220.8C171.2 198.2 152.8 163 152.8 123.6Z"
                                                                                    fill="#EB001B" />
                                                                                <path
                                                                                    d="M400 123.6C400 191.8 344.6 247.2 276.4 247.2C248.6 247.2 221.8 238 200 220.8C228.8 198.2 247.2 163 247.2 123.6C247.2 84.2 228.8 49 200 26.4C221.8 9.2 248.6 0 276.4 0C344.6 0 400 55.4 400 123.6Z"
                                                                                    fill="#F79E1B" />
                                                                            </g>
                                                                            <defs>
                                                                                <clipPath id="clip0">
                                                                                    <rect width="400" height="247.2"
                                                                                        fill="white" />
                                                                                </clipPath>
                                                                            </defs>
                                                                        </svg>
                                                                        <span
                                                                            class="block text-sm font-medium text-gray-800 dark:text-gray-200">{{ $datas['payment_method'] }}</span>
            
                                                                    </div>
                                                                @else
                                                                    {{ $datas['payment_method'] }}
                                                                @endif
                                                            </div>
                                                            <!-- End Col -->
                                                        </div>
                                                        <!-- End Grid -->
            
                                                        <div class="mt-5 sm:mt-10">
                                                            <h4
                                                                class="text-xs font-semibold uppercase text-gray-800 dark:text-gray-200">
                                                                ORDERS</h4>
            
                                                            <ul class="mt-3 flex flex-col">
                                                                @foreach ($datas['cart_payments'] as $order)
                                                                    <li
                                                                        class="inline-flex justify-between items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-gray-700 dark:text-gray-200">
                                                                        <div class="flex items-center justify-between w-full">
                                                                            <span>{{ $order['category'] }}
                                                                                {{ $order['item_name'] }}</span>
                                                                            <span>{{ $order['quantity'] }}</span>
                                                                            <span><i class="fa-solid fa-peso-sign"></i>
                                                                                {{ number_format($order['total_price']) }}</span>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                                <li
                                                                    class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-semibold bg-gray-50 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-slate-800 dark:border-gray-700 dark:text-gray-200">
                                                                    <div class="flex items-center justify-between w-full">
                                                                        <span>Total</span>
            
                                                                        <span><i class="fa-solid fa-peso-sign"></i>
                                                                            {{ number_format($datas['paid_amount']) }}</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
            
                                                        <!-- Button -->
                                                        <div class="mt-5 flex justify-end gap-x-2">
                                                            <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                                                href="#">
                                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                                                    <polyline points="7 10 12 15 17 10" />
                                                                    <line x1="12" x2="12" y1="15"
                                                                        y2="3" />
                                                                </svg>
                                                                Invoice PDF
                                                            </a>
                                                            <a
                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round">
                                                                    <polyline points="6 9 6 2 18 2 18 9" />
                                                                    <path
                                                                        d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                                                                    <rect width="12" height="8" x="6" y="14" />
                                                                </svg>
                                                                Print
                                                            </a>
                                                        </div>
                                                        <!-- End Buttons -->
            
                                                        <div class="mt-5 sm:mt-10">
                                                            <p class="text-sm text-gray-500">If you have any questions, please
                                                                contact us at <a
                                                                    class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium"
                                                                    href="#">anaa.hrms@gmail.com</a> or call at <a
                                                                    class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium"
                                                                    href="tel:+1898345492">+1 898-34-5492</a></p>
                                                        </div>
                                                    </div>
                                                    <!-- End Body -->
                                                </div>
                                            </div>
                                            <!-- End Invoice -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <script>
        var inventory = {!!$inventory!!};

        const items = [];
        const quantity = [];

        inventory.forEach(function(val){
            items.push(val.r4_item_name);
            quantity.push(val.r4_quantity);
        });

        //TOTAL INCOME
        var january = {!!$january!!};
        var february = {!!$february!!};
        var march = {!!$march!!};
        var april = {!!$april!!};
        var may = {!!$may!!};
        var june = {!!$june!!};
        var july = {!!$july!!};
        var august = {!!$august!!};
        var september = {!!$september!!};
        var october = {!!$october!!};
        var november = {!!$november!!};
        var december = {!!$december!!};

        const totalIncome = [];
        totalIncome.push(january);
        totalIncome.push(february);
        totalIncome.push(march);
        totalIncome.push(april);
        totalIncome.push(may);
        totalIncome.push(june);
        totalIncome.push(july);
        totalIncome.push(august);
        totalIncome.push(september);
        totalIncome.push(october);
        totalIncome.push(november);
        totalIncome.push(december);



        document.addEventListener("alpine:init", () => {
            // finance
            Alpine.data("finance", () => ({
                init() {
                    isDark = this.$store.app.theme === "dark" ? true : false;
                    isRtl = this.$store.app.rtlClass === "rtl" ? true : false;
                    const uniqueVisitorSeries = null;
                    const bitcoin = null;
                    const ethereum = null;
                    const litecoin = null;
                    const binance = null;
                    const revenueChart = null;
                    const tether = null;
                    const solana = null;

                    setTimeout(() => {
                        this.revenueChart = new ApexCharts(this.$refs.revenueChart, this
                            .revenueChartOptions)
                        this.$refs.revenueChart.innerHTML = "";
                        this.revenueChart.render()

                        this.uniqueVisitorSeries = new ApexCharts(this.$refs
                            .uniqueVisitorSeries, this.uniqueVisitorSeriesOptions);
                        this.$refs.uniqueVisitorSeries.innerHTML = "";
                        this.uniqueVisitorSeries.render();

                        this.bitcoin = new ApexCharts(this.$refs.bitcoin, this.bitcoinOptions);
                        this.bitcoin.render();

                        this.ethereum = new ApexCharts(this.$refs.ethereum, this
                            .ethereumOptions);
                        this.ethereum.render();

                        this.litecoin = new ApexCharts(this.$refs.litecoin, this
                            .litecoinOptions);
                        this.litecoin.render();

                        this.binance = new ApexCharts(this.$refs.binance, this.binanceOptions);
                        this.binance.render();

                        this.tether = new ApexCharts(this.$refs.tether, this.tetherOptions);
                        this.tether.render();

                        this.solana = new ApexCharts(this.$refs.solana, this.solanaOptions);
                        this.solana.render();
                    }, 300);

                    this.$watch('$store.app.theme', () => {
                        isDark = this.$store.app.theme === "dark" ? true : false;
                        this.revenueChart.updateOptions(this.revenueChartOptions);
                        this.totalVisit.updateOptions(this.totalVisitOptions);
                        this.paidVisit.updateOptions(this.paidVisitOptions);
                        this.uniqueVisitorSeries.updateOptions(this.uniqueVisitorSeriesOptions);
                        this.followers.updateOptions(this.followersOptions);
                        this.referral.updateOptions(this.referralOptions);
                        this.engagement.updateOptions(this.engagementOptions);
                    });

                    this.$watch('$store.app.rtlClass', () => {
                        isRtl = this.$store.app.rtlClass === "rtl" ? true : false;
                        this.uniqueVisitorSeries.updateOptions(this.uniqueVisitorSeriesOptions);
                        this.revenueChart.updateOptions(this.revenueChartOptions);
                    });
                },

                // revenue
                get revenueChartOptions() {
                    return {
                        series: [{
                                name: 'Income',
                                data: totalIncome,
                            },
                        ],
                        chart: {
                            height: 325,
                            type: "area",
                            fontFamily: 'Nunito, sans-serif',
                            zoom: {
                                enabled: false
                            },
                            toolbar: {
                                show: false
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            show: true,
                            curve: 'smooth',
                            width: 2,
                            lineCap: 'square'
                        },
                        dropShadow: {
                            enabled: true,
                            opacity: 0.2,
                            blur: 10,
                            left: -7,
                            top: 22
                        },
                        colors: isDark ? ['#2196f3', '#e7515a'] : ['#1b55e2', '#e7515a'],
                        markers: {
                            discrete: [{
                                    seriesIndex: 0,
                                    dataPointIndex: 6,
                                    fillColor: '#1b55e2',
                                    strokeColor: 'transparent',
                                    size: 7
                                },
                                {
                                    seriesIndex: 1,
                                    dataPointIndex: 5,
                                    fillColor: '#e7515a',
                                    strokeColor: 'transparent',
                                    size: 7
                                },
                            ],
                        },
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                            'Oct', 'Nov', 'Dec'
                        ],
                        xaxis: {
                            axisBorder: {
                                show: false
                            },
                            axisTicks: {
                                show: false
                            },
                            crosshairs: {
                                show: true
                            },
                            labels: {
                                offsetX: isRtl ? 2 : 0,
                                offsetY: 5,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-xaxis-title'
                                }
                            },
                        },
                        yaxis: {
                            tickAmount: 7,
                            labels: {
                                formatter: (value) => {
                                    return value + ' Pesos';
                                },
                                offsetX: isRtl ? -30 : -10,
                                offsetY: 0,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-yaxis-title'
                                },
                            },
                            opposite: isRtl ? true : false,
                        },
                        grid: {
                            borderColor: isDark ? '#191e3a' : '#e0e6ed',
                            strokeDashArray: 5,
                            xaxis: {
                                lines: {
                                    show: true
                                }
                            },
                            yaxis: {
                                lines: {
                                    show: false
                                }
                            },
                            padding: {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0
                            }
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'right',
                            fontSize: '16px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            itemMargin: {
                                horizontal: 10,
                                vertical: 5
                            },
                        },
                        tooltip: {
                            marker: {
                                show: true
                            },
                            x: {
                                show: false
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: isDark ? 0.19 : 0.28,
                                opacityTo: 0.05,
                                stops: isDark ? [100, 100] : [45, 100],
                            },
                        },
                    }
                },

                // unique visitors
                get uniqueVisitorSeriesOptions() {
                    return {
                        series: [{
                                name: 'Quantity',
                                data: quantity
                            },
                        ],
                        chart: {
                            height: 360,
                            type: 'bar',
                            fontFamily: 'Nunito, sans-serif',
                            toolbar: {
                                show: false
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            width: 2,
                            colors: ['transparent']
                        },
                        colors: ['#ffbb44', ''],
                        dropShadow: {
                            enabled: true,
                            blur: 3,
                            color: '#515365',
                            opacity: 0.4,
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '55%',
                                borderRadius: 10
                            }
                        },
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            itemMargin: {
                                horizontal: 8,
                                vertical: 8
                            }
                        },
                        grid: {
                            borderColor: isDark ? '#191e3a' : '#e0e6ed',
                            padding: {
                                left: 20,
                                right: 20
                            }
                        },
                        xaxis: {
                            categories: items,
                            axisBorder: {
                                show: true,
                                color: isDark ? '#3b3f5c' : '#e0e6ed'
                            },
                        },
                        yaxis: {
                            tickAmount: 6,
                            opposite: isRtl ? true : false,
                            labels: {
                                offsetX: isRtl ? -10 : 0,
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: isDark ? 'dark' : 'light',
                                type: 'vertical',
                                shadeIntensity: 0.3,
                                inverseColors: false,
                                opacityFrom: 1,
                                opacityTo: 0.8,
                                stops: [0, 100]
                            },
                        },
                        tooltip: {
                            marker: {
                                show: true,
                            },
                            y: {
                                formatter: (val) => {
                                    return val;
                                },
                            },
                        },
                    }
                },

                
            }));
        });
    </script>
</x-app-layout>