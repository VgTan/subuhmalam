<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    <title></title>
</head>

<body class="overflow-x-hidden bg-[url('./images/bg.jpg')] bg-contain" style="background-image: url('./images/bg.jpg')">
    <header class="fixed flex items-center align-middle z-50 top-7 w-screen justify-center text-lg text-white">
        <div class="w-1/3 text-center z-50">
            <p class="text-xl font-bold hover:text-[#FFBB5C] transition duration-300 cursor-pointer">SubuhMalam</p>
        </div>
        <div class="w-2/3 flex justify-center gap-[90px] items-center">
            <a href="/" class="no-underline z-50 text-white hover:text-[#FFBB5C] transition duration-300 ">Home</a>
            <a href="/aboutus" class="no-underline z-50 text-white hover:text-[#FFBB5C] transition duration-300 ">About
                Us</a>
            <a href="/menu" class="no-underline z-50 text-white hover:text-[#FFBB5C] transition duration-300 ">Menu</a>
            @if(!Session()->has('loginId'))
            <a href="/login"
                class="hover:scale-105 transition duration-500 no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Login</a>
            @endif
            @if(Session()->has('loginId'))
            <a href="/logout"
                class="hover:scale-105 transition duration-500 no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Logout</a>
            @endif
            @if(Session()->has('admin'))
            <a href="/edit"
                class="hover:scale-105 transition duration-500 no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Edit
                Menu</a>
            @endif

        </div>
    </header>
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

                            <select name="category" class="text-black rounded-md md:pl-3 pl-1 md:h-[40px] h-[10px] py-2 md:text-lg text-[7px] w-full mt-5" id="">
                                <option selected value="">Category</option>
                                <option value="main_course">Main Course</option>
                                <option value="side_dish">Side Dish</option>
                                <option value="extra">Extra</option>
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
                                    class="hover:scale-105 transition duration-300 border-[3px] border-white h-[250px] w-[150px] md:h-[700px] md:w-[530px] rounded-b-[25px] lg:pt-9 p-auto">
                                    @if(isset($menu))
                                    <div class="h-full w-full">
                                        <div class="flex justify-center h-3/4">
                                            <img class="" src="images/menu/{{$menu->image}}" alt="">
                                        </div>
                                        <!-- <div class="text-center text-white flex items-center h-1/4">
                                            <div class="w-full">
                                                <p class="lg:text-4xl text-lg">{{$menu->menu_name}}</p>
                                                <p class="lg:text-lg text-sm">Rp {{$menu->price}}</p>
                                            </div>
                                        </div> -->
                                        <div class="flex justify-center">
                                            <div class="m-5 text text-white flex justify-between items-center w-11/12">
                                                <p class="lg:text-4xl text-lg col-span-2">{{$menu->menu_name}}</p>
                                                <p class="lg:text-lg text-sm">Rp {{$menu->price}}</p>
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
    <footer class="h-[500px]">
        <div class="text-white">
            <p>awdwaijdawjdiajdiadjapkdaiw</p>
        </div>
    </footer>
</body>

</html>