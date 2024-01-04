<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</head>
<body class="bg-primary text-white">
    <header id="header" class="relative z-50 flex w-full justify-between backdrop-blur-2xl p-4">
        <h1 class="font-cursive text-xl text-white">Schedulify</h1>
        <nav id="menu" class="absolute bg-primary z-50 w-full left-0 top-16 h-0 transition-all duration-300 overflow-hidden
                            md:flex md:w-fit md:h-fit md:relative md:top-0 md:bg-transparent">
            <ul class="flex flex-col gap-8 z-50 translate-x-1/2 translate-y-1/2
                        md:flex-row md:translate-x-0 md:translate-y-0">
                <li class="list">Home</li>
                <li class="list">About</li>
                <li class="list">Feature</li>
                <li class="list">Contact</li>
            </ul>
        </nav>

        <div class="flex gap-4">
            <button id="btn" class="outline-1 outline-white outline rounded-md p-2 flex flex-col gap-2 justify-center items-center
                                    md:hidden">
                <span class="w-6 h-[1px] bg-white"></span>
                <span class="w-6 h-[1px] bg-white"></span>
                <span class="w-6 h-[1px] bg-white"></span>
            </button>
            <a href="/register" class="outline-1 outline-white outline rounded-md p-1">Sign Up</a>
            <a href="{{route('ls')}}" class="outline-1 bg-white text-black outline rounded-md py-1 px-3">Login</a>
        </div>
    </header>
    <section>
        <img src="{{asset('assets/images/background.png')}}" class="absolute w-1/2 h-auto right-0 -z-10" alt="">
        <div class="container bg-primary/25 backdrop-blur-3xl w-full h-screen flex justify-center items-center">
            <div class="content-left w-1/2 flex flex-col items-start px-32 gap-6">
                <div class="text">
                    <h1 class="text-3xl"><span class="text-4xl">Schedulify</span> <br>
                        makes your <span class="auto-type"></span> organized </h1>
                    <p class="text-white/70">Keep your task which want to be reminded when the deadline is on</p>
                </div>

                <div class="flex gap-4">
                    <a href="" class="py-1 px-2 rounded-md flex bg-ternary items-center gap-3">Learn more <img src="{{ asset('assets/icons/down-arrow.png') }}" alt="" srcset="" class="w-4 h-4 animate-bounce"></a>
                    <a href="" class="py-1 px-2 rounded-md border border-white">Register</a>
                </div>
            </div>
            <div class="content-right relative w-1/2  h-full hidden md:block">
                    <div data-aos="fade-down"><img class="scale-[0.60] mt-0 absolute -top-36" src="{{asset('assets/images/mockups.png')}}" alt=""></div>
                    <div data-aos="fade-down"><img class="scale-[0.60] mt-0 absolute -right-24" src="{{asset('assets/images/mockups.png')}}" alt=""></div>
                    <div data-aos="fade-down"><img class="scale-[0.60] mt-0 absolute -bottom-10" src="{{asset('assets/images/mockups.png')}}" alt=""></div>
            </div>
        </div>
    </section>
    <section id="sec2" class="w-full h-screen">
        <div class="pembungkus flex">
            <img src="{{ asset('assets/images/notes.png') }}" alt="" srcset="" class="w-1/2 h-1/2">
            <div class="items-center flex">
                <p class="w-3/4">
                    Schedulify merupakan aplikasi sederhana berbasis web yang dirancang untuk membantu pengguna dapat mengatur kehidupan sehari-harinya dengan lebih efisien.

                    Dalam aplikasi website ini, Anda dapat membuat schedule jadwal, progress dari jadwalnya, dan evaluasi setiap bulannya.

                    Fitur unik yang paling diunggulkan di aplikasi Schedulify adalah kemampuannya untuk melacak kemajuan yang telah Anda capai dalam menyelesaikan tugas-tugas tersebut.

                    Di aplikasi Schedulify kita menyuguhkan dua kategori yaitu kategori inidividual dan kategori project.
                </p>
            </div>
        </div>
    </section>

    <a href="#sec2" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-ternary/50 border border-ternary rounded-full p-2 animate-bounce">
        <img src="{{ asset('assets/icons/arrow.png') }}" alt="Arrow" class="w-auto h-auto rotate-180 scale-x-[-1] filter invert">
      </a>
<script>
    var typed = new Typed('.auto-type', {
    strings: ["plans", "projects", "tasks"],
    typeSpeed: 150,
    backSpeed: 150,
    loop: true
  });

  const btn = document.getElementById("btn");
  btn.addEventListener("click", function() {
    const menu = document.getElementById("menu");
    menu.classList.toggle("h-0");
    menu.classList.toggle("h-screen");
  });
  </script>
</body>
</html>
