    
    <header
        class="fixed flex items-center align-middle z-50 top-7 w-screen justify-center text-lg text-white m-0 p-0 lg:h-[70px]">
        <div class="flex items-center justify-center z-50 w-1/3">
            <img src="./images/logo.png" class="w-1/3" alt="">
        </div>
        <div class="w-2/3 flex justify-center gap-[90px] items-center">
            <a href="/"
                class="text-xl font-belleza no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110 transition duration-300 ">Home</a>
            <a href="/aboutus"
                class="text-xl font-belleza no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110  transition duration-300 ">About
                Us</a>
            <a href="/menu"
                class="text-xl font-belleza no-underline z-50 text-white hover:text-[#FFBB5C] hover:scale-110  transition duration-300 ">Menu</a>
            @if(!Session()->has('loginId'))
            <a href="/login"
                class="hover:scale-105 font-belleza transition duration-500 text-xl no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Login</a>
            @endif
            @if(Session()->has('admin'))
            <a href="/dashboard"
                class="hover:scale-105 font-belleza transition duration-500 text-xl no-underline z-50 text-white bg-[#1D1D1D] hover:bg-[#212121] px-[30px] py-[6px] rounded-2xl font-bold">Dashboard</a>
            @endif
            @if(Session()->has('loginId'))
            <a href="/logout"
                class="hover:scale-105 font-belleza transition duration-500 text-xl no-underline z-50 text-white bg-[#ff8400] hover:bg-[#ff9500] px-[30px] py-[6px] rounded-2xl font-bold">Logout</a>
            @endif
        </div>
    </header>