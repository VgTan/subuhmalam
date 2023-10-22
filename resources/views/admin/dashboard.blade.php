<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title></title>
</head>

<body class="overflow-x-hiddenbg-[url('./images/bg.jpg')] bg-contain" style="background-image: url('./images/bg.jpg')">
    @include('header')

    <div class="w-full flex justify-center pt-[300px]">
        <div class="bg-[#1D1D1D] h-full w-1/2 rounded-2xl overflow-hidden">
            <div class="bg-[#ff8400] text-center text-white justify-center py-10">
                <p class="font-playfair text-5xl">DASHBOARD</p>
            </div>
            <div class="text-center my-7 font-worksans text-xl">
                <a class="no-underline text-white hover:text-[#ff8400] transition duration-300" href="/addmenu">Add New
                    Menu</a>
            </div>
            <div class="text-center my-7 font-worksans text-xl">
                <a class="no-underline text-white hover:text-[#ff8400] transition duration-300" href="/menu">Delete
                    Menu</a>
            </div>
            <div class="text-center my-7 font-worksans text-xl">
                <a class="no-underline text-white hover:text-[#ff8400] transition duration-300"
                    href="{{ route('check') }}">Check Orders</a>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 w-full">
        @include('footer')
    </div>
</body>

</html>