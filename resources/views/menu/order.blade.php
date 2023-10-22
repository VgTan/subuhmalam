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
    <div class="w-screen lg:pt-[200px] pt-[130px] flex justify-center items-center">
        <div class="flex flex-wrap items-center w-full justify-center">
            <div class="w-1/2">
                @if($order->isEmpty())
                <div class="mt-[200px]">
                    <div class="text-white font-worksans text-center text-3xl">
                        <p>No Order</p>
                    </div>
                </div>
                @else

                <div class="text-white text-center lg:text-4xl text-2xl">
                    <p>Orders</p>
                </div>
                @foreach($order as $obj)
                @if($obj->status != 'Done')
                <div class="text-black w-full mt-5 grid grid-cols-1 justify-center items-center">
                    <div class="w-full grid h-5/6">
                        <div class="w-full bg-orange-500 py-2 rounded-t-2xl">
                            <div class="flex justify-center lg:text-xl text-lg">
                                <p>{{ $obj->status }}</p>
                            </div>
                            <div class="flex justify-center lg:text-sm text-xs">
                                <p>{{ $obj->created_at }}</p>
                            </div>
                        </div>
                        @foreach($detail->groupBy('order_id') as $id => $items)
                        @if($id == $obj->id)
                        <div class="text-center bg-white pb-2 rounded-b-2xl">
                            @foreach($items as $item)
                            <div class="grid grid-cols-2 w-full text-center pt-2">
                                <p class="lg:text-xl text-md">{{ $item->item }}</p>
                                <p class="lg:text-xl text-md">{{ $item->qty }}</p>
                            </div>
                            @endforeach
                        </div>

                        @endif
                        @endforeach
                    </div>
                </div>
                @endif
                @endforeach


                <div class="text-white text-center lg:text-4xl text-2xl mt-10">
                    <p>History</p>
                </div>

                @foreach($order as $obj)
                @if($obj->status == 'Done')
                <div class="text-black w-full mt-5 grid grid-cols-1 justify-center items-center">
                    <div class="w-full grid h-5/6">
                        <div class="w-full bg-green-500 py-2 rounded-t-2xl">
                            <div class="flex justify-center lg:text-xl text-lg">
                                <p>{{ $obj->status }}</p>
                            </div>
                            <div class="flex justify-center lg:text-sm text-xs">
                                <p>{{ $obj->created_at }}</p>
                            </div>
                        </div>
                        @foreach($detail->groupBy('order_id') as $id => $items)
                        @if($id == $obj->id)
                        <div class="text-center bg-white pb-2 rounded-b-2xl">
                            @foreach($items as $item)
                            <div class="grid grid-cols-2 w-full text-center pt-2">
                                <p class="lg:text-xl text-md">{{ $item->item }}</p>
                                <p class="lg:text-xl text-md">{{ $item->qty }}</p>
                            </div>
                            @endforeach
                        </div>
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
    <div class="h-full bottom-0 w-full p-0 m-0">
        @include('footer')
    </div>
</body>

</html>