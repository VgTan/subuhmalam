<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title></title>
</head>

<body class="overflow-x-hidden bg-[url('./images/bg.jpg')] bg-contain" style="background-image: url('./images/bg.jpg')">
    @include('header')
    <div class="w-screen h-screen mt-[300px] flex justify-center">
        <div class="">
            <a href="/addmenu">Add New Menu</a>
            <a href="/menu">Delete Menu</a>
            <a href="{{ route('check') }}">Check Orders</a>
        </div>
    </div>
    @include('footer')
</body>

</html>