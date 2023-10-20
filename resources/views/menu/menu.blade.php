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

    <div class="mt-[130px] pt-[50px] pb-[50px] flex justify-center bg-[#ff8400]">
        <div class="text-white w-3/4">
            <!-- <div class="mt-[70px]">
                <div class="flex gap-5 flex-wrap justify-center">
                    <div
                        class="hover:scale-105 transition duration-300 border-[3px] border-white h-[250px] w-[150px] md:h-[500px] md:w-[400px] rounded-b-[25px] ">
                        <div class="h-full w-full">
                            <div class="flex justify-center h-3/4 w-full">
                                <img class="menuect-cover w-full h-full" src="/images/menu/{{$menu->image}}" alt="">
                            </div>
                            <div class="flex justify-center">
                                <div class="m-5 text text-white flex justify-between items-center w-11/12">
                                    <p class="lg:text-4xl text-lg col-span-2">{{$menu->menu_name}}</p>
                                    <p class="lg:text-lg text-sm">Rp {{$menu->price}}</p>
                                    <p class="lg:text-lg text-sm col-span-3">{{$menu->desc}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="grid grid-cols-4">
                <div class="flex col-span-1">
                    <img class="object-cover w-full" src="/images/menu/{{$menu->image}}" alt="">
                </div>
                <div class="flex  items-center col-span-2">
                    <div class="m-5 text text-whitew-11/12">
                        <p class="lg:text-4xl text-lg col-span-2">{{$menu->menu_name}}</p>
                        <p class="lg:text-lg text-sm">Rp {{$menu->price}}</p>
                        <p class="lg:text-lg text-sm col-span-3">{{$menu->desc}}</p>
                    </div>
                </div>
            </div>
            <!-- @if(Session()->has('admin'))
            <div class="flex justify-center mt-[80px]">
                <a href="/addmenu"
                    class="hover:scale-105 transition duration-500 text-3xl focus:scale-90 no-underline z-50 text-white px-[30px] py-[6px] rounded-2xl font-bold">Edit
                    Menu</a>
            </div>
            @endif -->
        </div>
    </div>
    <footer class="h-[500px]">
        <div class="text-white">
            <p>awdwaijdawjdiajdiadjapkdaiw</p>
        </div>
    </footer>
</body>

</html>