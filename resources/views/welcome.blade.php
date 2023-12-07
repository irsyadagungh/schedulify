<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-primary text-white">
    <header id="header" class="flex w-full justify-between backdrop-blur-2xl p-4">
        <h1 class="font-cursive text-xl text-white">Schedulify</h1>
        <nav>
            <ul class="flex gap-8">
                <li>Home</li>
                <li>Feature</li>
                <li>Contact</li>
            </ul>
        </nav>

        <div>
            <a href="/login" class="mx-3">Sign In</a>
            <a href="/register" class="outline-1 outline-white outline rounded-md p-1">Sign Up</a>
        </div>
    </header>
    <section>
        <img src="{{asset('assets/images/background.png')}}" class="absolute w-1/2 h-auto right-0 -z-10" alt="">
        <div class="container bg-primary/25 backdrop-blur-3xl w-full h-screen flex justify-center items-center">
            <div class="content-left w-1/2 flex flex-col justify-center items-center">
                <div class="text">
                    <h1 class="text-3xl">Schedulify makes your plans organized</h1>
                    <p class="text-white/70">Keep your task which want to be reminded when the deadline is on</p>
                </div>
            </div>
            <div class="content-right relative w-1/2  h-full">
                    <div data-aos="fade-down"><img class="scale-[0.60] mt-0 absolute -top-36" src="{{asset('assets/images/mockups.png')}}" alt=""></div>
                    <div data-aos="fade-down"><img class="scale-[0.60] mt-0 absolute -right-24" src="{{asset('assets/images/mockups.png')}}" alt=""></div>
                    <div data-aos="fade-down"><img class="scale-[0.60] mt-0 absolute -bottom-32" src="{{asset('assets/images/mockups.png')}}" alt=""></div>
            </div>
        </div>
    </section>
    <section class="w-full h-screen">

    </section>
<script>
    AOS.init();
  </script>
</body>
</html>