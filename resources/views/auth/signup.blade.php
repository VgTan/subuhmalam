SIGNUP.BLADE.PHP

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
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite("resources/css/app.css")
    @vite("public/signup.css")
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="overflow-x-hidden bg-cover" style="background-image: url('./images/bg.jpg')">
    <div class="fixed top-0 z-50">
        @include('header')
    </div>
    <div class="flex justify-center h-screen w-screen align-middle items-center">
        <div
            class="flex flex-col md:flex-row w-[100%] h-[70%] md:h-[80%] md:w-[80%] rounded-[50px] md:overflow-hidden md:pt-20">

            <div class="w-full blur-[3.5px]">
                <div class="absolute w-full md:h-100% bg-black opacity-[.4] lg:h-[100%] h-full">
                </div>
                <img class="object-cover h-full" src="./images/PADANG.jpeg" alt="" style="width: 80vw;">

            </div>
            <div
                class="absolute text-center font-bold text-white md:w-[40%] md:h-[80%] w-[100%] h-[25%] flex justify-center items-center">
                <p class="lg:text-5xl md:text-xl font-kaushan font-light text-3xl">Salamoik <br>Tibo!</p>
            </div>
            <div class="text-white w-full text-center flex justify-center items-center bg-[#1D1D1D] h-full">
                <div class="flex w-5/6 items-center">
                    <div class="w-full h-full">
                        <p class="font-bold md:text-5xl text-xl md:mb-[20px]">Sign Up</p>
                        <form class="w-full" action="{{route('signup-user')}}" method="post">
                            @csrf
                            <div class="text-black md:grid gap-2">
                                <div class="grid grid-cols-2 gap-2">
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
                                        class="rounded md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] md:mt-4 mt-2 w-full "
                                        type="text" name="username" placeholder="Username" value="{{old('username')}}">
                                    <p class="text-danger absolute text-sm">@error('username') {{$message}} @enderror
                                    </p>
                                </div>
                                <div class="">
                                    <input
                                        class="rounded md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] md:mt-4 mt-2 w-full "
                                        type="email" name="email" placeholder="Email" value="{{old('email')}}">
                                    <p class="text-danger absolute text-sm">@error('email') {{$message}} @enderror</p>
                                </div>
                                <div class="">
                                    <input
                                        class="rounded md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] md:mt-4 mt-2 w-full "
                                        type="password" name="password" placeholder="Password"
                                        value="{{old('password')}}">
                                    <p class="text-danger absolute text-sm">@error('password') {{$message}} @enderror
                                    </p>
                                </div>
                                <div class="text-left">
                                    <input id="birthdate"
                                        class="rounded md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] md:mt-4 mt-2 w-full "
                                        type="date" name="birthdate" value="{{old('birthdate')}}">
                                    <p class="text-danger absolute text-sm">@error('birthdate') {{$message}} @enderror
                                    </p>
                                </div>
                                <div class="flex w-full text-white">
                                    <div class="w-1/3 text-start flex items-center">
                                        <input class="md:w-[21px] md:h-[21px]" type="radio" value="M" name="gender">
                                        <p class="md:ml-2 md:text-xl text-[7px]">Male</p>
                                    </div>
                                    <div class="w-1/3 text-start flex items-center">
                                        <input class="md:w-[21px] md:h-[21px]" type="radio" value="F" name="gender">
                                        <p class="md:ml-2 md:text-xl text-[7px]">Female</p>
                                    </div>
                                    <div class="w-1/3 text-start flex items-center">
                                        <input class="md:w-[21px] md:h-[21px]" type="radio" value="NULL" name="gender">
                                        <p class="md:ml-2 md:text-xl text-[7px]">Rather not say</p>
                                    </div>
                                    <p class="text-danger absolute text-sm">@error('gender') {{$message}} @enderror</p>
                                </div>
                                @if(Session::has('Success'))
                                <div class="alert alert-success w-full">{{Session::get('Success')}}</div>
                                @endif
                                @if(Session::has('Fail'))
                                <div class="alert alert-success w-full">{{Session::get('Fail')}}</div>
                                @endif
                                <div class="flex flex-wrap justify-center">
                                    <div class="g-recaptcha lg:scale-100 scale-50"
                                        data-sitekey="6Lezt8AoAAAAAEfM9W6YkRyHPks-DOXIZ30j5eRp"></div>
                                    @if(Session::has('g-recaptcha-response'))
                                    <p class="alert {{Session::get('alert-class', 'alert-info')}}"></p>
                                    {{Session::get('g-recaptcha-response')}}
                                    @endif
                                    <button type="submit"
                                        class="bg-white hover:scale-105 transition duration-500 font-bold md:py-2 md:text-xl rounded-2xl w-[100%] text-[11px]">Sign
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