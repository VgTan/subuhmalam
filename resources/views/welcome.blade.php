<!DOCTYPE html>
<html class="scroll-smooth transition duration-700">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title></title>
</head>

<body class="overflow-x-hidden bg-[url('./images/bg.jpg')] bg-contain" style="background-image: url('./images/bg.jpg')">
    @include('header')

    <!-- <div class="w-screen">
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
    </div> -->
    <div class="w-screen">
        <div class="flex w-screen lg:h-[1000px] md:h-[500px] justify-center items-center text-white z-40">
            <div class="flex h-full">
                <div class="flex items-center justify-center w-7/12">
                    <div class="md:text-center lg:text-left grid grid-cols-1 gap-14">
                        <p class="md:text-5xl lg:text-7xl">Padang Lamak Berkualitas<br>Ado di Siko</p>
                        <p class="pl-2 mt-1 text-gray-300 lg:text-2xl">Makanan khas Padang dengan rempah asli
                            menjadikannya<br>kaya akan cita rasa</p>
                        <div class="flex md:justify-center lg:justify-start">
                            <div
                                class="m-4 ml-2 h-[60px] bg-[#1D1D1D] hover:bg-[#232323] hover:scale-105 trasition duration-500 w-1/4 cursor-pointer rounded-lg">
                                <a href="/aboutus"
                                    class="h-[60px] no-underline text-white text-2xl flex items-center justify-center">About
                                    Us</a>
                            </div>
                            <div
                                class="m-4 ml-2 h-[60px] bg-[#ff8400] hover:bg-[#ff8400e4] hover:scale-105 trasition duration-500 w-1/4 cursor-pointer rounded-lg">
                                <a href="/menu"
                                    class="h-[60px] no-underline text-white text-2xl flex items-center justify-center">Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-5/12 col-span-2 lg:rounded-tl-[200px] lg:rounded-br-[200px] overflow-hidden">
                    <img class="z-30 w-full h-full object-cover" src="./images/PADANG.jpeg">
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="w-4/5">
            <div class="mt-[100px]">
                <div class="flex justify-center">
                    <div class="text-white w-11/12">
                        <!-- <div class="flex gap-5 items-center ">
                            <div class="w-auto">
                                <p class="text-5xl mb-5">Our Signature</p>
                                <?php
                                use App\Models\Menu;
                                $rendang = Menu::where('menu_name', 'Rendang')->first();
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
                        </div> -->
                        <div class="flex gap-5 items-center ">
                            <div class="w-2/5">
                                <?php
                                $rendang = Menu::where('menu_name', 'Rendang')->first();
                                ?>
                                @if($rendang)
                                <a href="{{'#'. $rendang->id}}" class="scroll-smooth focus:scroll-auto">
                                    <img class="w-full hover:scale-110 hover:rotate-12 transition duration-500 hover:cursor-pointer border-collapse"
                                        src="./images/piring_rendang.png" />
                                </a>
                                @endif
                            </div>
                            <div class="w-3/5">
                                <p class="text-4xl">The Finest Dish <br /> </p>
                                <p class="text-6xl mb-10">Rendang</p>
                                <p class="text-xl">Rendang bukan sekedar hidangan, tetapi telah menjadi
                                    bagian tak terisahkan dari
                                    budaya dan identitas kuliner Padang,
                                    Rendang dikenal dengan cita rasa gurih, pedas, dan
                                    manis
                                    yang memukau. Kombinasi sempurna antara bumbu rempah dan,
                                    daging sapi yang dimasak
                                    dalam waktu lama menjadikannya salah satu hidangan terbaik dari kami.
                                </p>
                                <div
                                    class="mt-4 h-[60px] bg-[#ff8400] hover:bg-[#ff8400e4] hover:scale-105 trasition duration-500 w-1/4 cursor-pointer rounded-lg">
                                    <a href="/menu"
                                        class="h-[60px] no-underline text-white text-2xl flex items-center justify-center">Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mt-[130x] pt-[50x] pb-[50px] grid grid-cols-auto justify-center bg-gradient-to-b from- to-transparant">
        <!-- <div class="text-white">
            <div class="text-center">
                <p class="text-5xl mb-5">Explore Our Dishes</p>
            </div>
        </div> -->
        <?php
            $i = 0;
        ?>
        <!-- <div class="mt-[70px]">
            <div class="flex flex-wrap gap-9 justify-center items-center">
                @foreach ($menu as $obj)
                @if($i < 3)
                    <a href="{{ url('/menu' . '#' . $obj->id) }}" id="{{$obj->id}}"
                        class="no-underline text-white hover:scale-105 bg-[#1D1D1D] bg-opacity-80 rounded-xl hover:bg-[#F29A4B] hover:bg-opacity-70 transition duration-300 w-[350px] h-[450px] shadow-2xl"
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
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php
                    // $i++;
                    ?>
                    @endif
                    @endforeach
            </div>
        </div> -->
        <div class="">
            <div class="flex flex-wrap gap-9 justify-center items-center">
                <a href="{{ url('/menu' . '#' . 'main') }}" id="{{$obj->id}}"
                    class="no-underline text-white hover:scale-105 bg-[#1D1D1D] bg-opacity-80 rounded-xl hover:bg-[#F29A4B] hover:bg-opacity-70 transition duration-300 w-[350px] h-[450px] shadow-2xl rounded-tl-[200px] rounded-br-[200px]"
                    id="{{$obj->id}}">
                    <div class="w-full flex justify-center h-full items-center">
                        <div class="w-full h-full">
                            <div class="flex justify-center h-1/3">
                                <img class="object-contain h-[250px] rounded-xl" src="/images/piring_rendang.png"
                                    alt="">
                            </div>
                            <div class="flex justify-center items-center h-full mt-[30px]">
                                <div class="text-center h-2/3 w-5/6">
                                    <p class="text-4xl">Main Dishes</p>
                                    <p class="mt-2 text-sm">Hidangan-hidangan yang memikat dengan rempah-rempah khas,
                                        cita rasa pedas,
                                        manis,
                                        dan
                                        gurih yang lezat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/menu' . '#' . $obj->id) }}" id="{{$obj->id}}"
                    class="no-underline text-white hover:scale-105 bg-[#1D1D1D] bg-opacity-80 rounded-xl hover:bg-[#F29A4B] hover:bg-opacity-70 transition duration-300 w-[350px] h-[450px] shadow-2xl rounded-tl-[200px] rounded-br-[200px]"
                    id="{{$obj->id}}">
                    <div class="w-full flex justify-center h-full items-center">
                        <div class="w-full h-full">
                            <div class="flex justify-center h-1/3">
                                <img class="object-contain h-[250px] rounded-xl" src="/images/potatoes.png" alt="">
                            </div>
                            <div class="flex justify-center items-center h-full mt-[30px]">
                                <div class="text-center h-2/3 w-5/6">
                                    <p class="text-4xl">Side Dishes</p>
                                    <p class="mt-2 text-sm">Hidangan-hidangan yang memikat dengan rempah-rempah khas,
                                        cita rasa pedas,
                                        manis,
                                        dan
                                        gurih yang lezat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/menu' . '#' . $obj->id) }}" id="{{$obj->id}}"
                    class="no-underline text-white hover:scale-105 bg-[#1D1D1D] bg-opacity-80 rounded-xl hover:bg-[#F29A4B] hover:bg-opacity-70 transition duration-300 w-[350px] h-[450px] shadow-2xl rounded-tl-[200px] rounded-br-[200px]"
                    id="{{$obj->id}}">
                    <div class="w-full flex justify-center h-full items-center">
                        <div class="w-full h-full">
                            <div class="flex justify-center h-1/3">
                                <img class="object-contain h-[250px] rounded-xl" src="/images/piring_rendang.png"
                                    alt="">
                            </div>
                            <div class="flex justify-center items-center h-full mt-[30px]">
                                <div class="text-center h-2/3 w-5/6">
                                    <p class="text-4xl">Extra</p>
                                    <p class="mt-2 text-sm">Hidangan-hidangan yang memikat dengan rempah-rempah khas,
                                        cita rasa pedas,
                                        manis,
                                        dan
                                        gurih yang lezat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex justify-center mt-7">
            <a href="/menu"
                class="hover:scale-105 transition duration-500 text-xl focus:scale-90 no-underline z-50 text-white px-[30px] py-[6px] rounded-lg font-bold bg-[#F29A4B]">View
                More</a>
        </div>
        @if(Session()->has('admin'))
        <div class="flex justify-center mt-3">
            <a href="/addmenu"
                class="hover:scale-105 transition duration-500 text-lg hover:text-[#F29A4B] focus:scale-90 no-underline z-50 text-white px-[30px] py-[6px] font-bold">Edit
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