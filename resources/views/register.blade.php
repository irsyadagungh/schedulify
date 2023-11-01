<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-primary text-white h-[100vh]">
    <header class="p-4">
        <a href="/" class="font-cursive text-xl hidden
        lg:block">Schedulify</a>
    </header>
    <div class="container w-full flex items-center justify-center">
        <div class="reg-session w-full flex justify-center h-full
        lg:w-1/3">
            <div class="content flex flex-col justify-center mt-28
            lg:mt-0">
                <h1 class="text-2xl">Welcome to <span class="font-cursive">Schedulify</span></h1>
                <p class="text-gray mb-10 opacity-50">Schedulify bisa mengatur jadawal kamu</p>
                <form action="" class="flex flex-col gap-1">
                    <label for="">Name :</label>
                    <input type="text" class="rounded-md w-full p-1 bg-[#fff0] outline outline-white outline-1"><br>
                    <label for="">Username :</label>
                    <input type="text" class="rounded-md w-full p-1 bg-[#fff0] outline outline-white outline-1"><br>
                    <label for="">Email :</label>
                    <input type="text" class="rounded-md w-full p-1 bg-[#fff0] outline outline-white outline-1"><br>
                    <label for="">Password :</label>
                    <input type="text" class="rounded-md w-full p-1 bg-[#fff0] outline outline-white outline-1">
                    <div class="w-full flex justify-start mb-10">
                        <input class="mr-4" type="checkbox" name="" id="">
                        <p>Remember me</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <button class="outline outline-1 bg-white text-primary rounded-md py-1">Sign Up</button>
                        <p>Already have an account? <a href="" class="text-blue">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="pics w-2/3 hidden items-end lg:flex ">
            <img src="{{asset('assets/images/loginPics.png')}}" class="list-image-loginPic w-[90%]" alt="">
        </div>
    </div>
</body>
</html>