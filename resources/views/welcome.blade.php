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
    <div class="w-screen lg:pt-0 pt-[80px]">
        <div class="flex w-screen lg:h-[1000px] h-[220px] justify-center items-center text-white z-40">
            <div class="flex h-full md:text-left text-center md:w-auto w-full">
                <div class="z-10 flex items-center justify-center md:w-7/12 w-full md:h-auto h-full">
                    <div class="md:text-center lg:text-left lg:grid grid-cols-1 gap-14">
                        <p class="md:text-5xl lg:text-7xl text-lg text-[#ff8400] font-playfair tracking-wide">Padang
                            Lamak
                            Berkualitas<br> Ado di Siko</p>
                        <p class="pl-2 mt-1 text-gray-300 md:text-2xl text-sm tracking-wide font-lancelot">Makanan khas
                            Padang
                            dengan rempah
                            asli
                            menjadikannya<br>kaya akan cita rasa</p>
                        <div class="flex justify-center md:justify-start">
                            <a href="/aboutus"
                                class="no-underline flex justify-center items-center m-4 ml-2 mt-4 md:h-[60px] md:w-1/4 h-[40px] w-1/4 bg-[#1D1D1D] hover:bg-[#232323] hover:scale-105 trasition duration-500 cursor-pointer rounded-sm">
                                <div class="md:w-11/12 flex md:justify-between justify-center w-full">
                                    <p
                                        class="font-belleza md:w-full tracking-wide md:ml-5 md:h-[60px] h-[40px] text-white md:text-xl text-xs flex items-center">
                                        About
                                        Us</p>

                                    <div class="md:flex justify-end w-full items-center mr-4 hidden">
                                        <img src="./images/arrow.png" class="md:w-[20px] mh-[25px]" alt="">
                                    </div>
                                </div>
                            </a>
                            <a href="/menu"
                                class="no-underline flex justify-center items-center m-4 ml-2 mt-4 md:h-[60px] md:w-1/4 h-[40px] w-1/4 bg-[#ff8400] hover:bg-[#ff8c12] hover:scale-105 trasition duration-500 cursor-pointer rounded-sm">
                                <div class="md:w-11/12 flex md:justify-between justify-center w-full">
                                    <div
                                        class="font-belleza md:w-full tracking-wide md:ml-5 md:h-[60px] h-[40px] text-white md:text-xl text-xs flex items-center">
                                        Menu</div>
                                    <div class="md:flex justify-end w-full items-center mr-4 hidden">
                                        <img src="./images/arrow.png" class="md:w-[20px] mh-[25px]" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="md:w-5/12 md:col-span-2 md:rounded-tl-[200px] md:rounded-br-[200px] overflow-hidden md:relative absolute z-0">
                    <div
                        class="z-30 absolute lg:hidden w-full flex md:h-[500px] bg-black opacity-[.5] lg:h-[900px] h-[300px] justify-center items-center">
                    </div>
                    <img class="z-30 w-full lg:h-full h-[220px] object-cover" src="./images/PADANG.jpeg">
                </div>
            </div>
        </div>
    </div>


    <div class="flex justify-center lg:mt-[100px] mt-[50px]">
        <div class="text-white w-11/12">
            <div class="lg:flex grid justify-center gap-2 items-center w-full">
                <div class="lg:w-2/5 flex justify-center">
                    <a href="" class="scroll-smooth focus:scroll-auto flex lg:justify-end justify-center">
                        <img class="lg:w-full w-2/5 hover:scale-110 hover:rotate-12 transition duration-500 hover:cursor-pointer border-collapse"
                            src="./images/piring_rendang.png" />
                    </a>
                </div>
                <div class="lg:w-3/5 w-full lg:text-left text-center flex justify-center">
                    <div class="lg:full w-5/6">
                        <p class="lg:text-xl text-sm text-[#ff8400] italic tracking-wide">The Finest
                            Dish <br />
                        </p>
                        <p class="lg:text-8xl text-2xl lg:mb-10 mb-2 text-[#ff8400] font-charmonman tracking-wide">
                            Rendang
                        </p>
                        <p class="lg:text-2xl text-xs font-lancelot tracking-wide">Rendang bukan sekedar
                            hidangan, tetapi telah menjadi
                            bagian tak terisahkan dari
                            budaya dan identitas kuliner Padang,
                            Rendang dikenal dengan cita rasa gurih, pedas, dan
                            manis
                            yang memukau. Kombinasi sempurna antara bumbu rempah dan,
                            daging sapi yang dimasak
                            dalam waktu lama menjadikannya salah satu hidangan terbaik dari kami.
                        </p>
                        <a href="/menu" class="no-underline flex justify-center items-center mt-4 lg:h-[60px] lg:w-1/2 h-[40px] w-full bg-[#1D1D1D]
                                    hover:bg-[#232323] hover:scale-105 trasition duration-500 cursor-pointer
                                    rounded-sm">
                            <div class="w-11/12 flex justify-between text-center">
                                <div class="w-full text-start">
                                    <div
                                        class="lg:text-2xl text-sm font-belleza tracking-wide pl-5 w-full h-[60px] text-white flex items-center">
                                        Menu
                                    </div>
                                </div>
                                <div class="flex justify-end w-full items-center mr-4">
                                    <img src="./images/arrow.png" class="lg:w-[20px] lg:h-[25px] w-[15px]" alt="">
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lg:mt-[70px] mt-[30px] lg:pt-[50x] lg:pb-[50px] grid grid-cols-auto justify-center">
        <div class="">
            <form action="{{ route('filter_menu') }}" class="flex flex-wrap lg:gap-9 gap-2 justify-center items-center">
                @csrf
                <button type="submit" name="category" value="main_course"
                    class="no-underline text-white hover:scale-105 bg-[#1D1D1D] bg-opacity-80 rounded-xl hover:bg-[#F29A4B] hover:bg-opacity-70 transition duration-300 lg:w-[350px] lg:h-[450px] w-[110px] h-[150px] shadow-2xl lg:rounded-tl-[200px] lg:rounded-br-[200px]">
                    <div class="w-full lg:flex grid justify-center items-center">
                        <div class="w-full lg:h-full">
                            <div class="flex justify-center lg:h-1/3">
                                <img class="object-contain lg:h-[250px] h-[90px] rounded-xl" src="/images/piring_rendang.png" alt="">
                            </div>
                            <div class="flex justify-center items-center h-full">
                                <div class="text-center h-2/3 w-3/3">
                                    <p class="lg:text-4xl text-sm font-playfair">Main Dishes</p>
                                    <p class="lg:block hidden mt-2 text-sm">Hidangan-hidangan yang memikat dengan rempah-rempah khas,
                                        cita rasa pedas,
                                        manis,
                                        dan
                                        gurih yang lezat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>

                <button type="submit" name="category" value="side_dish"
                    class="no-underline text-white hover:scale-105 bg-[#1D1D1D] bg-opacity-80 rounded-xl hover:bg-[#F29A4B] hover:bg-opacity-70 transition duration-300 lg:w-[350px] lg:h-[450px] w-[110px] h-[150px] shadow-2xl lg:rounded-tl-[200px] lg:rounded-br-[200px]">
                    <div class="w-full lg:flex grid justify-center items-center">
                        <div class="w-full lg:h-full">
                            <div class="flex justify-center lg:h-1/3">
                                <img class="object-contain lg:h-[250px] h-[90px] rounded-xl" src="/images/potatoes.png" alt="">
                            </div>
                            <div class="flex justify-center items-center h-full">
                                <div class="text-center h-2/3 w-2/3">
                                    <p class="lg:text-4xl text-sm font-playfair">Side Dishes</p>
                                    <p class="lg:block hidden mt-2 text-sm">Hidangan-hidangan yang memikat dengan rempah-rempah khas,
                                        cita rasa pedas,
                                        manis,
                                        dan
                                        gurih yang lezat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>

                <button type="submit" name="category" value="extra"
                    class="no-underline text-white hover:scale-105 bg-[#1D1D1D] bg-opacity-80 rounded-xl hover:bg-[#F29A4B] hover:bg-opacity-70 transition duration-300 lg:w-[350px] lg:h-[450px] w-[110px] h-[150px] shadow-2xl lg:rounded-tl-[200px] lg:rounded-br-[200px]">
                    <div class="w-full lg:flex grid justify-center items-center">
                        <div class="w-full lg:h-full">
                            <div class="flex justify-center lg:h-1/3">
                                <img class="object-contain lg:h-[250px] h-[90px] rounded-xl" src="/images/drink.png" alt="">
                            </div>
                            <div class="flex justify-center items-center h-full">
                                <div class="text-center h-2/3 w-2/3">
                                    <p class="lg:text-4xl text-sm font-playfair">Drinks</p>
                                    <p class="lg:block hidden mt-2 text-sm">Hidangan-hidangan yang memikat dengan rempah-rempah khas,
                                        cita rasa pedas,
                                        manis,
                                        dan
                                        gurih yang lezat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>
            </form>
        </div>
        <!-- <div class="flex justify-center mt-7">
            <a href="/menu"
                class="hover:scale-105 transition duration-500 text-xl focus:scale-90 no-underline z-50 text-white px-[30px] py-[6px] rounded-lg font-bold bg-[#ff8400] italic">View
                More</a>
        </div> -->
    </div>
    @include('footer')
</body>

</html>