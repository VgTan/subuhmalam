<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite("resources/css/app.css")
</head>

<body class="overflow-x-hidden bg-cover" style="background-image: url('./images/bg.jpg')">
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
                <a href="/signup"
                    class="hover:scale-105 font-belleza transition duration-500 md:text-xl text-md no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold text-center">Sign
                    Up</a>
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
    <div class="flex justify-center h-screen w-screen align-middle items-center">
        <div
            class="flex flex-col md:flex-row w-[100%] h-[70%] md:h-[80%] md:w-[80%] rounded-[50px] md:overflow-hidden md:mt-20">

            <div class="w-[100%] md:w-1/2 blur-[3.5px]">
                <div
                    class="z-30 absolute w-full flex md:h-[690px] bg-black opacity-[.4] lg:h-[900px] h-full items-center">
                </div>
                <img class="object-cover h-full" src="./images/PADANG.jpeg" alt="">
            </div>

            <div
                class="absolute text-center font-bold text-white md:w-[40%] md:h-[80%] w-[100%] h-[25%] flex justify-center items-center">
                <p class="lg:text-5xl md:text-xl font-kaushan font-light text-3xl">Salamoik <br>Tibo!</p>
            </div>

            <div class="text-white w-full md:w-1/2 text-center flex justify-center items-center bg-[#1D1D1D] h-full">
                <div class="md:h-auto h-5/6 w-5/6 items-center flex">
                    <div class="w-full">
                        <p class="font-bold md:text-5xl text-xl md:mb-[80px] md:my-0 my-[20px]">Log In</p>
                        @if(Session::has('Success'))
                        <div class="alert alert-success w-full">{{Session::get('Success')}}</div>
                        @endif
                        @if(Session::has('Fail'))
                        <div class="alert alert-danger w-full">{{Session::get('Fail')}}</div>
                        @endif
                        <form class="w-full" action="{{route('login-user')}}" method="post">
                            @csrf
                            <div class="text-black">
                                <div class="grid grid-cols-1 md:gap-3 gap-2">
                                    <div class="w-full md:grid gap-2">
                                        <input
                                            class="rounded-md md:pl-3 pl-1 md:h-[40px] h-[25px] py-2 md:text-lg text-xs w-full"
                                            type="text" name="email_username" placeholder="Email/Username"
                                            value="{{old('email')}}">
                                        <p class="text-danger absolute text-sm">@error('email_username') {{$message}}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="">
                                        <input
                                            class="rounded-md md:pl-3 pl-1 md:h-[40px] h-[25px] py-2 md:text-lg text-xs w-full"
                                            type="password" name="password" placeholder="Password"
                                            value="{{old('password')}}">
                                        <p class="text-danger absolute text-sm">@error('password') {{$message}}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="flex justify-center">
                                        <button type="submit"
                                            class="bg-white hover:scale-105 transition duration-500 font-bold md:px-[45px] px-[10px] md:py-2 my-2 md:text-xl rounded-2xl md:mt-[30px] w-[180px] md:h-[70%] h-[24px] text-[11px]">Log
                                            In</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="md:mt-2 md:text-base text-xs md:pb-0 pb-[20px]">
                            <p>Don't have any account?<a
                                    class="transition duration-300 mt-1 no-underline font-bold text-[#FFBB5C] hover:text-white"
                                    href="/signup"> Create
                                    New
                                    Account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>