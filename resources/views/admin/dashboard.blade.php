<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title></title>
</head>

<body class="overflow-x-hidden h-screen bg-[url('./images/bg.jpg')] bg-contain"
    style="background-image: url('./images/bg.jpg')">
    @include('header')
    <div class="h-screen flex justify-center items-center">
        <div class="w-full flex justify-center md:pt-20 lg:pt-40">
            <div class="bg-[#1D1D1D] h- w-full md:w-1/2 rounded-2xl overflow-hidden">
                <div class="bg-[#ff8400] text-center text-white py-10">
                    <p class="font-playfair lg:text-3xl text-xl md:text-5xl">DASHBOARD</p>
                </div>
                <div class="text-center my-4 md:my-7 font-worksans lg:text-lg text-md md:text-xl">
                    <a class="no-underline text-white hover:text-[#ff8400] transition duration-300" href="/addmenu">Add
                        New
                        Menu</a>
                </div>
                <div class="text-center my-4 md:my-7 font-worksans lg:text-lg text-md md:text-xl">
                    <a class="no-underline text-white hover:text-[#ff8400] transition duration-300" href="/menu">Delete
                        Menu</a>
                </div>
                <div class="text-center my-4 md:my-7 font-worksans lg:text-lg text-md md:text-xl">
                    <a class="no-underline text-white hover:text-[#ff8400] transition duration-300"
                        href="{{ route('check') }}">Check Orders</a>
                </div>
            </div>
        </div>
    </div>
    @include('footer')

</body>

</html>