    <!-- <header
        class="fixed flex items-center align-middle z-50 top-7 w-screen justify-center text-lg text-white m-0 p-0 lg:h-[70px]">
        <div class="flex items-center justify-center z-50 w-1/3">
            <img src="./images/logo.png" class="w-1/3" alt="">
        </div>
        <div class="w-2/3 flex justify-center gap-[90px] items-center">
            <a href="/"
                class="text-xl font-belleza no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110 transition duration-300 ">Home</a>
            <a href="/aboutus"
                class="text-xl font-belleza no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110  transition duration-300 ">About
                Us</a>
            <a href="/menu"
                class="text-xl font-belleza no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110  transition duration-300 ">Menu</a>
            @if(!Session()->has('loginId'))
            <a href="/login"
                class="hover:scale-105 font-belleza transition duration-500 text-xl no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Login</a>
            @endif
            @if(Session()->has('admin'))
            <a href="/dashboard"
                class="hover:scale-105 font-belleza transition duration-500 text-xl no-underline z-50 text-white bg-[#1D1D1D] hover:bg-[#212121] px-[30px] py-[6px] rounded-2xl font-bold">Dashboard</a>
            @endif
            @if(Session()->has('loginId'))
            <a href="/logout"
                class="hover:scale-105 font-belleza transition duration-500 text-xl no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Logout</a>
            @endif
        </div>
    </header> -->


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="w-full fixed text-[#FFBB5C] md:bg-transparent bg-[#1D1D1D] z-50">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between h-auto">
                <a href="/"><img src="./images/logo.png" class="w-1/2" alt=""></a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col md:gap-[90px] gap-5 lg:items-center flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a href="/"
                    class="md:text-xl text-md font-belleza no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110 transition duration-300 ">Home</a>
                <a href="/aboutus"
                    class="md:text-xl text-md font-belleza no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110  transition duration-300 ">About
                    Us</a>
                <a href="/menu"
                    class="md:text-xl text-md font-belleza no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110  transition duration-300 ">Menu</a>
                @if(!Session()->has('loginId'))
                <a href="/login"
                    class="hover:scale-105 font-belleza transition duration-500 md:text-xl text-md no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold text-center">Login</a>
                @endif
                @if(Session()->has('loginId'))
                <a href="/logout"
                    class="z-0 hover:scale-105 font-belleza transition duration-500 md:text-xl text-md no-underline text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold text-center">Logout</a>

                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row md:text-xl font-belleza items-center w-full px-[30px] py-[6px] text-sm font-semibold text-left bg-[#1D1D1D] rounded-xl md:w-auto md:inline text-white hover:bg-[#2b2b2b] hover:text-[#ff8400] focus:outline-none focus:shadow-outline transition duration-300">
                        @if(Session()->has('admin'))
                        <span>Admin</span>
                        @else
                        <span>User</span>
                        @endif
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="z-50 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            @if(Session()->has('admin'))
                            <a class="no-underline text-[#1D1D1D] hover:text-[#ff8400] block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="/dashboard">Dashboard</a>
                            @endif
                            <a class="no-underline text-[#1D1D1D] hover:text-[#ff8400] block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="/cart">Cart</a>
                            <a class="no-underline text-[#1D1D1D] hover:text-[#ff8400] block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="/order">Orders</a>
                        </div>
                    </div>
                </div>
                @endif
            </nav>
        </div>
    </div>