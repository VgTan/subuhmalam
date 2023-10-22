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
            <div class="w-1/2">
                @if($order->isEmpty() || $order->every(function($order) { return $order->status == 'Done'; }) == 'Done')
                <div class="text-white font-worksans text-center text-3xl">
                    <p>No Order</p>
                </div>
                @else
                @foreach($detail->groupBy('order_id') as $id => $items)
                @php
                $status = $order->where('id', $id)->first()->status;
                @endphp
                @if($status == 'Working On')
                <div
                    class="text-black bg-white w-full mt-5 grid grid-cols-1 justify-center items-center pt-5 pb-10 rounded-2xl">
                    <div class="text-center justify-center">
                        <div class="w-full">
                            <p class="text-3xl">{{ $id }}</p>
                        </div>
                        <form action="{{ route('change_status') }}" class="flex justify-center items-center">
                            <input type="text" class="hidden" name="order_id" value="{{ $id }}">
                            <select name="status" class="text-xl" onchange="submit()">
                                <option value="{{ $status }}">{{ $status }}</option>
                                <option value="Done">Done</option>
                            </select>
                        </form>
                    </div>
                    <div class="mt-5">
                        <div class="w-full grid grid-cols-2 text">
                            <div class="flex justify-center items-center mb-5">
                                <p class="text-2xl">Items</p>
                            </div>
                            <div class="flex justify-center items-center mb-5">
                                <p class="text-2xl">Quantity</p>
                            </div>
                            @foreach($items as $obj)
                            <div class="flex justify-center items-center">
                                <p class="text-xl">{{ $obj->item }}</p>
                            </div>
                            <div class="flex justify-center items-center">
                                <p class="text-xl">{{ $obj->qty }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endif
                <div class="text-center flex justify-center mt-5">
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