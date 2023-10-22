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
        <div class="lg:flex hidden w-screen lg:h-[900px] md:h-[500px] justify-center items-center text-white z-40">
            <div class="lg:grid lg:grid-cols-5 w-5/6 flex lg:mt-0 mt-[150px]">
                <div class="flex items-center col-span-3">
                    <div class="md:text-center lg:text-left lg:ml-0 ml-8">
                        <div class="grid gap-4">
                            <p class="md:text-5xl lg:text-8xl font-lancelot text-[#ff8400]">Rendang Spesial</p>
                            <p class="pl-2 mt-1 text-gray-300 lg:text-2xl italic">Potongan daging lembut yang meresap
                                dalam
                                rempah-rempah kaya dengan cita rasa pedas manis, menciptakan pengalaman kuliner yang
                                memanjakan lidah Anda. Sajian penuh kenikmatan yang melebur dalam setiap gigitannya.</p>
                        </div>
                        <div class="flex md:justify-center lg:justify-start text-center">
                            <form action="{{ route('filter_menu') }}"
                                class="m-4 ml-2 h-[60px] mt-7 bg-[#ff8400] hover:bg-[#F3A446] text-center hover:scale-105 trasition duration-500 w-1/4 cursor-pointer rounded-full rounded-tl-none">
                                <button type="submit" name="category" value="main_course"
                                    class="h-[60px] no-underline text-white w-full text-2xl flex items-center justify-center">Buy
                                    Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center w-full col-span-2">
                    <img class="z-30 w-3/4 object-cover" src="./images/piring_rendang.png">
                </div>
            </div>
        </div>
        <div class="flex justify-center lg:pt-0 pt-[150px]">
            <div class="w-4/6">
                <div class="text-center text-white lg:mb-[90px] mb-[50px]" id="menu">
                    <p class="lg:text-7xl text-4xl font-charmonman tracking-wider">MENU</p>
                    <div class="relative inline-flex text-left w-2/3">
                        <div class="relative w-full">
                            <form action="{{ route('filter_menu') }}" class="transition duration-300">
                                <select name="category" onchange="submit()"
                                    class="lg:hidden py-2.5 px-0 w-full text-white text-xs bg-transparent border-0 border-b-2 border-gray-200 appearance-none transition duration-300 focus:outline-none focus:ring-0 focus:border-[#ff8400] peer ">
                                    <option class="bg-[#1D1D1D] text-center text-xs" value="all">All</option>
                                    @if($category == 'main_course')
                                    <option class="bg-[#1D1D1D] text-center text-xs" selected value="main_course">Main
                                        Course
                                    </option>
                                    @else
                                    <option class="bg-[#1D1D1D] text-center text-xs" value="main_course">Main Course
                                    </option>
                                    @endif
                                    @if($category == 'side_dish')
                                    <option class="bg-[#1D1D1D] text-center text-xs" selected value="side_dish">Side
                                        Course
                                    </option>
                                    @else
                                    <option class="bg-[#1D1D1D] text-center text-xs" value="side_dish">Side Course
                                    </option>
                                    @endif
                                    @if($category == 'extra')
                                    <option class="bg-[#1D1D1D] text-center text-xs" selected value="extra">Drinks
                                    </option>
                                    @else
                                    <option class="bg-[#1D1D1D] text-center text-xs" value="extra">Extra</option>
                                    @endif
                                </select>
                                <div
                                    class="lg:hidden pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-[#ff8400]">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path d="M7 10l5 5 5-5H7z" />
                                    </svg>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if(Session()->has('admin'))
                    <div class="flex justify-center mt-3">
                        <a href="/addmenu"
                            class="z-0 font-balo hover:scale-105 transition duration-500 lg:text-lg text-xs hover:text-[#F29A4B] focus:scale-90 no-underline text-white px-[30px] py-[6px] font-bold">Edit
                            Menu</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="flex justify-center lg:mb-0">
            <div class="lg:flex hidden justify-start relative w-1/12 h-auto items-center">
                <div class="sticky rounded-r-full w-full h-full">
                    <form action="{{ route('filter_menu') }}" class="text-white mt-5 grid grid-rows-4 gap-10">
                        @csrf
                        @if($category == 'all')
                        <div
                            class="bg-[#ff8400] scale-125 transition duration-300 rounded-r-full h-[100px] flex items-center justify-center">
                            @else
                            <div
                                class="bg-[#A06235] hover:scale-110 hover:origin-left transition duration-300 rounded-r-full h-[100px] flex items-center justify-center">
                                @endif
                                <button type="submit" class="transition duration-300" name="category" value="all"><img
                                        src="./images/all.png" class="w-[150px]" alt=""></button>
                            </div>
                            @if($category == 'main_course')
                            <div
                                class="bg-[#ff8400] scale-125 transition duration-300 rounded-r-full h-[100px] flex items-center justify-center">
                                @else
                                <div
                                    class="bg-[#A06235] hover:scale-110 hover:origin-left transition duration-300 rounded-r-full h-[100px] flex justify-center items-center">
                                    @endif
                                    <button type="submit" class="transition duration-300" name="category"
                                        value="main_course"><img src="./images/main.png" class="w-[80px]"
                                            alt=""></button>
                                </div>
                                @if($category == 'side_dish')
                                <div
                                    class="bg-[#ff8400] scale-125 transition duration-300 rounded-r-full h-[100px] flex items-center justify-center">
                                    @else
                                    <div
                                        class="bg-[#A06235] hover:scale-110 hover:origin-left transition duration-300 rounded-r-full h-[100px] flex items-center justify-center">
                                        @endif
                                        <button type="submit" class="transition duration-300" name="category"
                                            value="side_dish"><img src="./images/side.png" class="w-[120px]"
                                                alt=""></button>
                                    </div>
                                    @if($category == 'extra')
                                    <div
                                        class="bg-[#ff8400] scale-125 transition duration-300 rounded-r-full h-[100px] flex items-center justify-center">
                                        @else
                                        <div
                                            class="bg-[#A06235] hover:scale-110 hover:origin-left transition duration-300 rounded-r-full h-[100px] flex items-center justify-center">
                                            @endif
                                            <button type="submit" class="transition duration-300" name="category"
                                                value="extra"><img src="./images/extra.png" class="w-[80px] "
                                                    alt=""></button>
                                        </div>
                    </form>
                </div>
            </div>

            <div class="text-white flex flex-wrap justify-center w-10/12 lg:gap-10 gap-3">
                @foreach($menu as $obj)
                @if($obj->category != 'extra')
                <div class="bg-[#1D1D1D] bg-opacity-80 z-1 rounded-2xl hover:bg-[#A06235] hover:bg-opacity-70 transition duration-300 lg:w-[350px] lg:h-[450px] w-[150px] h-[200px] shadow-2xl"
                    id="{{$obj->id}}">
                    @if(Session()->has('admin'))
                    @if($obj->id != 1)
                    <form action="{{ route('delete_menu') }}" type="post"
                        class="absolute text-right lg:w-[330px] w-[140px] lg:mt-3">
                        <input class="hidden" type="text" name="id" value="{{ $obj->id }}" />
                        <input type="submit" value="×"
                            class="font-bold text-red-500 no-underline hover:scale-150 transition duration-300 cursor-pointer z-10 lg:text-3xl">
                    </form>
                    @endif
                    @endif
                    <div class="w-full flex justify-center h-full items-center">
                        <div class="lg:w-3/4 w-full h-full">
                            <div class="flex justify-center lg:h-2/3 h-[100px]">
                                <img class="object-contain h-full" src="/images/menu/{{$obj->image}}" alt="">
                            </div>
                            <div class="flex justify-center">
                                <div class="grid lg:grid-cols-3 grid-cols-2 grid-flow-row lg:w-full w-3/4">
                                    <div class="grid grid-rows-2 lg:col-span-2 gap-2 items-center">
                                        <p class="lg:text-2xl text-sm lg:col-span-2 font-archivobold">
                                            {{$obj->menu_name}}
                                        </p>
                                        <p class="lg:text-lg text-[9.5px] font-worksans">Rp {{$obj->price}}</p>
                                    </div>
                                    <form action="{{ route('addtocart')}}"
                                        class="text-white w-full grid grid-rows-2 gap-2" method="post">
                                        @csrf
                                        <input class="hidden" type="text" name="id" value="{{ $obj->id }}" />
                                        <div class="flex justify-end items-center">
                                            <button type="button" data-action="decrement"
                                                class="flex justify-center items-center bg-transparent text-[#ff8400] hover:text-[#F29A4B] lg:h-full w-[15px] h-[20px] cursor-pointer outline-none border-[1px] border-[#ff8400] rounded-l-full">
                                                <span class="lg:text-lg text-xs font-thin hover:scale-110">−</span>
                                            </button>
                                            <input type="number"
                                                class="focus:outline-none text-center lg:w-1/2 w-[20px] lg:h-full h-[20px] bg-transparent font-semibold lg:text-lg text-xs hover:text-[#F29A4B] md:text-base cursor-default flex items-center text-[#ff8400] outline-none border-[1px] border-[#ff8400]"
                                                name="quantity" value="0" min="1" max="10">
                                            </input>
                                            <button type="button" data-action="increment"
                                                class="flex justify-center items-center bg-transparent text-[#ff8400] hover:text-[#F29A4B] lg:h-full w-[15px] h-[20px] cursor-pointer outline-none border-[1px] border-[#ff8400] rounded-r-full">
                                                <span class="lg:text-lg text-xs font-thin">+</span>
                                            </button>
                                        </div>
                                        <div class="flex justify-end">
                                            <input type="submit" value="Add"
                                                class="bg-[#ff8400] lg:px-3 px-2 lg:h-full h-[24px] w-5/6 lg:text-lg text-xs cursor-pointer rounded-xl hover:scale-105 focus:scale-75 transition duration-500">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif($category == 'extra')
                <div class="bg-[#1D1D1D] bg-opacity-80 z-1 rounded-2xl hover:bg-[#A06235] hover:bg-opacity-70 transition duration-300 lg:w-[350px] lg:h-[450px] w-[150px] h-[200px] shadow-2xl"
                    id="{{$obj->id}}">
                    @if(Session()->has('admin'))
                    @if($obj->id != 1)
                    <form action="{{ route('delete_menu') }}" type="post"
                        class="absolute text-right lg:w-[330px] w-[140px] lg:mt-3">
                        <input class="hidden" type="text" name="id" value="{{ $obj->id }}" />
                        <input type="submit" value="×"
                            class="font-bold text-red-500 no-underline hover:scale-110 cursor-pointer z-10 lg:text-3xl">
                    </form>
                    @endif
                    @endif
                    <div class="w-full flex justify-center h-full items-center">
                        <div class="lg:w-3/4 w-full h-full">
                            <div class="flex justify-center lg:h-2/3 h-[100px]">
                                <img class="object-contain h-full" src="/images/menu/{{$obj->image}}" alt="">
                            </div>
                            <div class="flex justify-center">
                                <div class="grid lg:grid-cols-3 grid-cols-2 grid-flow-row lg:w-full w-3/4">
                                    <div class="grid grid-rows-2 lg:col-span-2 gap-2 items-center">
                                        <p class="lg:text-2xl text-sm lg:col-span-2 font-archivobold">
                                            {{$obj->menu_name}}
                                        </p>
                                        <p class="lg:text-lg text-[9.5px] font-worksans">Rp {{$obj->price}}</p>
                                    </div>
                                    <form action="{{ route('addtocart')}}"
                                        class="text-white w-full grid grid-rows-2 gap-2" method="post">
                                        @csrf
                                        <input class="hidden" type="text" name="id" value="{{ $obj->id }}" />
                                        <div class="flex justify-end items-center">
                                            <button type="button" data-action="decrement"
                                                class="flex justify-center items-center bg-transparent text-[#ff8400] hover:text-[#F29A4B] lg:h-full w-[15px] h-[20px] cursor-pointer outline-none border-[1px] border-[#ff8400] rounded-l-full">
                                                <span class="lg:text-lg text-xs font-thin hover:scale-110">−</span>
                                            </button>
                                            <input type="number"
                                                class="focus:outline-none text-center lg:w-1/2 w-[20px] lg:h-full h-[20px] bg-transparent font-semibold lg:text-lg text-xs hover:text-[#F29A4B] md:text-base cursor-default flex items-center text-[#ff8400] outline-none border-[1px] border-[#ff8400]"
                                                name="quantity" value="0" min="1" max="10">
                                            </input>
                                            <button type="button" data-action="increment"
                                                class="flex justify-center items-center bg-transparent text-[#ff8400] hover:text-[#F29A4B] lg:h-full w-[15px] h-[20px] cursor-pointer outline-none border-[1px] border-[#ff8400] rounded-r-full">
                                                <span class="lg:text-lg text-xs font-thin">+</span>
                                            </button>
                                        </div>
                                        <div class="flex justify-end">
                                            <input type="submit" value="Add"
                                                class="bg-[#ff8400] lg:px-3 px-2 lg:h-full h-[24px] w-5/6 lg:text-lg text-xs cursor-pointer rounded-xl hover:scale-105 focus:scale-75 transition duration-500">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="lg:w-1/12"></div>
        </div>
    </div>
    <div class="fixed bottom-10 right-10 z-50">
        <a href="/cart"
            class="flex hover:scale-110 transition duration-300 items-center rounded-full bg-[#ff8400] w-[80px] h-[80px]"><img
                src="./images/cart.png" class="w-[75px]" alt=""></a>
    </div>
    @include('footer')

    <style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .custom-number-input input:focus {
        outline: none !important;
    }

    .custom-number-input button:focus {
        outline: none !important;
    }
    </style>

    <script>
    function decrement(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        if (value != 0) {
            value--;
            target.value = value;
        }
    }

    function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
    }

    const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
    });
    </script>
</body>

</html>