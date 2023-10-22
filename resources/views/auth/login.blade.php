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
    <div class="w-full fixed text-[#FFBB5C] md:bg-transparent bg-[#1D1D1D]">
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
            </nav>
        </div>
    </div>

    <div class="flex justify-center h-screen w-screen align-middle items-center">
        <div class="flex md:h-4/6 md:w-4/6 w-3/4 h-2/5 rounded-[50px] overflow-hidden">
            <div class="w-1/2 blur-[3.5px]">
                <div
                    class="z-30 absolute w-full flex md:h-[690px] bg-black opacity-[.4] lg:h-[900px] h-full items-center">
                </div>
                <img class="object-cover h-full" src="./images/PADANG.jpeg" alt="">
            </div>
            <div
                class="absolute text-center font-bold text-white z-30 md:w-1/3 md:h-2/3 w-2/5 h-2/5 flex justify-center items-center">
                <p class="font-kaushan font-light lg:text-6xl md:text-xl ">Salmoik <br>Tibo!</p>
            </div>
            <div class="text-white w-1/2 text-center flex justify-center items-center bg-[#1D1D1D] h-full">
                <div class="md:h-auto h-5/6 w-5/6 items-center flex">
                    <div class="w-full">
                        <p class="font-bold md:text-5xl text-xl md:mb-[80px]">Log In</p>
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
                                            class="rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] w-full"
                                            type="text" name="email_username" placeholder="Email/Username"
                                            value="{{old('email')}}">
                                        <p class="text-danger absolute text-sm">@error('email_username') {{$message}}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="">
                                        <input
                                            class="rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] w-full"
                                            type="password" name="password" placeholder="Password"
                                            value="{{old('password')}}">
                                        <p class="text-danger absolute text-sm">@error('password') {{$message}}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="flex justify-center">
                                        <button type="submit"
                                            class="bg-white hover:scale-105 transition duration-500 font-bold md:px-[45px] px-[10px] md:py-2 md:text-xl rounded-2xl md:mt-[30px] w-[180px] text-[11px]">Log
                                            In</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="mt-2">
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