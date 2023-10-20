<!DOCTYPE html>
<html class="scroll-smooth transition duration-700">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title></title>
</head>

<body class="overflow-x-hidden bg-[url('./images/bg.jpg')] bg-contain"
    style="background-image: url('../images/bg.jpg')">
    @include('header')
    <div class="w-screen">
        <!-- <div class="z-30 absolute w-screen flex md:h-[500px] bg-black opacity-[.6] lg:h-[900px] h-[300px] items-center">
        </div> -->
        <div class="flex w-screen lg:h-[900px] md:h-[500px] justify-center items-center text-white z-40">
            <div class="lg:grid lg:grid-cols-5 w-5/6 flex lg:mt-0 mt-[150px]">
                <div class="flex items-center col-span-3">
                    <div class="md:text-center lg:text-left lg:ml-0 ml-8">
                        <div class="grid gap-4">
                            <p class="md:text-5xl lg:text-8xl">Rendang Spesial</p>
                            <p class="pl-2 mt-1 text-gray-300 lg:text-2xl">Potongan daging lembut yang meresap dalam
                                rempah-rempah kaya dengan cita rasa pedas manis, menciptakan pengalaman kuliner yang
                                memanjakan lidah Anda. Sajian penuh kenikmatan yang melebur dalam setiap gigitannya.</p>
                        </div>
                        <div class="flex md:justify-center lg:justify-start">
                            <div
                                class="m-4 ml-2 h-[60px] mt-7 bg-[#F3A446] hover:bg-[#ffb44a] hover:scale-105 trasition duration-500 w-1/4 cursor-pointer rounded-full rounded-tl-none">
                                <a href="#1"
                                    class="h-[60px] no-underline text-white text-2xl flex items-center justify-center">Buy
                                    Now</a>
                            </div>
                        </div>
                        <!-- <form action="{{route('addtocart')}}" method="post"
                            class="m-4 ml-2 h-[60px] bg-[#A06235] hover:bg-[#ffb44a] hover:scale-105 trasition duration-500 w-1/4 cursor-pointer rounded-full rounded-tl-none">
                            @csrf
                            <div class="justify-center flex">
                                <input type="submit" value="Buy Now"
                                    class="h-[60px] no-underline text-white text-2xl flex items-center justify-center">
                            </div>
                        </form> -->
                    </div>
                </div>
                <div class="flex justify-center w-full col-span-2">
                    <img class="z-30 w-3/4 object-cover" src="./images/piring_rendang.png">
                </div>
            </div>
        </div>
        <div class="text-center text-white mb-[100px]">
            <p class="text-5xl">MENU</p>
        </div>
        <div class="text-white" id="main">
            <p>MAIN COURSE</p>
        </div>
        <div class="flex justify-center">
            <div class="text-white flex flex-wrap justify-center w-5/6 gap-10">
                @foreach($main as $obj)
                <div class="bg-[#1D1D1D] bg-opacity-80 rounded-xl hover:bg-[#A06235] hover:bg-opacity-70 transition duration-300 w-[350px] h-[450px] shadow-2xl"
                    id="{{$obj->id}}">
                    @if(Session()->has('admin'))
                    @if($obj->id != 1)
                    <form action="{{ route('delete_menu') }}" type="post">
                        <input class="hidden" type="text" name="id" value="{{ $obj->id }}" />
                        <input type="submit" value="×"
                            class="font-bold text-red-500 no-underline text-xl absolute ml-3 ">
                    </form>
                    @endif
                    @endif
                    <div class="w-full flex justify-center h-full items-center">
                        <div class="w-3/4 h-full">
                            <div class="flex justify-center h-2/3">
                                <img class="object-contain h-full" src="/images/menu/{{$obj->image}}" alt="">
                            </div>
                            <div class="grid grid-cols-3 grid-flow-row">
                                <div class="grid grid-rows-2 col-span-2 gap-2 items-center">
                                    <p class="text-2xl col-span-2">{{$obj->menu_name}}</p>
                                    <p class="lg:text-lg text-sm">Rp {{$obj->price}}</p>
                                </div>
                                <form action="{{route('addtocart')}}" class="text-white w-full grid grid-rows-2 gap-2"
                                    method="post">
                                    @csrf
                                    <input class="hidden" type="text" name="id" value="{{ $obj->id }}" />
                                    <div class="flex justify-end items-center">
                                        <input class="text-black w-2/3 h-[30px] pl-2" name="quantity" type="number"
                                            value="0" min="0" max="10">
                                    </div>
                                    <div class="flex justify-end">
                                        <input type="submit" value="Add"
                                            class="bg-[#F3A446] px-3 w-2/3 cursor-pointer rounded-xl hover:scale-105 focus:scale-75 transition duration-500">
                                    </div>
                                </form>
                                <!-- <p class="lg:text-lg text-sm col-span-3">{{$obj->desc}}</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="absolute bottom-5 right-5">
        <a href="/cart">CART</a>
    </div>
    <!-- @if(Session()->has('admin'))
            <div class="flex justify-center mt-[80px]">
                <a href="/addmenu"
                    class="hover:scale-105 transition duration-500 text-3xl focus:scale-90 no-underline z-50 text-white px-[30px] py-[6px] rounded-2xl font-bold">Edit
                    Menu</a>
            </div>
            @endif -->
    <footer class="h-[500px]">
        <div class="text-white">
        </div>
    </footer>
</body>

</html>