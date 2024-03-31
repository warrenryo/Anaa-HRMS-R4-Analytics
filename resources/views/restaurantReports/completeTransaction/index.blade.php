<x-app-layout>
    <div class="panel">
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
                    @foreach ($data as $datas)
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
</x-app-layout>
