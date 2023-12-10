<div id="popUpAddNote" class="bg-[#222228] w-[400px] h-[500px] mx-auto rounded-lg hidden z-10">
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
            <div class="mt-[155px] ml-1 w-[30px] h-[30px] bg-[#466433] rounded-[5px]"></div>
            <div
              class="mt-[155px] ml-1 w-[30px] h-[30px] bg-[#645C33] rounded-[5px]"
            ></div>
          </div>
        </div>