<div :class="{ 'dark text-white-dark': $store.app.semidark }">
    <nav x-data="sidebar"
        class="sidebar fixed min-h-screen h-full top-0 bottom-0 w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] z-50 transition-all duration-300">
        <div class="bg-white dark:bg-[#0e1726] h-full">
            <div class="flex justify-between items-center px-4 py-3">
                <a href="/" class="main-logo flex items-center shrink-0">
                    <img class="w-8 ml-[5px] flex-none" src="{{ URL('assets/images/Anaa bagong logo.png') }}"
                        alt="image" />
                    <span
                        class="text-2xl ltr:ml-1.5 rtl:mr-1.5  font-semibold  align-middle lg:inline dark:text-white-light">ANAA</span>
                </a>
                <a href="javascript:;"
                    class="collapse-icon w-8 h-8 rounded-full flex items-center hover:bg-gray-500/10 dark:hover:bg-dark-light/10 dark:text-white-light transition duration-300 rtl:rotate-180"
                    @click="$store.app.toggleSidebar()">
                    <svg class="w-5 h-5 m-auto" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <ul class="perfect-scrollbar relative font-semibold space-y-0.5 h-[calc(100vh-80px)] overflow-y-auto overflow-x-hidden  p-4 py-0"
                x-data="{ activeDropdown: null }">
                <li class="nav-item">
                    <a href="{{ url('analytics') }}" class="group">
                        <div class="flex items-center">

                            <svg class="group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5"
                                    d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                    fill="#8B4513" />
                                <path
                                    d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                    fill="#8B4513" />
                            </svg>
                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Analytics</span>
                        </div>
                    </a>
                </li>


                <h2
                    class="py-3 px-7 flex items-center uppercase font-extrabold bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] -mx-4 mb-1">

                    <svg class="w-4 h-5 flex-none hidden" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>inventory</span>
                </h2>

                <li class="nav-item">
                    <ul>
                        <li class="nav-item">
                            <a href="{{ url('inventory') }}" class="group">
                                <div class="flex items-center">

                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.3">
                                            <path
                                                d="M2 9.75C2 9.30807 2 8.39203 2.00189 8H11.2386V19.75L10 19.75C8.19364 19.75 6.81989 19.75 5.75 19.6213V21.75C5.75 22.1642 5.41421 22.5 5 22.5C4.58579 22.5 4.25 22.1642 4.25 21.75V19.2749C3.82861 19.1082 3.47599 18.8828 3.17157 18.5784C2 17.4069 2 15.5212 2 11.75V9.75Z"
                                                fill="#8B4513" />
                                            <path
                                                d="M22 8C22.0019 8.39203 22 9.30807 22 9.75V11.75C22 15.5212 22 17.4069 20.8284 18.5784C20.524 18.8828 20.1714 19.1082 19.75 19.2749V21.75C19.75 22.1642 19.4142 22.5 19 22.5C18.5858 22.5 18.25 22.1642 18.25 21.75V19.6213C17.1801 19.75 15.545 19.75 13.7387 19.75H13.7386L12.7386 19.75V8H22Z"
                                                fill="#8B4513" />
                                        </g>
                                        <path
                                            d="M15.75 11.75C15.75 11.3358 15.4142 11 15 11C14.5858 11 14.25 11.3358 14.25 11.75V14.75C14.25 15.1642 14.5858 15.5 15 15.5C15.4142 15.5 15.75 15.1642 15.75 14.75V11.75Z"
                                            fill="#8B4513" />
                                        <path
                                            d="M9.75 11.75C9.75 11.3358 9.41421 11 9 11C8.58579 11 8.25 11.3358 8.25 11.75V14.75C8.25 15.1642 8.58579 15.5 9 15.5C9.41421 15.5 9.75 15.1642 9.75 14.75V11.75Z"
                                            fill="#8B4513" />
                                        <path
                                            d="M3.17125 2.92157C2.32771 3.76511 2.09152 4.97882 2.02539 7V8H11.25V19.749H12.75V8H21.974V7C21.9078 4.97882 21.6716 3.76511 20.8281 2.92157C19.6565 1.75 17.7709 1.75 13.9997 1.75H9.99967C6.22844 1.75 4.34282 1.75 3.17125 2.92157Z"
                                            fill="#8B4513" />
                                    </svg>

                                    <span
                                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Inventory
                                        category</span>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <ul>
                                <li class="nav-item">
                                    <a href="{{ url('inventory_items') }}" class="group">
                                        <div class="flex items-center">

                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.96006 2C7.37758 2 7.71605 2.30996 7.71605 2.69231V4.08883C8.38663 4.07692 9.13829 4.07692 9.98402 4.07692H14.016C14.8617 4.07692 15.6134 4.07692 16.284 4.08883V2.69231C16.284 2.30996 16.6224 2 17.0399 2C17.4575 2 17.7959 2.30996 17.7959 2.69231V4.15008C19.2468 4.25647 20.1992 4.51758 20.899 5.15838C21.5987 5.79917 21.8838 6.67139 22 8V9H2V8C2.11618 6.67139 2.4013 5.79917 3.10104 5.15838C3.80079 4.51758 4.75323 4.25647 6.20406 4.15008V2.69231C6.20406 2.30996 6.54253 2 6.96006 2Z"  
                                                    fill="#8B4513"/>
                                                <path opacity="0.5" d="M22 14V12C22 11.161 21.9873 9.66527 21.9744 9H2.00586C1.99296 9.66527 2.00564 11.161 2.00564 12V14C2.00564 17.7712 2.00564 19.6569 3.17688 20.8284C4.34813 22 6.23321 22 10.0034 22H14.0023C17.7724 22 19.6575 22 20.8288 20.8284C22 19.6569 22 17.7712 22 14Z" 
                                                    fill="#8B4513"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.75 16.5C17.5074 16.5 16.5 17.5074 16.5 18.75C16.5 19.9926 17.5074 21 18.75 21C19.9926 21 21 19.9926 21 18.75C21 17.5074 19.9926 16.5 18.75 16.5ZM15 18.75C15 16.6789 16.6789 15 18.75 15C20.8211 15 22.5 16.6789 22.5 18.75C22.5 19.5143 22.2713 20.2252 21.8787 20.818L23.2803 22.2197C23.5732 22.5126 23.5732 22.9874 23.2803 23.2803C22.9874 23.5732 22.5126 23.5732 22.2197 23.2803L20.818 21.8787C20.2252 22.2713 19.5143 22.5 18.75 22.5C16.6789 22.5 15 20.8211 15 18.75Z" 
                                                    fill="#8B4513"/>
                                                </svg>
                                                

                                            <span
                                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Inventory
                                                items</span>
                                        </div>
                                    </a>
                                </li>
                                <h2
                                class="py-3 px-7 flex items-center uppercase font-extrabold bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] -mx-4 mb-1">

                                <svg class="w-4 h-5 flex-none hidden" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                <span>STOCKS</span>
                            </h2>
                            
                            <li class="nav-item">
                                <ul>
                                    <li class="nav-item">
                                        <a href="{{ url('inventory_stocks') }}" class="group">
                                            <div class="flex items-center">

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4 11.5V13C4 16.7712 4 18.6569 5.17157 19.8284C5.47599 20.1328 5.82861 20.3582 6.25 20.5249V22C6.25 22.4142 6.58579 22.75 7 22.75H8C8.41421 22.75 8.75 22.4142 8.75 22V20.9534C9.64461 21 10.7124 21 12 21C13.2876 21 14.3554 21 15.25 20.9534V22C15.25 22.4142 15.5858 22.75 16 22.75H17C17.4142 22.75 17.75 22.4142 17.75 22V20.5249C18.1714 20.3582 18.524 20.1328 18.8284 19.8284C20 18.6569 20 16.7712 20 13V11.5H4ZM17 13.25C17.4142 13.25 17.75 13.5858 17.75 14V16C17.75 16.4142 17.4142 16.75 17 16.75C16.5858 16.75 16.25 16.4142 16.25 16V14C16.25 13.5858 16.5858 13.25 17 13.25Z" 
                                                    fill="#8B4513"/>
                                                    <path opacity="0.5" d="M4 10C4 6.22876 4 4.34315 5.17157 3.17157C6.34315 2 8.22876 2 12 2C15.7712 2 17.6569 2 18.8284 3.17157C20 4.34315 20 6.22876 20 10V11.5H4V10Z" 
                                                    fill="#8B4513"/>
                                                    <path d="M17.75 7C17.75 6.58579 17.4142 6.25 17 6.25C16.5858 6.25 16.25 6.58579 16.25 7V9C16.25 9.41421 16.5858 9.75 17 9.75C17.4142 9.75 17.75 9.41421 17.75 9V7Z" 
                                                    fill="#8B4513"/>
                                                    </svg>
                                                    
                                                    

                                                <span
                                                    class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Restaurant stocks</span>
                                            </div>
                                        </a>
                                    </li>
                                <h2
                                    class="py-3 px-7 flex items-center uppercase font-extrabold bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] -mx-4 mb-1">

                                    <svg class="w-4 h-5 flex-none hidden" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    <span>RE-STOCKS</span>
                                </h2>

                                <li class="nav-item">
                                    <ul>
                                        <li class="nav-item">
                                            <a href="{{ url('reorder-points') }}" class="group">
                                                <div class="flex items-center">

                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.28869 2.76282C1.41968 2.36986 1.84442 2.15749 2.23737 2.28848L2.50229 2.37678C2.51549 2.38118 2.52864 2.38557 2.54176 2.38994C3.16813 2.59871 3.69746 2.77513 4.11369 2.96876C4.55613 3.17459 4.94002 3.42968 5.23112 3.83355C5.52221 4.23743 5.64282 4.68229 5.69817 5.16711C5.75025 5.62321 5.75023 6.18117 5.7502 6.84142L5.7502 9.49999C5.7502 10.9354 5.7518 11.9365 5.85335 12.6919C5.952 13.4256 6.13245 13.8142 6.40921 14.091C6.68598 14.3677 7.07455 14.5482 7.80832 14.6468C8.56367 14.7484 9.56479 14.75 11.0002 14.75H18.0002C18.4144 14.75 18.7502 15.0858 18.7502 15.5C18.7502 15.9142 18.4144 16.25 18.0002 16.25H10.9453C9.57774 16.25 8.47542 16.25 7.60845 16.1335C6.70834 16.0125 5.95047 15.7536 5.34855 15.1516C4.74664 14.5497 4.48774 13.7918 4.36673 12.8917C4.25017 12.0248 4.25018 10.9225 4.2502 9.55487L4.2502 6.88303C4.2502 6.17003 4.24907 5.69826 4.20785 5.33726C4.16883 4.99541 4.10068 4.83052 4.01426 4.71062C3.92784 4.59072 3.79296 4.47392 3.481 4.3288C3.15155 4.17554 2.70435 4.02527 2.02794 3.79981L1.76303 3.7115C1.37008 3.58052 1.15771 3.15578 1.28869 2.76282Z" 
                                                            fill="#8B4513"/>
                                                        <path opacity="0.5" d="M5.74512 5.99997C5.75008 6.25909 5.75008 6.53954 5.75007 6.84137L5.75006 9.49997C5.75006 10.9354 5.75166 11.9365 5.85321 12.6918C5.86803 12.8021 5.8847 12.9045 5.90326 13H16.0221C16.9815 13 17.4612 13 17.8369 12.7522C18.2126 12.5045 18.4016 12.0636 18.7795 11.1817L19.2081 10.1817C20.0176 8.29291 20.4223 7.3485 19.9777 6.67423C19.5331 5.99997 18.5056 5.99997 16.4507 5.99997H5.74512Z" 
                                                            fill="#8B4513"/>
                                                        <path d="M7.25 9C7.25 8.58579 7.58579 8.25 8 8.25H11C11.4142 8.25 11.75 8.58579 11.75 9C11.75 9.41421 11.4142 9.75 11 9.75H8C7.58579 9.75 7.25 9.41421 7.25 9Z" 
                                                            fill="#8B4513"/>
                                                        <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" 
                                                            fill="#8B4513"/>
                                                        <path d="M18 19.5001C18 18.6716 17.3284 18.0001 16.5 18.0001C15.6716 18.0001 15 18.6716 15 19.5001C15 20.3285 15.6716 21.0001 16.5 21.0001C17.3284 21.0001 18 20.3285 18 19.5001Z" 
                                                            fill="#8B4513"/>
                                                        </svg>
                                                        

                                                    <span
                                                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Reorder
                                                        Points</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('reorder-status') }}" class="group">
                                                <div class="flex items-center">

                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17 17C19.7614 17 22 14.7614 22 12C22 9.23858 19.7614 7 17 7C14.2386 7 12 9.23858 12 12C12 14.7614 14.2386 17 17 17ZM17.75 10C17.75 9.58579 17.4142 9.25 17 9.25C16.5858 9.25 16.25 9.58579 16.25 10V11.8462C16.25 12.0266 16.3151 12.201 16.4332 12.3374L17.4332 13.4912C17.7045 13.8042 18.1782 13.838 18.4912 13.5668C18.8042 13.2955 18.838 12.8218 18.5668 12.5088L17.75 11.5664V10Z" 
                                                            fill="#8B4513"/>
                                                        <g opacity="0.5">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 7C1.25 6.58579 1.58579 6.25 2 6.25H10C10.4142 6.25 10.75 6.58579 10.75 7C10.75 7.41421 10.4142 7.75 10 7.75H2C1.58579 7.75 1.25 7.41421 1.25 7ZM1.25 12C1.25 11.5858 1.58579 11.25 2 11.25H8C8.41421 11.25 8.75 11.5858 8.75 12C8.75 12.4142 8.41421 12.75 8 12.75H2C1.58579 12.75 1.25 12.4142 1.25 12ZM1.25 17C1.25 16.5858 1.58579 16.25 2 16.25H10C10.4142 16.25 10.75 16.5858 10.75 17C10.75 17.4142 10.4142 17.75 10 17.75H2C1.58579 17.75 1.25 17.4142 1.25 17Z" 
                                                            fill="#8B4513"/>
                                                        </g>
                                                        </svg>
                                                        

                                                    <span
                                                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Reorder Status</span>
                                                </div>
                                            </a>
                                        </li>



                                        <h2
                                            class="py-3 px-7 flex items-center uppercase font-extrabold bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] -mx-4 mb-1">

                                            <svg class="w-4 h-5 flex-none hidden" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="1.5" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg>
                                            <span>FEEDBACK & REVIEWS</span>
                                        </h2>
                                        <li class="nav-item">
                                            <a href="{{ url('hotel-reviews') }}" class="group">
                                                <div class="flex items-center">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M24 5C24 6.65685 22.6569 8 21 8C19.3431 8 18 6.65685 18 5C18 3.34315 19.3431 2 21 2C22.6569 2 24 3.34315 24 5Z"
                                                            fill="#8B4513" />
                                                        <path
                                                            d="M17.2339 7.46394L15.6973 8.74444C14.671 9.59966 13.9585 10.1915 13.357 10.5784C12.7747 10.9529 12.3798 11.0786 12.0002 11.0786C11.6206 11.0786 11.2258 10.9529 10.6435 10.5784C10.0419 10.1915 9.32941 9.59966 8.30315 8.74444L5.92837 6.76546C5.57834 6.47377 5.05812 6.52106 4.76643 6.87109C4.47474 7.22112 4.52204 7.74133 4.87206 8.03302L7.28821 10.0465C8.2632 10.859 9.05344 11.5176 9.75091 11.9661C10.4775 12.4334 11.185 12.7286 12.0002 12.7286C12.8154 12.7286 13.523 12.4334 14.2495 11.9661C14.947 11.5176 15.7372 10.859 16.7122 10.0465L18.3785 8.65795C17.9274 8.33414 17.5388 7.92898 17.2339 7.46394Z"
                                                            fill="#8B4513" />
                                                        <path
                                                            d="M18.4538 6.58719C18.7362 6.53653 19.0372 6.63487 19.234 6.87109C19.3965 7.06614 19.4538 7.31403 19.4121 7.54579C19.0244 7.30344 18.696 6.97499 18.4538 6.58719Z"
                                                            fill="#8B4513" />
                                                        <path opacity="0.5"
                                                            d="M16.9576 3.02099C16.156 3 15.2437 3 14.2 3H9.8C5.65164 3 3.57746 3 2.28873 4.31802C1 5.63604 1 7.75736 1 12C1 16.2426 1 18.364 2.28873 19.682C3.57746 21 5.65164 21 9.8 21H14.2C18.3484 21 20.4225 21 21.7113 19.682C23 18.364 23 16.2426 23 12C23 10.9326 23 9.99953 22.9795 9.1797C22.3821 9.47943 21.7103 9.64773 21 9.64773C18.5147 9.64773 16.5 7.58722 16.5 5.04545C16.5 4.31904 16.6646 3.63193 16.9576 3.02099Z"
                                                            fill="#8B4513" />
                                                    </svg>

                                                    <span
                                                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">
                                                        Hotel reviews</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('restaurant-reviews') }}" class="group">
                                                <div class="flex items-center">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M24 5C24 6.65685 22.6569 8 21 8C19.3431 8 18 6.65685 18 5C18 3.34315 19.3431 2 21 2C22.6569 2 24 3.34315 24 5Z"
                                                            fill="#8B4513" />
                                                        <path
                                                            d="M17.2339 7.46394L15.6973 8.74444C14.671 9.59966 13.9585 10.1915 13.357 10.5784C12.7747 10.9529 12.3798 11.0786 12.0002 11.0786C11.6206 11.0786 11.2258 10.9529 10.6435 10.5784C10.0419 10.1915 9.32941 9.59966 8.30315 8.74444L5.92837 6.76546C5.57834 6.47377 5.05812 6.52106 4.76643 6.87109C4.47474 7.22112 4.52204 7.74133 4.87206 8.03302L7.28821 10.0465C8.2632 10.859 9.05344 11.5176 9.75091 11.9661C10.4775 12.4334 11.185 12.7286 12.0002 12.7286C12.8154 12.7286 13.523 12.4334 14.2495 11.9661C14.947 11.5176 15.7372 10.859 16.7122 10.0465L18.3785 8.65795C17.9274 8.33414 17.5388 7.92898 17.2339 7.46394Z"
                                                            fill="#8B4513" />
                                                        <path
                                                            d="M18.4538 6.58719C18.7362 6.53653 19.0372 6.63487 19.234 6.87109C19.3965 7.06614 19.4538 7.31403 19.4121 7.54579C19.0244 7.30344 18.696 6.97499 18.4538 6.58719Z"
                                                            fill="#8B4513" />
                                                        <path opacity="0.5"
                                                            d="M16.9576 3.02099C16.156 3 15.2437 3 14.2 3H9.8C5.65164 3 3.57746 3 2.28873 4.31802C1 5.63604 1 7.75736 1 12C1 16.2426 1 18.364 2.28873 19.682C3.57746 21 5.65164 21 9.8 21H14.2C18.3484 21 20.4225 21 21.7113 19.682C23 18.364 23 16.2426 23 12C23 10.9326 23 9.99953 22.9795 9.1797C22.3821 9.47943 21.7103 9.64773 21 9.64773C18.5147 9.64773 16.5 7.58722 16.5 5.04545C16.5 4.31904 16.6646 3.63193 16.9576 3.02099Z"
                                                            fill="#8B4513" />
                                                    </svg>

                                                    <span
                                                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">
                                                        Restaurant reviews</span>
                                                </div>
                                            </a>
                                        </li>
                                        <h2
                                            class="py-3 px-7 flex items-center uppercase font-extrabold bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] -mx-4 mb-1">

                                            <svg class="w-4 h-5 flex-none hidden" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="1.5" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg>
                                            <span>REPORTS</span>
                                        </h2>
                                        <li class="nav-item">
                                            <a href="{{ url('Reports') }}" class="group">
                                                <div class="flex items-center">

                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.5" d="M3 8C3 5.17157 3 3.75736 3.87868 2.87868C4.75736 2 6.17157 2 9 2H15C17.8284 2 19.2426 2 20.1213 2.87868C21 3.75736 21 5.17157 21 8V16C21 18.8284 21 20.2426 20.1213 21.1213C19.2426 22 17.8284 22 15 22H9C6.17157 22 4.75736 22 3.87868 21.1213C3 20.2426 3 18.8284 3 16V8Z"
                                                         fill="#8B4513"/>
                                                       
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 2.01221V22.0111H7.25V2.01221H8.75Z" 
                                                        fill="#8B4513"/>
                                                        
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 8C1.25 7.58579 1.58579 7.25 2 7.25H4C4.41421 7.25 4.75 7.58579 4.75 8C4.75 8.41421 4.41421 8.75 4 8.75H2C1.58579 8.75 1.25 8.41421 1.25 8ZM1.25 12C1.25 11.5858 1.58579 11.25 2 11.25H4C4.41421 11.25 4.75 11.5858 4.75 12C4.75 12.4142 4.41421 12.75 4 12.75H2C1.58579 12.75 1.25 12.4142 1.25 12ZM1.25 16C1.25 15.5858 1.58579 15.25 2 15.25H4C4.41421 15.25 4.75 15.5858 4.75 16C4.75 16.4142 4.41421 16.75 4 16.75H2C1.58579 16.75 1.25 16.4142 1.25 16Z" 
                                                        fill="#8B4513"/>
                                                       
                                                        <path d="M10.75 6.5C10.75 6.08579 11.0858 5.75 11.5 5.75H16.5C16.9142 5.75 17.25 6.08579 17.25 6.5C17.25 6.91421 16.9142 7.25 16.5 7.25H11.5C11.0858 7.25 10.75 6.91421 10.75 6.5Z" 
                                                        fill="#8B4513"/>
                                                        
                                                        <path d="M10.75 10C10.75 9.58579 11.0858 9.25 11.5 9.25H16.5C16.9142 9.25 17.25 9.58579 17.25 10C17.25 10.4142 16.9142 10.75 16.5 10.75H11.5C11.0858 10.75 10.75 10.4142 10.75 10Z" 
                                                        fill="#8B4513"/>
                                                        </svg>
                                                        
                                                    <span
                                                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark"> Restaurant Reports</span>
                                                </div>
                                            </a>
                                        </li>

                                

                                        <li class="nav-item">
                                            <a href="/apps/notes" class="group">
                                                <div class="flex items-center">
                                                </div>
                                            </a>
                                        </li>
                                        </a>
                                </li>
                            </ul>
        </div>
    </nav>
</div>
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("sidebar", () => ({
            init() {
                const selector = document.querySelector('.sidebar ul a[href="' + window.location
                    .pathname + '"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.click();
                            });
                        }
                    }
                }
            },
        }));
    });
</script>
