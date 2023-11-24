<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="max-w-full max-h-full font-['Inter']">
    <!-- Header -->
<div class="w-[1440px] h-[78px] bg-[#1A202B] flex items-center relative">
    <img
      src="{{asset('assets/icons/Schedulify.svg')}}"
      alt=""
      class="w-103px h-[42px] pt-[15px] pl-[113px] cursor-pointer"
    />
    <h1 class="text-white pl-[177px] pt-[1px] text-[20px]">Personal</h1>
    <div class="flex ml-auto mr-10">
        <img
          src="{{asset('assets/icons/notifications_FILL0_wght400_GRAD0_opsz24 2.svg')}}"
          alt=""
          class="w-[24px] h-[24px] mt-[10px] mr-[10px] cursor-pointer"
        />
        <img
          src="{{asset('assets/icons/user icon.svg')}}"
          alt=""
          class="w-[50px] h-[50px] mt-[1px] cursor-pointer"
        />
      </div>
    </div>
    <div class="flex">
