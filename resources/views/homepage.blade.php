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
    @vite('resources/css/app.css')
  </head>

  <body class="max-w-full max-h-full font-['Inter']">
    <!-- Ini Header -->
    <div class="w-[1440px] h-[78px] bg-[#1A202B] flex items-center relative">
      <img
        src="{{asset('assets/icons/Schedulify.svg')}}"
        alt=""
        class="w-103px h-[42px] pt-[15px] pl-[113px] cursor-pointer"
      />
      <h1 class="text-white pl-[177px] pt-[1px] text-[20px]">Home</h1>
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
      <!-- Ini Aside Kiri -->
      <div class="max-h-full w-[334px] bg-[#1A202B] mt-20px relative">
        <div class="text-white ml-4">
          <li
            class="flex w-[300px] h-[55px] hover:bg-black rounded-l-md pl-16 bg-black"
          >
            <img src="{{asset('assets/icons/home_FILL0_wght400_GRAD0_opsz24 1.svg')}}" alt="" />
            <p class="ml-[30px] pt-[17.5px] cursor-pointer">Home</p>
          </li>
          <li
            class="flex w-[300px] h-[55px] mt-[22px] hover:bg-black rounded-l-md pl-16"
          >
            <img src="{{asset('assets/icons/person.svg')}}" alt="" />
            <p class="ml-[30px] pt-[17.5px] cursor-pointer">Personal</p>
          </li>
          <li
            class="flex w-[300px] h-[55px] mt-[22px] hover:bg-black rounded-l-md pl-16"
          >
            <img src="{{asset('assets/icons/groups.svg')}}" alt="" />
            <p class="ml-[30px] pt-[17.5px] cursor-pointer">Project</p>
          </li>
        </div>
      </div>

      <!-- Ini Hero -->
      <div class="h-[1000px] w-full mt-0 bg-black relative">
        <h1 class="text-white pt-[21px] pl-[59px]">My Tasks</h1>
        <div class="flex h-auto">
          <div
            id="tombolAddNote"
            class="bg-[#222228] cursor-pointer mt-20 ml-[59px] h-[208px] w-[231px] flex flex-col justify-center items-center rounded-xl py-8"
          >
            <img
              src="{{asset('assets/icons/add.svg')}}"
              alt=""
              class="h-[70px] w-[70px] cursor-pointer justify-center items-center"
            />
            <p class="text-white mt-2">Personal</p>
          </div>
          <div
            class="bg-[#222228] mt-20 ml-[59px] h-[208px] w-[231px] flex flex-col justify-center items-center rounded-xl"
          >
            <img
              src="{{asset('assets/icons/add.svg')}}"
              alt=""
              class="h-[70px] w-[70px] cursor-pointer"
            />
            <p class="text-white mt-2">Project</p>
          </div>
        </div>
        <hr class="mt-10 mx-10" />

        <h1 class="text-white mt-16 ml-12">New Notes</h1>
        <div class="flex mt-4">
          <h3 class="text-white pl-12">Personal</h3>
          <h3 class="text-white pl-[520px]">Project</h3>
        </div>

        <!-- Ini Modal Add Note -->
        <div
          id="popUpAddNote"
          class="bg-[#222228] w-[400px] h-[500px] mx-auto rounded-lg hidden z-10"
        >
          <div class="flex">
            <h1 class="text-white pl-[32px] pt-[25px]">Judul</h1>
            <img
              id="tombolX"
              src="{{asset('assets/icons/Vector.svg')}}"
              alt=""
              class="pr-[24px] pl-[290px] pt-[25px] cursor-pointer"
            />
          </div>
          <hr class="bg-white w-[400px] h-0.5 mt-[28px]" />
          <!-- <input type="text" class="border border-white" /> -->
          <input
            class="mt-[38px] ml-[10px]"
            type="text"
            placeholder="Deskripsi"
            style="
              margin-top: 15px;
              width: 380px;
              height: 203px;
              color: white;
              font-size: 10px;
              font-family: Inter;
              font-weight: 300;
              word-wrap: break-word;
              background-color: #222228;
              border: 1px solid white;
            "
            value="Deskripsi"
          />
          <div class="flex">
            <p class="pl-[10px] pt-[160px] text-white">Tenggat</p>
            <input
              type="date"
              name=""
              id=""
              class="h-[25px] w-[100px] ml-[20px] mt-[160px] bg-none border rounded-md text-white font-thin"
              style="background-color: black"
            />
            <div class="flex">
              <p class="text-white pt-[160px] pl-[20px]">Pilih Warna</p>
              <div
                class="mt-[155px] ml-1 w-[30px] h-[30px] bg-[#643333] rounded-[5px] border border-white"
              ></div>
            </div>
            <div
              class="mt-[155px] ml-1 w-[30px] h-[30px] bg-[#466433] rounded-[5px]"
            ></div>
            <div
              class="mt-[155px] ml-1 w-[30px] h-[30px] bg-[#645C33] rounded-[5px]"
            ></div>
          </div>
        </div>

        <!-- Ini Modal Delete -->
        <div
          id="munculHapus"
          class="w-[732px] h-[343px] bg-black mx-auto mt-12 ml-56 rounded-2xl hidden left-[calc(50%-50vw)] right-[calc(50%-50vw)] z-10"
        >
          <div>
            <h1 class="text-white pl-[46px] pt-[35px]">Delete Schedule</h1>
          </div>
          <hr class="mt-8" />
          <div class="">
            <p class="text-white pt-[48px] pl-[105px] pr-[119px] text-center">
              Jika anda menghapus schedul Lorem maka tidak akan bisa dipulihkan,
              apakah kamu yakin ingin menghapus schedule ini ?
            </p>
            <div class="flex mt-11 ml-52">
              <div
                id="untukHapus"
                class="text-white w-[120px] h-[40px] pl-[10px] border rounded-lg cursor-pointer text-center pl-[1px] pt-[7px]"
              >
                Hapus
              </div>

              <div
                id="untukBatal"
                class="text-black bg-white w-[120px] h-[40px] pl-[10px] border ml-[17px] rounded-lg cursor-pointer pl-[40px] pt-[7px]"
              >
                Batal
              </div>
            </div>
          </div>
        </div>

        <!-- Ini Card Personal-->
        <div class="flex">
          <div class="flex ml-12 mt-4">
            <div id="card" class="text-white h-[180px] duration-200 z-10 w-[170px] bg-[#1A202B] rounded-xl">
              <p class="text-[11px] pl-3 pt-2">Just Now</p>
              <h2 class="tetx-[16px] pl-3">Judul</h2>
              <p class="text-[10px] pl-3 pt-1 pr-3 pb-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. A id
                soluta numquam blanditiis harum laboriosam adipisci
                necessitatibus tempora dolore laborum architecto, provident
                officiis sapiente molestiae illum, iusto beatae rerum.
              </p>
            </div>
          </div>
          <div class="flex ml-1 mt-4">
            <div class="text-white h-[180px] w-[170px] bg-[#1A202B] rounded-xl">
              <p class="text-[11px] pl-3 pt-2">Just Now</p>
              <h2 class="tetx-[16px] pl-3">Judul</h2>
              <p class="text-[10px] pl-3 pt-1 pr-3 pb-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. A id
                soluta numquam blanditiis harum laboriosam adipisci
                necessitatibus tempora dolore laborum architecto, provident
                officiis sapiente molestiae illum, iusto beatae rerum.
              </p>
            </div>
          </div>
          <div class="flex ml-1 mt-4">
            <div class="text-white h-[180px] w-[170px] bg-[#1A202B] rounded-xl">
              <p class="text-[11px] pl-3 pt-2">Just Now</p>
              <h2 class="tetx-[16px] pl-3">Judul</h2>
              <p class="text-[10px] pl-3 pt-1 pr-3 pb-5">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. A id
                soluta numquam blanditiis harum laboriosam adipisci
                necessitatibus tempora dolore laborum architecto, provident
                officiis sapiente molestiae illum, iusto beatae rerum.
              </p>
            </div>
          </div>

          <!-- Ini Card Project -->
          <div class="flex ml-10 mt-4">
            <div class="text-white h-[180px] w-[170px] bg-[#1A202B] rounded-xl">
              <div class="flex">
                <h2 class="text-[14px] w-[130px] pt-3 pl-3">Ulangan Dadakan</h2>
                <div class="flex">
                  <img
                    id="buatHapus"
                    src="{{asset('assets/icons/delete.svg')}}"
                    class="pt-3 pl-1 cursor-pointer"
                    alt=""
                  />
                  <img
                    id="untukKeluar"
                    src="{{asset('assets/icons/check-circle.svg')}}"
                    class="pt-3 pl-0 cursor-pointer w-4"
                    alt=""
                  />
                </div>
              </div>
              <p class="text-white text-[10px] pt-0 pl-3">
                Created on 11.9.2023
              </p>
              <p class="text-[10px] pl-3 pt-2 pr-3 pb-3 opacity-95">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. A id
                soluta numquam blanditiis harum laboriosam adipisci.
              </p>
              <div class="flex">
                <label for="bar" class="pl-3 text-[12px]">Tasks</label>
                <progress
                  id="file"
                  value="32"
                  max="100"
                  class="pl-1 pt-1 w-[90px] h-3 rounded-xl"
                >
                  > 32%
                </progress>
                <p class="text-[12px] pl-1">28%</p>
              </div>
              <div class="flex justify-stretch p-1 pl-3">
                <img src="{{asset('assets/icons/male avatar.svg')}}" alt="" class="w-[25px]" />
                <img src="{{asset('assets/icons/male avatar.svg')}}" alt="" class="w-[25px]" />
                <img src="{{asset('assets/icons/male avatar.svg')}}" alt="" class="w-[25px]" />
              </div>
            </div>
          </div>
          <div class="flex ml-1 mt-4">
            <div class="text-white h-[180px] w-[170px] bg-[#1A202B] rounded-xl">
              <div class="flex">
                <h2 class="text-[14px] w-[130px] pt-3 pl-3">Ulangan Dadakan</h2>
                <div class="flex">
                  <img
                    id="buatHapus"
                    src="{{asset('assets/icons/delete.svg')}}"
                    class="pt-3 pl-1 cursor-pointer"
                    alt=""
                  />
                  <img
                    id="untukKeluar"
                    src="{{asset('assets/icons/check-circle.svg')}}"
                    class="pt-3 pl-0 cursor-pointer w-4"
                    alt=""
                  />
                </div>
              </div>
              <p class="text-white text-[10px] pt-0 pl-3">
                Created on 11.9.2023
              </p>
              <p class="text-[10px] pl-3 pt-2 pr-3 pb-3 opacity-95">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. A id
                soluta numquam blanditiis harum laboriosam adipisci.
              </p>
              <div class="flex">
                <label for="bar" class="pl-3 text-[12px]">Tasks</label>
                <progress
                  id="file"
                  value="32"
                  max="100"
                  class="pl-1 pt-1 w-[90px] h-3 rounded-xl"
                >
                  > 32%
                </progress>
                <p class="text-[12px] pl-1">28%</p>
              </div>
              <div class="flex justify-stretch p-1 pl-3">
                <img src="{{asset('assets/icons/male avatar.svg')}}" alt="" class="w-[25px]" />
                <img src="{{asset('assets/icons/male avatar.svg')}}" alt="" class="w-[25px]" />
                <img src="{{asset('assets/icons/male avatar.svg')}}" alt="" class="w-[25px]" />
              </div>
            </div>
          </div>
          <div class="flex ml-1 mt-4">
            <div class="text-white  h-[180px] w-[170px] bg-[#1A202B] rounded-xl">
              <div class="flex">
                <h2 class="text-[14px] w-[130px] pt-3 pl-3">Ulangan Dadakan</h2>
                <div class="flex">
                  <img
                    id="buatHapus"
                    src="{{asset('assets/icons/delete.svg')}}"
                    class="pt-3 pl-1 cursor-pointer"
                    alt=""
                  />
                  <img
                    src="{{asset('assets/icons/check-circle.svg')}}"
                    class="pt-3 pl-0 cursor-pointer w-4"
                    alt=""
                  />
                </div>
              </div>
              <p class="text-white text-[10px] pt-0 pl-3">
                Created on 11.9.2023
              </p>
              <p class="text-[10px] pl-3 pt-2 pr-3 pb-3 opacity-95">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. A id
                soluta numquam blanditiis harum laboriosam adipisci.
              </p>
              <div class="flex">
                <label for="bar" class="pl-3 text-[12px]">Tasks</label>
                <progress
                  id="file"
                  value="32"
                  max="100"
                  class="pl-1 pt-1 w-[90px] h-3 rounded-xl"
                >
                  > 32%
                </progress>
                <p class="text-[12px] pl-1">28%</p>
              </div>
              <div class="flex justify-stretch p-1 pl-3">
                <img src="{{asset('assets/icons/male avatar.svg')}}" alt="" class="w-[25px]" />
                <img src="{{asset('assets/icons/male avatar.svg')}}" alt="" class="w-[25px]" />
                <img src="{{asset('assets/icons/male avatar.svg')}}" alt="" class="w-[25px]" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      // Untuk Add Note
      const tombolAddNote = document.getElementById("tombolAddNote");
      const munculAddNote = document.getElementById("popUpAddNote");

      tombolAddNote.addEventListener("click", function () {
        munculAddNote.classList.remove("hidden");
        munculAddNote.classList.add("absolute");
      });

      // Untuk Close Add Note
      const tombolX = document.getElementById("tombolX");

      tombolX.addEventListener("click", function () {
        munculAddNote.classList.remove("absolute");
        munculAddNote.classList.add("hidden");
      });

      // Untuk Confirm Delete
      const tombolHapus = document.getElementById("buatHapus");
      const munculConfirm = document.getElementById("munculHapus");

      tombolHapus.addEventListener("click", function () {
        munculConfirm.classList.remove("hidden");
        munculConfirm.classList.add("absolute");
      });

      // Untuk Hapus
      const hapus = document.getElementById("untukHapus");

      hapus.addEventListener("click", function () {
        munculConfirm.classList.remove("absolute");
        munculConfirm.classList.add("hidden");
      });

      // Untuk Hapus
      const batal = document.getElementById("untukBatal");

      batal.addEventListener("click", function () {
        munculConfirm.classList.remove("absolute");
        munculConfirm.classList.add("hidden");
      });


      const card = document.getElementById('card');

      card.addEventListener("click", function(){
        card.classList.toggle("scale-150");
        card.classList.toggle("absolute");
        card.classList.toggle("left-1/2");
        card.classList.toggle("right-1/2");
      })
    </script>
  </body>
</html>
