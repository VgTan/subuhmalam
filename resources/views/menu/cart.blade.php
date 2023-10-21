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

    <div class="w-screen h-screen flex justify-center items-center">
        <div class="flex items-center w-full justify-center">
            <div class="w-11/12">
                @if($cart->isEmpty())
                <div class="text-white font-worksans text-center text-3xl">
                    <p>Your Cart is Empty</p>
                </div>
                @else
                <?php $total = 0 ?>
                @foreach($cart as $obj)
                <div
                    class="text-black bg-white w-full mt-5 grid grid-cols-6 justify-center items-center h-[80px] rounded-2xl">
                    <div class="text-center col-span-2">
                        <p>{{ $obj->name }}</p>
                    </div>
                    <div class="">
                        <p>{{ $obj->quantity }}</p>
                    </div>
                    <div class="col-span-2">
                        <p>Rp {{ $obj->price }}</p>
                    </div>
                    <form action="{{ route('delete_cart') }}" class="flex">
                        <input class="hidden" type="text" name="id" value="{{ $obj->id }}" />
                        <input type="submit" value="×" class="font-bold text-red-500 no-underline text-xl w-full">
                    </form>
                    <?php $total = $obj->price + $total ?>
                </div>
                @endforeach
                <form action="{{ route('pay') }}"
                    class="text-black bg-white w-full mt-5 grid grid-cols-6 justify-center items-center h-[50px] rounded-2xl">
                    <div class="col-span-3 flex justify-center">
                        <label>Total</label>
                    </div>
                    <div class="flex items-center gap-1">
                        <p>Rp </p>
                        <input type="number" name="total_price" value="{{ $total }}" disabled>
                    </div>
                    <div class="col-span-2 flex justify-center">
                        <button type="submit" href="" class="hover:scale-110 transition duration-300">Check Out</button>
                    </div>
                </form>
                @endif
                <div class="text-center flex justify-center">
                    <div class="hover:text-[#ff8c00] hover:scale-110 w-auto transition duration-300">
                        <a href="/menu" class="no-underline text-[#ff8400] text-xl ">Back to Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>

</html>