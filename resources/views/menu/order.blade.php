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
    <div class="w-screen mt-[200px] flex justify-center items-center">
        <div class="flex flex-wrap items-center w-full justify-center">
            <div class="w-1/2">
                @if($order->isEmpty())
                <div class="text-white font-worksans text-center text-3xl">
                    <p>No Order</p>
                </div>
                @else
                <div class="text-white text-center text-4xl">
                    <p>Orders</p>
                </div>


                @foreach($order as $obj)
                @if($obj->status != 'Done')
                <div
                    class="text-black bg-white w-full mt-5 grid grid-cols-1 justify-center items-center pt-5 pb-10 rounded-2xl">
                    <div class="w-full grid h-5/6">
                        <div class="w-full">
                            <div class="flex justify-center text-sm">
                                <p>{{ $obj->created_at }}</p>
                            </div>
                            <div class="flex justify-center text-xl">
                                <p>{{ $obj->status }}</p>
                            </div>
                        </div>
                        @foreach($detail->groupBy('order_id') as $id => $items)
                        @if($id == $obj->id)
                        @foreach($items as $item)
                        <div class="flex justify-center">
                            <div class="grid grid-cols-2 w-full text-center">
                                <p class="text-xl">{{ $item->item }}</p>
                                <p class="text-xl">{{ $item->qty }}</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @endforeach
                    </div>
                </div>
                @endif
                @endforeach


                <div class="text-white text-center text-4xl mt-5">
                    <p>History</p>
                </div>

                @foreach($order as $obj)
                @if($obj->status == 'Done')
                <div
                    class="text-black bg-white w-full mt-5 grid grid-cols-1 justify-center items-center pt-5 pb-10 rounded-2xl">
                    <div class="w-full grid h-5/6">
                        <div class="w-full">
                            <div class="flex justify-center text-sm">
                                <p>{{ $obj->created_at }}</p>
                            </div>
                            <div class="flex justify-center text-xl">
                                <p>{{ $obj->status }}</p>
                            </div>
                        </div>
                        @foreach($detail->groupBy('order_id') as $id => $items)
                        @if($id == $obj->id)
                        @foreach($items as $item)
                        <div class="flex justify-center">
                            <div class="grid grid-cols-2 w-full text-center">
                                <p class="text-xl">{{ $item->item }}</p>
                                <p class="text-xl">{{ $item->qty }}</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        @endforeach
                    </div>
                </div>
                @endif
                @endforeach
                @endif
                <div class="text-center flex justify-center mt-10">
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