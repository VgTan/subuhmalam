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
        </div>
    </div>
    @include('footer')
</body>

</html>