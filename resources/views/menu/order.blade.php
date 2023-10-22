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
            <div class="w-1/4">
                @if($order->isEmpty())
                <div class="text-white font-worksans text-center text-3xl">
                    <p>No Order</p>
                </div>
                @else
                <div class="text-white text-center text-4xl">
                    <p>Orders</p>
                </div>

                @foreach($detail->groupBy('order_id') as $id => $items)
                @foreach($order as $obj)
                @foreach($items as $item)
                @if($id == $obj->id)
                @if($obj->status != 'Done')
                <div
                    class="text-black bg-white w-full mt-5 grid grid-cols-1 justify-center items-center h-[200px] rounded-2xl">
                    <div class="w-full flex justify-between">
                        <div class="flex justify-center items-center w-1/2">
                            <p>{{ $obj->status }}</p>
                        </div>
                        <div class="flex justify-center items-center w-1/2">
                            <p>{{ $item->qty }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endif
                @endforeach
                @endforeach
                @endforeach

                <div class="text-white text-center text-4xl">
                    <p>History</p>
                </div>

                @foreach($detail->groupBy('order_id') as $id => $items)
                @foreach($order as $obj)
                @foreach($items as $item)
                @if($id == $obj->id)
                @if($obj->status == 'Done')
                <div
                    class="text-black bg-white w-full mt-5 grid grid-cols-1 justify-center items-center h-[200px] rounded-2xl">
                    <div class="w-full flex justify-between">
                        <div class="flex justify-center items-center w-1/2">
                            <p>{{ $obj->status }}</p>
                        </div>
                        <div class="flex justify-center items-center w-1/2">
                            <p>{{ $item->qty }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endif
                @endforeach
                @endforeach
                @endforeach
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