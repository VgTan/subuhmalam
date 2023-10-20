<!DOCTYPE html>
<html class="scroll-smooth transition duration-700">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title></title>
</head>

<body class="overflow-x-hidden bg-[url('./images/bg.jpg')] bg-contain" style="background-image: url('./images/bg.jpg')">
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

    <div class="w-screen">
        <div class="z-30 absolute w-screen flex md:h-[500px] bg-black opacity-[.6] lg:h-[900px] h-[300px] items-center">
        </div>
        <div class="absolute flex w-screen lg:h-[900px] md:h-[500px] justify-center items-center text-white z-40">
            <div class="flex lg:w-3/4">
                <div class="md:text-center lg:text-left">
                    <p class="md:text-5xl lg:text-7xl">Padang Lamak Berkualitas<br>Ado di Siko</p>
                    <p class="pl-2 mt-1 text-gray-300 lg:text-xl">Makanan khas Padang dengan rempah asli
                        menjadikannya<br>kaya akan cita rasa</p>
                    <div class="flex md:justify-center lg:justify-start">
                        <div
                            class="m-4 ml-2 h-[60px] bg-[#ff8400] hover:bg-[#ffb44a] hover:scale-105 trasition duration-500 w-1/4 cursor-pointer rounded-full rounded-tl-none">
                            <a href="/menu"
                                class="h-[60px] no-underline text-white text-2xl flex items-center justify-center">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="z-30 w-full lg:h-[900px] md:h-[500px] object-cover" src="./images/PADANG.jpeg">
    </div>
    <div class="flex justify-center">
        <div class="w-4/5">
            <div class="mt-[100px]">
                <div class="flex justify-center">
                    <div class="text-white w-11/12">
                        <div class="flex gap-5 items-center ">
                            <div class="w-auto">
                                <p class="text-5xl mb-5">Our Signature</p>
                                <?php
                                use App\Models\Menu;
                                $rendang = Menu::find(1);
                                ?>
                                @if($rendang)
                                <a href="{{'#'. $rendang->id}}" class="scroll-smooth focus:scroll-auto">
                                    <img class="w-[400px] hover:scale-110 hover:rotate-12 transition duration-500 hover:cursor-pointer border-collapse"
                                        src="./images/piring_rendang.png" />
                                </a>
                                @endif
                            </div>
                            <div class="w-2/3">
                                <p class="text-2xl">Rendang bukan sekedar hidangan, tetapi telah menjadi
                                    bagian tak terisahkan dari
                                    budaya dan identitas kuliner Padang,
                                    Rendang dikenal dengan cita rasa gurih, pedas, dan
                                    manis
                                    yang memukau. Kombinasi sempurna antara bumbu rempah dan,
                                    daging sapi yang dimasak
                                    dalam waktu lama menjadikannya salah satu hidangan terbaik dari kami.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div
        class="mt-[130px] pt-[50px] pb-[50px] grid grid-cols-auto justify-center bg-gradient-to-b from- to-transparant">
        <div class="text-white">
            <div class="text-center">
                <p class="text-5xl mb-5">Explore Our Dishes</p>
            </div>
        </div>
        <?php
            $i = 0;
        ?>
        <div class="mt-[70px]">
            <div class="grid gap-5 grid-cols-3 justify-center">
                @foreach ($menu as $obj)
                @if($i < 3) <!-- <a href="{{'#' . $obj->id}}" class="">SINIIIII</a> -->
                    <a href="{{ url('/menu' . '#' . $obj->id) }}" id="{{$obj->id}}"
                        class="no-underline text-white hover:scale-105 bg-[#1F1F1F] bg-opacity-80 rounded-xl hover:bg-[#F29A4B] hover:bg-opacity-70 transition duration-300 w-[350px] h-[450px] shadow-2xl"
                        id="{{$obj->id}}">
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
                                    <form action="{{route('addtocart')}}"
                                        class="text-white w-full grid grid-rows-2 gap-2" method="post">
                                        @csrf
                                        <input class="hidden" type="text" name="id" value="{{ $obj->id }}" />
                                        <div class="flex justify-end items-center">
                                            <input class="text-black w-2/3 h-[30px]" name="quantity" type="number">
                                        </div>
                                        <div class="flex justify-end">
                                            <input type="submit" value="Add"
                                                class="bg-[#F29A4B] px-3 w-2/3 rounded-xl hover:scale-105 focus:scale-75 transition duration-500">
                                        </div>
                                    </form>
                                    <!-- <p class="lg:text-lg text-sm col-span-3">{{$obj->desc}}</p> -->
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php
                    $i++;
                    ?>
                    @endif
                    @endforeach
            </div>
        </div>
        <div class="flex justify-center mt-7">
            <a href="/menu"
                class="hover:scale-105 transition duration-500 text-3xl focus:scale-90 no-underline z-50 text-white px-[30px] py-[6px] rounded-2xl font-bold bg-[#F29A4B]">Explore
                More</a>
        </div>
        @if(Session()->has('admin'))
        <div class="flex justify-center mt-3">
            <a href="/addmenu"
                class="hover:scale-105 transition duration-500 text-3xl focus:scale-90 no-underline z-50 text-white px-[30px] py-[6px] rounded-2xl font-bold">Edit
                Menu</a>
        </div>
        @endif

    </div>
    <footer class="h-[500px]">
        <div class="text-white">
            <p>awdwaijdawjdiajdiadjapkdaiw</p>
        </div>
    </footer>
</body>

</html>