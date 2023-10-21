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
        <div class="w-4/5 grid grid-rows-auto lg:gap-[100px] gap-[50px]">
            <form action="{{route('addMenu')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="text-black">
                    <div class="grid lg:grid-cols-2 grid-rows-2 md:gap-3">
                        <div class="w-full">
                            <div class="mb-[60px] text-center">
                                <p class="text-[#ff8400] text-5xl">ADD NEW MENU</p>
                            </div>
                            <input
                                class="text-black rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] w-full"
                                type="text" placeholder="Menu Name" name="menu_name" value="">
                            <p class="text-danger absolute text-sm text-red-600">@error('menu_name') {{$message}}
                                @enderror
                            </p>

                            <select name="category"
                                class="text-black rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] w-full mt-5"
                                id="">
                                <option selected value="">Category</option>
                                <option value="main_course">Main Course</option>
                                <option value="side_dish">Side Dish</option>
                                <option value="extra">Drink</option>
                            </select>
                            <p class="text-danger absolute text-sm text-red-600">@error('category') {{$message}}
                                @enderror
                            </p>
                            <!-- <input
                                class="text-black rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] w-full mt-5"
                                type="text" placeholder="Category" name="category" value="">
                            <p class="text-danger absolute text-sm text-red-600">@error('category') {{$message}}
                                @enderror
                            </p> -->

                            <textarea
                                class="rounded-md md:pl-3 pl-1 md:h-[40px] min-h-[100px] max-h-[300px] py-2 md:text-lg text-[7px] mt-5 w-full"
                                type="text" name="desc" placeholder="Description" value=""></textarea>
                            <p class="text-danger absolute text-sm text-red-600">@error('Description') {{$message}}
                                @enderror
                            </p>
                            <input
                                class="text-black rounded-md mt-5 md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] w-full"
                                type="number" placeholder="Price" name="price" value="">
                            <p class="text-danger absolute text-sm text-red-600">@error('price') {{$message}}
                                @enderror
                            </p>
                            <input
                                class="text-gray-100 mt-5 relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-[#ff8400] bg-clip-padding px-3 py-[0.32rem] hover:file:scale-105 text-base font-normal transition duration-500 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-[#ff8400] file:px-3 file:py-[0.32rem] file:text-gray-100 file:transition file:duration-500 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-[#ff9502] hover:file:cursor-pointer focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary hover:cursor-pointer"
                                type="file" name="menu_image" accept=".jpg, .jpeg, .png" value="" multiple />
                            <div class="flex justify-center">
                                <button
                                    class="bg-[#ff8400] text-white px-[50px] py-[8px] rounded-md mt-2 hover:scale-105 hover:bg-[#ff9500] transition duration-500 focus:scale-90"
                                    type="submit">Submit</button>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="">
                                <div
                                    class="bg-[#1D1D1D] bg-opacity-80 z-1 rounded-2xl hover:bg-[#A06235] hover:bg-opacity-70 transition duration-300 w-[350px] h-[450px] shadow-2xl">
                                    @if(isset($menu))

                                    <div class="w-full flex justify-center h-full items-center">
                                        <div class="w-3/4 h-full">
                                            <div class="flex justify-center h-2/3">
                                                <img class="object-contain h-full" src="/images/menu/{{$menu->image}}"
                                                    alt="">
                                            </div>
                                            <div class="grid grid-cols-3 grid-flow-row text-white">
                                                <div class="grid grid-rows-2 col-span-2 gap-2 items-center">
                                                    <p class="text-2xl col-span-2 font-archivobold">
                                                        {{$menu->menu_name}}</p>
                                                    <p class="lg:text-lg text-sm font-worksans">Rp {{$menu->price}}
                                                    </p>
                                                </div>
                                                <!-- <p class="lg:text-lg text-sm col-span-3">{{$menu->desc}}</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    </div>
    @include('footer')
</body>

</html>