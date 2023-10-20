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
                        <p class="font-bold md:text-5xl text-xl md:mb-[80px]">Sign Up</p>
                        <form class="w-full" action="{{route('signup-user')}}" method="post">
                            @csrf
                            <div class="text-black md:grid gap-3">
                                <div class="grid grid-cols-2 md:gap-3 gap-2">
                                    <div class="w-full">
                                        <input
                                            class="rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] w-full"
                                            type="text" placeholder="First Name" name="first_name"
                                            value="{{old('first_name')}}">
                                        <p class="text-danger absolute text-sm">@error('first_name') {{$message}}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="w-full">
                                        <input
                                            class="rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] w-full"
                                            type="text" placeholder="Last Name" name="last_name"
                                            value="{{old('last_name')}}">
                                    </div>
                                </div>
                                <div class="">
                                    <input
                                        class="rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] md:mt-4 mt-2 w-full "
                                        type="text" name="username" placeholder="Username" value="{{old('username')}}">
                                    <p class="text-danger absolute text-sm">@error('username') {{$message}} @enderror
                                    </p>
                                </div>
                                <div class="">
                                    <input
                                        class="rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] md:mt-4 mt-2 w-full "
                                        type="email" name="email" placeholder="Email" value="{{old('email')}}">
                                    <p class="text-danger absolute text-sm">@error('email') {{$message}} @enderror</p>
                                </div>
                                <div class="">
                                    <input
                                        class="rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] md:mt-4 mt-2 w-full "
                                        type="password" name="password" placeholder="Password"
                                        value="{{old('password')}}">
                                    <p class="text-danger absolute text-sm">@error('password') {{$message}} @enderror
                                    </p>
                                </div>
                                <div class="text-left">
                                    <input id="birthdate"
                                        class="rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] md:mt-4 mt-2 w-full "
                                        type="date" name="birthdate" value="{{old('birthdate')}}">
                                    <p class="text-danger absolute text-sm">@error('birthdate') {{$message}} @enderror
                                    </p>
                                </div>
                                <div class="flex w-full text-white md:mt-4 mt-2">
                                    <div class="w-1/3 text-start flex items-center">
                                        <input class="md:w-[21px] md:h-[21px] w-[10px] h-[10px]" type="radio" value="M"
                                            name="gender">
                                        <p class="md:ml-2 ml-1 md:text-xl text-[7px]">Male</p>
                                    </div>
                                    <div class="w-1/3 text-start flex items-center">
                                        <input class="md:w-[21px] md:h-[21px] w-[10px] h-[10px]" type="radio" value="F"
                                            name="gender">
                                        <p class="md:ml-2 ml-1 md:text-xl text-[7px]">Female</p>
                                    </div>
                                    <div class="w-1/3 text-start flex items-center">
                                        <input class="md:w-[21px] md:h-[21px] w-[10px] h-[10px]" type="radio"
                                            value="NULL" name="gender">
                                        <p class="md:ml-2 ml-1 md:text-xl text-[7px]">Rather not say</p>
                                    </div>
                                    <p class="text-danger absolute text-sm">@error('gender') {{$message}} @enderror</p>
                                </div>
                                @if(Session::has('Success'))
                                <div class="alert alert-success w-full">{{Session::get('Success')}}</div>
                                @endif
                                @if(Session::has('Fail'))
                                <div class="alert alert-success w-full">{{Session::get('Fail')}}</div>
                                @endif
                                <div class="flex justify-center">
                                    <button type="submit"
                                        class="bg-white hover:scale-105 transition duration-500 font-bold md:px-[45px] px-[10px] md:py-2 md:text-xl rounded-2xl md:mt-[30px] w-[180px] text-[11px]">Sign
                                        Up</button>
                                </div>
                            </div>
                        </form>
                        <p class="mt-1 md:text-xl text-[8px]">Already have an account? <a
                                class="transition duration-300 no-underline font-bold text-[#FFBB5C] hover:text-white md:text-xl text-[8px]"
                                href="/login">Log In</a></p>
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