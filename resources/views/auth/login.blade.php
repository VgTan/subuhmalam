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
    <header
        class="fixed font-belleza flex items-center align-middle z-50 top-7 w-screen justify-center text-lg text-white m-0 p-0 h-[70px]">
        <div class="flex items-center justify-center z-50 w-1/3">
            <img src="./images/logo.png" class="w-1/3" alt="">
        </div>
        <div class="w-2/3 flex justify-center gap-[90px] items-center">
            <a href="/"
                class="text-xl no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110 transition duration-300 ">Home</a>
            <a href="/aboutus"
                class="text-xl no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110  transition duration-300 ">About
                Us</a>
            <a href="/menu"
                class="text-xl no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110  transition duration-300 ">Menu</a>
            @if(!Session()->has('loginId'))
            <a href="/signup"
                class="hover:scale-105 transition duration-500 text-xl no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Sign Up</a>
            @endif
            @if(Session()->has('loginId'))
            <a href="/logout"
                class="hover:scale-105 transition duration-500 text-xl no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Logout</a>
            @endif
        </div>
    </header>

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
                <p class="lg:text-5xl md:text-xl text-lg">Salmoik <br>Tibo!</p>
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