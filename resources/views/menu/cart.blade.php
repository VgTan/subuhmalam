<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title></title>
</head>

<body class="overflow-x-hidden bg-contain" style="background-image: url('./images/bg.jpg')">
    <header class="fixed flex items-center align-middle z-50 top-7 w-screen justify-center text-lg text-white">
        <div class="w-1/3 text-center z-50">
            <p class="text-xl font-bold hover:text-[#FFBB5C] cursor-pointer">SubuhMalam</p>
        </div>
        <div class="w-2/3 flex justify-center gap-[90px] items-center">
            <a href="/" class="no-underline z-50 text-white hover:text-[#FFBB5C]">Home</a>
            <a href="/aboutus" class="no-underline z-50 text-white hover:text-[#FFBB5C]">About Us</a>
            <a href="/menu" class="no-underline z-50 text-white hover:text-[#FFBB5C]">Menu</a>
            @if(!Session()->has('loginId'))
            <a href="/login"
                class="hover:scale-105 transition duration-500 no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Login</a>
            @endif
            @if(Session()->has('loginId'))
            <a href="/logout"
                class="hover:scale-105 transition duration-500 no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Logout</a>
            @endif

        </div>
    </header>
    <div class="mt-[130px] pt-[50px] pb-[50px] grid grid-rows-auto justify-center ">
        <div class="">
            @foreach($cart as $obj)
            <div class="text-white">
                <p>{{ $obj->name }}</p>
                <p>{{ $obj->price }}</p>
                <p>{{ $obj->quantity }}</p>
                <form action="{{ route('delete_cart') }}" type="post">
                    <input class="hidden" type="text" name="id" value="{{ $obj->id_menu }}" />
                    <input type="submit" value="×" class="font-bold text-red-500 no-underline text-xl absolute ml-3 ">
                </form>
            </div>
            @endforeach
        </div>
    </div>
    <footer class="h-[500px]">
        <div class="text-white">
        </div>
    </footer>
</body>

</html>