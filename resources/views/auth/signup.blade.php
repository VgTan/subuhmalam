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
    @include('header')
    <div class="flex justify-center lg:h-screen min-h-screen w-full items-center">
        <div class="flex flex-col md:flex-row h-1/2 w-full max-w-screen-lg mx-auto rounded-xl overflow-hidden">
            <div class="md:w-1/2 relative">
                <div class="z-30 absolute w-full h-full bg-black opacity-40 md:h-4/5 lg:h-full items-center"></div>
                <img class="object-cover h-2/3 md:h-full w-full" src="./images/PADANG.jpeg" alt="">
            </div>
            <div class="text-black w-full md:w-1/2 bg-[#1D1D1D] text-center flex justify-center items-center">
                <div class="h-auto w-5/6 items-center flex flex-col gap-10">
                    <p class="font-bold text-2xl md:text-5xl text-white">Sign Up</p>
                    <form class="w-full" action="{{route('signup-user')}}" method="post">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-3">
                            <div>
                                <input class="rounded-md pl-2 h-[40px] py-2 text-xs w-full" type="text"
                                    placeholder="First Name" name="first_name" value="{{old('first_name')}}">
                                <p class="text-danger absolute text-xs">@error('first_name'){{$message}} @enderror</p>
                            </div>
                            <div>
                                <input class="rounded-md pl-2 h-[40px] py-2 text-xs w-full" type="text"
                                    placeholder="Last Name" name="last_name" value="{{old('last_name')}}">
                            </div>
                            <div>
                                <input class="rounded-md pl-2 h-[40px] py-2 text-xs w-full" type="text" name="username"
                                    placeholder="Username" value="{{old('username')}}">
                                <p class="text-danger absolute text-xs">@error('username'){{$message}} @enderror</p>
                            </div>
                            <div>
                                <input class="rounded-md pl-2 h-[40px] py-2 text-xs w-full" type="email" name="email"
                                    placeholder="Email" value="{{old('email')}}">
                                <p class="text-danger absolute text-xs">@error('email'){{$message}} @enderror</p>
                            </div>
                            <div>
                                <input class="rounded-md pl-2 h-[40px] py-2 text-xs w-full" type="password"
                                    name="password" placeholder="Password" value="{{old('password')}}">
                                <p class="text-danger absolute text-xs">@error('password'){{$message}} @enderror</p>
                            </div>
                            <div>
                                <input id="birthdate" class="rounded-md pl-2 h-[40px] py-2 text-xs w-full" type="date"
                                    name="birthdate" value="{{old('birthdate')}}">
                                <p class="text-danger absolute text-xs">@error('birthdate'){{$message}} @enderror</p>
                            </div>
                            <div class="flex w-full text-white mt-2 col-span-2">
                                <div class="w-1/3 text-start flex items-center">
                                    <input class="w-[21px] h-[21px]" type="radio" value="M" name="gender">
                                    <p class="ml-2 text-xs">Male</p>
                                </div>
                                <div class="w-1/3 text-start flex items-center">
                                    <input class="w-[21px] h-[21px]" type="radio" value="F" name="gender">
                                    <p class="ml-2 text-xs">Female</p>
                                </div>
                                <div class="w-1/3 text-start flex items-center">
                                    <input class="w-[21px] h-[21px]" type="radio" value="NULL" name="gender">
                                    <p class="ml-2 text-xs">Rather not say</p>
                                </div>
                            </div>
                            <p class="text-danger absolute text-xs">@error('gender'){{$message}} @enderror</p>
                        </div>
                        @if(Session::has('Success'))
                        <div class="alert alert-success w-full">{{Session::get('Success')}}</div>
                        @endif
                        @if(Session::has('Fail'))
                        <div class="alert alert-success w-full">{{Session::get('Fail')}}</div>
                        @endif
                        <div class="flex justify-center">
                            <button type="submit"
                                class="bg-white hover:scale-105 transition duration-500 font-bold px-2 py-2 md:px-3 rounded-2xl w-48 text-xs md:text-xl mt-4">Sign
                                Up</button>
                        </div>
                    </form>
                    <p class="mt-1 text-xs md:text-xl text-white">Already have an account? <a
                            class="transition duration-300 no-underline font-bold text-[#FFBB5C] hover:text-white text-xs md:text-xl"
                            href="/login">Log In</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>