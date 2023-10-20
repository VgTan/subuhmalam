<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title></title>
</head>

<body class="overflow-x-hidden bg-contain" style="background-image: url('./images/bg.jpg')">
    @include('header')
    <div class="mt-[130px] pt-[50px] pb-[50px] grid grid-rows-auto justify-center ">
        <div class="">
            @foreach($cart as $obj)
            <div class="text-white">
                <p>{{ $obj->name }}</p>
                <p>{{ $obj->price }}</p>
                <p>{{ $obj->quantity }}</p>
                <form action="{{ route('delete_cart') }}" type="post">
                    <input class="hidden" type="text" name="id" value="{{ $obj->id }}" />
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