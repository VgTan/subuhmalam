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
    <header class="fixed flex items-center align-middle z-50 top-7 w-screen justify-center text-lg text-white">
        <div class="w-1/3 text-center z-50">
            <p class="text-3xl font-bold hover:text-[#FFBB5C] transition duration-300 cursor-pointer">SubuhMalam</p>
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
            <a href="/login"
                class="hover:scale-105 transition duration-500 text-xl no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Login</a>
            @endif
            @if(Session()->has('loginId'))
            <a href="/logout"
                class="hover:scale-105 transition duration-500 text-xl no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Logout</a>
            @endif
        </div>
    </header>

    <div class="mt-[130px] pt-[50px] pb-[50px] grid grid-rows-auto justify-center ">
        <div class="text-white">
            @foreach($menu as $obj)
            <div class="flex w-full justify-center bg-[#ff8400]" id="{{$obj->id}}">
                <div class="w-3/4">
                    <div class="grid grid-cols-4 h-[200px]">
                        <div class="flex col-span-1 justify-center">
                            <img class="object-contain h-[200px]" src="/images/menu/{{$obj->image}}" alt="">
                        </div>
                        <div class="flex h-auto items-center col-span-2 justify-center w-full">
                            <div class="m-5 text text-white w-11/12">
                                <p class="lg:text-4xl text-lg col-span-2">{{$obj->menu_name}}</p>
                                <p class="lg:text-lg text-sm">Rp {{$obj->price}}</p>
                                <p class="lg:text-lg text-sm col-span-3">{{$obj->desc}}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <form action="">
                                <input class="text-black" type="number">
                                <input type="submit" value="Add to Cart" class="hover:scale-105 focus:scale-75 transition duration-500">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- @if(Session()->has('admin'))
            <div class="flex justify-center mt-[80px]">
                <a href="/addmenu"
                    class="hover:scale-105 transition duration-500 text-3xl focus:scale-90 no-underline z-50 text-white px-[30px] py-[6px] rounded-2xl font-bold">Edit
                    Menu</a>
            </div>
            @endif -->
    </div>
    <footer class="h-[500px]">
        <div class="text-white">
            <p>awdwaijdawjdiajdiadjapkdaiw</p>
        </div>
    </footer>
</body>

</html>