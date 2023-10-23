<!DOCTYPE html>
<html class="scroll-smooth transition duration-700">

<head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite("resources/css/app.css")
    
    <title></title>
</head>

<body class="overflow-x-hidden bg-[url('./images/bg.jpg')] bg-contain" style="background-image: url('./images/bg.jpg')">
    @include('header')
    <div class="lg:pt-0 pt-[50px]">
        <div class="topContainer h-full">
            <div class="layer"></div>
            <img src="./images/padang_header.jpg" class="object-cover" alt="">
            <div class="text-overlay pt-[90px]">
                <div class="terbaek-animation">
                    <h1 class="terbaek font-worksans lg:text-6xl text-sm">Padang Terbaek Ado di Siko</h1>
                </div>
            </div>
        </div>
        <h1 class="legacy animate-on-scroll font-charmonman lg:text-6xl text-[20px]">Our Legacy</h1>
        <div class="px-[5%] lg:mt-[70px]">
            <div class="background animate-on-scroll-left-to-right">
                <img src="./images/logo.png" alt="" class="">
                <p class="lg:text-xl text-[10px]">Subuh Malam hadir bagi yang ingin merasakan masakan padang standar international,<br> bintang 5, dan
                    dan michelin star. Kami menggunakan bahan lokal premium, dengan potongan daging yang empuk serta bumbu
                    rempah yang kuat dan aroma yang khas, yang tentunya hanya ada di Subuh Malam. Sejak didirikan pada tahun
                    1957, tiap-tiap generasi kami terus bertumbuh dan berkembang untuk menjadi<br>lebih baik serta berkomitmen
                    dalam melayani setiap customer kami.</p>
            </div>

            <p class="text-white lg:text-6xl text-xl text-center font-lancelot animate-on-scroll">Those Who've Been Here</p>
            <div class="selebritiContainer">
                <div class="card3 overflow-hidden animate-on-scroll2 mb-10" style="width: 15rem;height:20rem;">
                    <img src="./images/ramsay_rendang.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title lg:mt-2 font-worksans lg:text-3xl text-2xl">Gordon Ramsay</p>
                    </div>
                    <p class="card-text font-belleza mt-2 lg:text-base text-sm">"It's very good to eat here, they have a very delicious Rendang, also got a nice outdoor view here."</p>
                </div>
                <div class="card3 overflow-hidden animate-on-scroll3 mb-10" style="width: 15rem;height:20rem;">
                    <img src="./images/trump_rendang.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title lg:mt-2 font-worksans lg:text-3xl text-2xl">Donald Trump</p>
                    </div>
                    <p class="card-text font-belleza mt-2 lg:text-base text-sm">"The best Padang I've ever had. Been thinking to open the franchise in United States."</p>
                </div>
                <div class="card3 overflow-hidden animate-on-scroll4 mb-10" style="width: 15rem;height:20rem;">
                    <img src="./images/chinese_girl.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title lg:mt-2 font-worksans lg:text-3xl text-2xl">Li Fen Chen</p>
                    </div>
                    <p class="card-text font-belleza mt-2 lg:text-base text-sm">"这是我品尝过的最美味的巴东美食。中国的巴东菜, 尤其是我所在的Guǎngzhōu, 并不好吃。"</p>
                </div>
            </div>
        </div>
        <div class="bottomContainer">

        </div>
    </div>
    @include('footer')
    <script>
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll, .animate-on-scroll2, .animate-on-scroll3, .animate-on-scroll4');
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenHeight = window.innerHeight;

                if (elementPosition < screenHeight) {
                    element.classList.add('animated');
                }
            });
        }
        window.addEventListener('load', animateOnScroll);
        window.addEventListener('scroll', animateOnScroll);

        function animateOnScroll2() {
            const elements = document.querySelectorAll('.animate-on-scroll-left-to-right');
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenHeight = window.innerHeight;

                if (elementPosition < screenHeight) {
                    element.classList.add('animated');
                }
            });
        }

        window.addEventListener('load', animateOnScroll2);
        window.addEventListener('scroll', animateOnScroll2);
    </script>

</body>

</html>