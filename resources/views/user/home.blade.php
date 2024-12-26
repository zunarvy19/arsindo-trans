@extends('layouts.navbar')

@section('mainUser')
{{-- Hero --}}
<section class="w-screen h-screen bg-center bg-cover bg-no-repeat opacity-95 bg-blend-multiply" style="background-image: url('/img/heroHome.png');" id="home">
  <div class="flex justify-start items-center h-full bg-black bg-opacity-30">
    <div class="text-start text-white ml-6 w-1/2">
      <h1 class="text-5xl font-bold md:text-7xl">Sewa <span class="text-yellow-400">Mobil</span> dan</h1>
      <h2 class="text-5xl font-bold md:text-7xl mt-2">Mulai Perjalanan</h2>
      <p class="mt-4 text-lg md:text-2xl container">
        Mulai petualangan Anda sekarang, pilih mobil impian Anda dan nikmati perjalanan tanpa khawatir. Pengalaman berkendara yang tak terlupakan dimulai di sini.
      </p>
      <button class="mt-6 px-6 py-3 bg-yellow-400 text-white btn font-semibold rounded-lg hover:bg-yellow-400 transition duration-300 border-none">
       <a href="/detail-mobil">Book Now</a>
      </button>
    </div>
    <div class="flex mt-[30rem]">
      <img src="/img/home.png" alt="Arsindo" class="w-[100rem]">
    </div>
  </div>
</section>
{{-- Hero end --}}

{{-- Brand --}}
<div class="w-screen h-auto bg-secondary">


<div class="flex justify-center py-36">

  <div class="flex justify-center items-center flex-col md:flex-row md:gap-x-20 "> {{-- container --}}

    <div class="flex flex-col mt-10 justify-center items-center container bg-white px-6 py-8 rounded-xl shadow-2xl h-48" id="cardHome"> {{-- brand 1 --}}
        <img src="/img/toyota.png" alt="" class="w-full text-primary ">
    </div>
    <div class="flex flex-col mt-10 justify-center items-center container bg-white px-6 py-8 rounded-xl shadow-2xl h-48" id="cardHome"> {{-- brand 2 --}}
        <img src="/img/hiace.png" alt="" class="w-full text-primary ">
    </div>
    <div class="flex flex-col mt-10 justify-center items-center container bg-white px-6 py-8 rounded-xl shadow-2xl h-48" id="cardHome"> {{-- brand 3 --}}
        <img src="/img/suzuki.png" alt="" class="w-full text-primary ">
    </div>
    <div class="flex flex-col mt-10 justify-center items-center container bg-white px-6 py-8 rounded-xl shadow-2xl h-48" id="cardHome"> {{-- brand 4 --}}
        <img src="/img/alphard.png" alt="" class="w-full text-primary ">
    </div>
    <div class="flex flex-col mt-10 justify-center items-center container bg-white px-6 py-8 rounded-xl shadow-2xl h-48" id="cardHome"> {{-- brand 5 --}}
        <img src="/img/agya.png" alt="" class="w-full text-primary ">
    </div>


  </div>
</div>
{{-- Brand end --}}

{{-- Service Start --}}
<div class="w-screen h-auto bg-primary py-32">

  <div class="space-y-8">
    <h1 class="text-center text-white text-4xl md:text-6xl font-bold" id="layanan">Layanan Kami</h1>
  </div>

<div class="flex justify-center my-10">

  <div class="flex justify-center items-center flex-col md:flex-row md:gap-x-20 ">
    <div class="grid grid-cols-3 gap-x-10 gap-y-8 mx-auto">

            {{-- service 1 --}}
            <div class="card bg-base-100 w-96 shadow-xl group hover:bg-secondary delay-100 duration-100" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
              -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
              -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
              <figure class="px-10 pt-10">
                <svg class="" width="104" height="90" viewBox="0 0 104 90" xmlns="http://www.w3.org/2000/svg">
                  <path class="group-hover:fill-white delay-100 duration-100" d="M15.6 33.1247C15.6 24.3395 19.435 15.9141 26.2613 9.70199C33.0876 3.48991 42.3461 0 52 0C61.6539 0 70.9124 3.48991 77.7387 9.70199C84.565 15.9141 88.4 24.3395 88.4 33.1247V38.0224C97.2192 39.1723 104 46.0764 104 54.4191V55.6021C104 64.0016 96.0388 71.3647 86.6736 70.972C82.8256 81.004 73.0392 87.7662 62.478 89.4792C60.034 90.2931 57.1428 89.9098 54.6 89.9098C52.5313 89.9098 50.5474 89.162 49.0846 87.8308C47.6218 86.4997 46.8 84.6942 46.8 82.8117C46.8 80.9291 47.6218 79.1237 49.0846 77.7925C50.5474 76.4614 52.5313 75.7135 54.6 75.7135C58.7236 75.7135 63.2892 75.1693 66.0764 78.5954C72.8156 75.6757 78 69.5098 78 61.5173V33.1247C78 26.8495 75.2607 20.8314 70.3848 16.3942C65.5088 11.957 58.8956 9.46419 52 9.46419C45.1044 9.46419 38.4912 11.957 33.6152 16.3942C28.7393 20.8314 26 26.8495 26 33.1247V62.7003C26 64.8966 25.0413 67.0029 23.3347 68.5559C21.6281 70.109 19.3135 70.9814 16.9 70.9814C12.4178 70.9814 8.11926 69.3611 4.9499 66.477C1.78053 63.5928 6.00129e-07 59.681 6.00129e-07 55.6021V54.4191C-0.00112294 50.4357 1.57539 46.5854 4.44056 43.5739C7.30574 40.5624 11.2676 38.5914 15.6 38.0224V33.1247Z" fill="black"/>
                  </svg>                  
              </figure>
              <div class="card-body items-center text-center">
                <h2 class="card-title text-primary group-hover:text-white delay-100 duration-100">Live Chat</h2>
                <p>Memberikan bantuan dari chat melalui Whatsapp</p>
                <div class="card-actions">
                  <button class="btn bg-primary text-white rounded-3xl text-md uppercase tracking-widest hover:bg-primary ">Lihat Selengkapnya <span class="text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                  </svg>
                  </span></button>
                </div>
              </div>
            </div>
          {{-- service 1 end --}}

          {{-- service 2 --}}
          <div class="card bg-base-100 w-96 shadow-xl group hover:bg-secondary delay-100 duration-100" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
            <figure class="px-10 pt-10">
              <svg width="104" height="104" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_198_163" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="104" height="104">
                <rect width="104" height="104" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_198_163)">
                <path class="group-hover:fill-white delay-100 duration-100" d="M26.0001 78H52.0001V76.05C52.0001 74.8222 51.657 73.6847 50.9709 72.6375C50.2848 71.5902 49.3279 70.7777 48.1001 70.2C46.6556 69.55 45.1931 69.0625 43.7126 68.7375C42.232 68.4125 40.6612 68.25 39.0001 68.25C37.339 68.25 35.7681 68.4125 34.2876 68.7375C32.807 69.0625 31.3445 69.55 29.9001 70.2C28.6723 70.7777 27.7154 71.5902 27.0292 72.6375C26.3431 73.6847 26.0001 74.8222 26.0001 76.05V78ZM63.9168 71.5H74.7501C75.689 71.5 76.4654 71.193 77.0793 70.5791C77.6931 69.9652 78.0001 69.1889 78.0001 68.25C78.0001 67.3111 77.6931 66.5347 77.0793 65.9208C76.4654 65.3069 75.689 65 74.7501 65H63.9168C62.9779 65 62.2015 65.3069 61.5876 65.9208C60.9737 66.5347 60.6667 67.3111 60.6667 68.25C60.6667 69.1889 60.9737 69.9652 61.5876 70.5791C62.2015 71.193 62.9779 71.5 63.9168 71.5ZM39.0001 65C40.8056 65 42.3404 64.368 43.6042 63.1041C44.8681 61.8402 45.5001 60.3055 45.5001 58.5C45.5001 56.6944 44.8681 55.1597 43.6042 53.8958C42.3404 52.6319 40.8056 52 39.0001 52C37.1945 52 35.6598 52.6319 34.3959 53.8958C33.132 55.1597 32.5001 56.6944 32.5001 58.5C32.5001 60.3055 33.132 61.8402 34.3959 63.1041C35.6598 64.368 37.1945 65 39.0001 65ZM63.9168 58.5H74.7501C75.689 58.5 76.4654 58.193 77.0793 57.5791C77.6931 56.9652 78.0001 56.1889 78.0001 55.25C78.0001 54.3111 77.6931 53.5347 77.0793 52.9208C76.4654 52.3069 75.689 52 74.7501 52H63.9168C62.9779 52 62.2015 52.3069 61.5876 52.9208C60.9737 53.5347 60.6667 54.3111 60.6667 55.25C60.6667 56.1889 60.9737 56.9652 61.5876 57.5791C62.2015 58.193 62.9779 58.5 63.9168 58.5ZM17.3334 95.3333C14.9501 95.3333 12.9098 94.4847 11.2126 92.7875C9.51536 91.0902 8.66675 89.05 8.66675 86.6666V39C8.66675 36.6166 9.51536 34.5763 11.2126 32.8791C12.9098 31.1819 14.9501 30.3333 17.3334 30.3333H39.0001V17.3333C39.0001 14.95 39.8487 12.9097 41.5459 11.2125C43.2431 9.51524 45.2834 8.66663 47.6667 8.66663H56.3334C58.7167 8.66663 60.757 9.51524 62.4543 11.2125C64.1515 12.9097 65.0001 14.95 65.0001 17.3333V30.3333H86.6667C89.0501 30.3333 91.0904 31.1819 92.7876 32.8791C94.4848 34.5763 95.3334 36.6166 95.3334 39V86.6666C95.3334 89.05 94.4848 91.0902 92.7876 92.7875C91.0904 94.4847 89.0501 95.3333 86.6667 95.3333H17.3334ZM47.6667 39H56.3334V17.3333H47.6667V39Z" fill="#1C1B1F"/>
                </g>
                </svg>                
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title text-primary group-hover:text-white delay-100 duration-100">Driver Berlisensi</h2>
              <p>Membuktikan supir yang berpengalaman di bidangnya</p>
              <div class="card-actions">
                <button class="btn bg-primary text-white rounded-3xl text-md uppercase tracking-widest hover:bg-primary">Lihat Selengkapnya <span class="text-xl">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
                </span></button>
              </div>
            </div>
          </div>
          {{-- service 2 end --}}

          {{-- service 3 --}}
          <div class="card bg-base-100 w-96 shadow-xl group hover:bg-secondary delay-100 duration-100" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
            <figure class="px-10 pt-10">
              <svg width="100" height="89" viewBox="0 0 100 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_492_130" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="100" height="89">
                <rect width="100" height="89" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_492_130)">
                <path class="group-hover:fill-white delay-100 duration-100" d="M12.4998 74.1665C10.2082 74.1665 8.24637 73.4403 6.61442 71.9878C4.98248 70.5354 4.1665 68.7894 4.1665 66.7498V29.6665C4.1665 28.6158 4.56581 27.735 5.36442 27.0243C6.16303 26.3135 7.15261 25.9581 8.33317 25.9581C9.51373 25.9581 10.5033 26.3135 11.3019 27.0243C12.1005 27.735 12.4998 28.6158 12.4998 29.6665V66.7498H79.1665C80.3471 66.7498 81.3366 67.1052 82.1352 67.8159C82.9339 68.5267 83.3332 69.4074 83.3332 70.4581C83.3332 71.5088 82.9339 72.3896 82.1352 73.1003C81.3366 73.8111 80.3471 74.1665 79.1665 74.1665H12.4998ZM29.1665 59.3331C26.8748 59.3331 24.913 58.6069 23.2811 57.1545C21.6491 55.7021 20.8332 53.956 20.8332 51.9165V22.2498C20.8332 20.2102 21.6491 18.4642 23.2811 17.0118C24.913 15.5593 26.8748 14.8331 29.1665 14.8331H87.4998C89.7915 14.8331 91.7533 15.5593 93.3853 17.0118C95.0172 18.4642 95.8332 20.2102 95.8332 22.2498V51.9165C95.8332 53.956 95.0172 55.7021 93.3853 57.1545C91.7533 58.6069 89.7915 59.3331 87.4998 59.3331H29.1665ZM37.4998 51.9165C37.4998 49.8769 36.6839 48.1309 35.0519 46.6784C33.42 45.226 31.4582 44.4998 29.1665 44.4998V51.9165H37.4998ZM79.1665 51.9165H87.4998V44.4998C85.2082 44.4998 83.2464 45.226 81.6144 46.6784C79.9825 48.1309 79.1665 49.8769 79.1665 51.9165ZM58.3332 48.2081C61.8054 48.2081 64.7568 47.1265 67.1873 44.9633C69.6179 42.8001 70.8332 40.1734 70.8332 37.0831C70.8332 33.9929 69.6179 31.3661 67.1873 29.2029C64.7568 27.0397 61.8054 25.9581 58.3332 25.9581C54.8609 25.9581 51.9096 27.0397 49.479 29.2029C47.0484 31.3661 45.8332 33.9929 45.8332 37.0831C45.8332 40.1734 47.0484 42.8001 49.479 44.9633C51.9096 47.1265 54.8609 48.2081 58.3332 48.2081ZM29.1665 29.6665C31.4582 29.6665 33.42 28.9402 35.0519 27.4878C36.6839 26.0354 37.4998 24.2894 37.4998 22.2498H29.1665V29.6665ZM87.4998 29.6665V22.2498H79.1665C79.1665 24.2894 79.9825 26.0354 81.6144 27.4878C83.2464 28.9402 85.2082 29.6665 87.4998 29.6665Z" fill="#1C1B1F"/>
                </g>
                </svg>                
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title text-primary group-hover:text-white delay-100 duration-100">Harga Kompetitif</h2>
              <p>Memberikan harga yang terjangkau dengan kualitas yang terbaik</p>
              <div class="card-actions">
                <button class="btn bg-primary text-white rounded-3xl text-md uppercase tracking-widest hover:bg-primary">Lihat Selengkapnya <span class="text-xl">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
                </span></button>
              </div>
            </div>
          </div>
          {{-- service 3 end --}}


          {{-- service 4 --}}
          <div class="card bg-base-100 w-96 shadow-xl group hover:bg-secondary delay-100 duration-100" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
            <figure class="px-10 pt-10">
              <svg width="75" height="88" viewBox="0 0 75 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_492_52" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75" height="88">
                <rect width="75" height="88" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_492_52)">
                <path class="group-hover:fill-white delay-100 duration-100" d="M37.5 22.0002C35.7813 22.0002 34.3099 21.2821 33.086 19.846C31.862 18.4099 31.25 16.6835 31.25 14.6668C31.25 12.6502 31.862 10.9238 33.086 9.48766C34.3099 8.05155 35.7813 7.3335 37.5 7.3335C39.2188 7.3335 40.6901 8.05155 41.9141 9.48766C43.1381 10.9238 43.75 12.6502 43.75 14.6668C43.75 16.6835 43.1381 18.4099 41.9141 19.846C40.6901 21.2821 39.2188 22.0002 37.5 22.0002ZM28.125 77.0002V33.0002C25.5729 32.7557 22.9948 32.4196 20.3907 31.9918C17.7865 31.5641 15.2344 31.0141 12.7344 30.3418C11.849 30.0974 11.1328 29.5168 10.586 28.6002C10.0391 27.6835 9.89586 26.7057 10.1563 25.6668C10.4167 24.6279 10.9636 23.8641 11.7969 23.3752C12.6302 22.8863 13.5157 22.7641 14.4532 23.0085C18.099 23.9252 21.8881 24.5974 25.8203 25.0252C29.7526 25.4529 33.6459 25.6668 37.5 25.6668C41.3542 25.6668 45.2474 25.4529 49.1797 25.0252C53.112 24.5974 56.9011 23.9252 60.5469 23.0085C61.4844 22.7641 62.3698 22.8863 63.2032 23.3752C64.0365 23.8641 64.5834 24.6279 64.8438 25.6668C65.1042 26.7057 64.961 27.6835 64.4141 28.6002C63.8672 29.5168 63.1511 30.0974 62.2657 30.3418C59.7657 31.0141 57.2136 31.5641 54.6094 31.9918C52.0052 32.4196 49.4271 32.7557 46.875 33.0002V77.0002C46.875 78.0391 46.5756 78.9099 45.9766 79.6127C45.3776 80.3154 44.6354 80.6668 43.75 80.6668C42.8646 80.6668 42.1224 80.3154 41.5235 79.6127C40.9245 78.9099 40.625 78.0391 40.625 77.0002V58.6668H34.375V77.0002C34.375 78.0391 34.0756 78.9099 33.4766 79.6127C32.8776 80.3154 32.1354 80.6668 31.25 80.6668C30.3646 80.6668 29.6224 80.3154 29.0235 79.6127C28.4245 78.9099 28.125 78.0391 28.125 77.0002Z" fill="#1C1B1F"/>
                </g>
                </svg>                              
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title text-primary group-hover:text-white delay-100 duration-100">Pelayanan Terbaik</h2>
              <p>Nemberikan pelayanan berkualitas dan bermanfaat bagi pengguna</p>
              <div class="card-actions">
                <button class="btn bg-primary text-white rounded-3xl text-md uppercase tracking-widest hover:bg-primary">Lihat Selengkapnya <span class="text-xl">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
                </span></button>
              </div>
            </div>
          </div>
          {{-- service 5 end --}}

          {{-- service 5 --}}
          <div class="card bg-base-100 w-96 shadow-xl group hover:bg-secondary delay-100 duration-100" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
            <figure class="px-10 pt-10">
              <svg width="104" height="107" viewBox="0 0 104 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_492_139" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="104" height="107">
                <rect y="0.125977" width="104" height="106.788" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_492_139)">
                <path class="group-hover:fill-white duration-100 delay-100" d="M26 84.6666V86.8914C26 88.7454 25.3681 90.3212 24.1042 91.619C22.8403 92.9168 21.3056 93.5657 19.5 93.5657C17.6944 93.5657 16.1597 92.9168 14.8958 91.619C13.6319 90.3212 13 88.7454 13 86.8914V55.0774C13 54.5583 13.0361 54.0392 13.1083 53.5201C13.1806 53.001 13.2889 52.519 13.4333 52.074L21.5583 28.3804C22.1361 26.6006 23.1833 25.1545 24.7 24.0421C26.2167 22.9297 27.9139 22.3735 29.7917 22.3735H74.2083C76.0861 22.3735 77.7833 22.9297 79.3 24.0421C80.8167 25.1545 81.8639 26.6006 82.4417 28.3804L90.5667 52.074C90.7111 52.519 90.8194 53.001 90.8917 53.5201C90.9639 54.0392 91 54.5583 91 55.0774V86.8914C91 88.7454 90.3681 90.3212 89.1042 91.619C87.8403 92.9168 86.3056 93.5657 84.5 93.5657C82.6944 93.5657 81.1597 92.9168 79.8958 91.619C78.6319 90.3212 78 88.7454 78 86.8914V84.6666H26ZM25.1333 44.6211H78.8667L74.3167 31.2726H29.6833L25.1333 44.6211ZM32.5 71.3181C34.3056 71.3181 35.8403 70.6692 37.1042 69.3715C38.3681 68.0737 39 66.4978 39 64.6439C39 62.7899 38.3681 61.214 37.1042 59.9163C35.8403 58.6185 34.3056 57.9696 32.5 57.9696C30.6944 57.9696 29.1597 58.6185 27.8958 59.9163C26.6319 61.214 26 62.7899 26 64.6439C26 66.4978 26.6319 68.0737 27.8958 69.3715C29.1597 70.6692 30.6944 71.3181 32.5 71.3181ZM71.5 71.3181C73.3056 71.3181 74.8403 70.6692 76.1042 69.3715C77.3681 68.0737 78 66.4978 78 64.6439C78 62.7899 77.3681 61.214 76.1042 59.9163C74.8403 58.6185 73.3056 57.9696 71.5 57.9696C69.6944 57.9696 68.1597 58.6185 66.8958 59.9163C65.6319 61.214 65 62.7899 65 64.6439C65 66.4978 65.6319 68.0737 66.8958 69.3715C68.1597 70.6692 69.6944 71.3181 71.5 71.3181Z" fill="#1C1B1F"/>
                </g>
                </svg>                
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title text-primary group-hover:text-white delay-100 duration-100">Pilhan Mobil Beragam</h2>
              <p>Menampilkan berbagai macam jenis mobil yang diinginkan</p>
              <div class="card-actions">
                <a href="/detail-mobil">
                <button class="btn bg-primary text-white rounded-3xl text-md uppercase tracking-widest hover:bg-primary">Lihat Selengkapnya <span class="text-xl">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
                </span></button></a>
              </div>
            </div>
          </div>
          {{-- service 5 end --}}

          {{-- service 6 --}}
          <div class="card bg-base-100 w-96 shadow-xl group hover:bg-secondary delay-100 duration-100" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
            <figure class="px-10 pt-10">
              <svg width="85" height="82" viewBox="0 0 85 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="group-hover:fill-white delay-100 duration-100" d="M60.5352 1.68052e-05C56.6632 -0.00145766 52.8462 0.884251 49.3984 2.58424C45.9506 4.28422 42.9706 6.74988 40.7036 9.77825C38.4366 12.8066 36.9475 16.3111 36.3589 20.0033C35.7702 23.6954 36.0989 27.4696 37.3178 31.0153L2.26284 64.8436C0.813916 66.2424 0 68.139 0 70.1166C0 72.0941 0.813916 73.9907 2.26284 75.3895L6.84791 79.813C7.56561 80.5063 8.41792 81.0563 9.35611 81.4316C10.2943 81.8068 11.3 82 12.3156 82C13.3312 82 14.3369 81.8068 15.275 81.4316C16.2132 81.0563 17.0655 80.5063 17.7832 79.813L52.8425 45.9847C57.0276 47.3257 61.5107 47.5497 65.817 46.6331C70.1233 45.7165 74.0925 43.6933 77.3042 40.7779C80.5159 37.8625 82.8506 34.1634 84.061 30.0723C85.2714 25.9811 85.3124 21.6504 84.1797 17.5386C83.0203 13.3169 77.8948 12.8964 75.3233 15.3773L67.8137 22.6181C67.4051 23.0275 66.916 23.3542 66.3749 23.5791C65.8339 23.804 65.2518 23.9226 64.6627 23.9279C64.0736 23.9333 63.4894 23.8253 62.944 23.6103C62.3987 23.3953 61.9033 23.0775 61.4867 22.6756C61.0701 22.2737 60.7408 21.7958 60.5179 21.2696C60.295 20.7435 60.1831 20.1798 60.1887 19.6115C60.1942 19.0432 60.3171 18.4816 60.5502 17.9596C60.7834 17.4376 61.122 16.9657 61.5463 16.5715L69.0515 9.32646C71.623 6.84558 71.1872 1.90063 66.8069 0.782127C64.7618 0.260485 62.655 -0.0024215 60.5395 1.68052e-05" fill="black"/>
                </svg>                
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title text-primary group-hover:text-white delay-100 duration-100">Fasilitas Berkualitas</h2>
              <p>Memberikan kualtas fasilitas mobil yang terjamin</p>
              <div class="card-actions">
                <button class="btn bg-primary text-white rounded-3xl text-md uppercase tracking-widest hover:bg-primary">Lihat Selengkapnya <span class="text-xl">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
                </span></button>
              </div>
            </div>
          </div>
          {{-- service 6 end --}}

    </div>

  </div>
  
</div>
{{-- Service End --}}

{{-- Facility --}}
<div class="w-screen h-auto mt-44 bg-secondary">
  <div class="flex flex-col">

      {{-- premio --}}
      <div class="flex flex-row">

        <div class="w-1/2">
          <img src="/img/premio.png" alt="" class="w-[120rem] ">
        </div>

      <div class="w-1/2 bg-tertiary">
        <div class="container p-20">
          <h1 class="text-6xl text-white uppercase font-semibold">Toyota</h1>
          <h1 class="text-6xl text-white uppercase my-10 font-semibold">HI ACE PREMIO</h1>
          <div class="container">
            <p class="text-xl text-white ">Toyota Hiace dapat menampung antara 10 <br> hingga 16 penumpang, tergantung pada model <br> dan konfigurasi kursi.</p>
          </div>
          <div class="flex justify-end">
            <button class="btn mt-24 bg-primary border-none hover:bg-primary text-white uppercase"><a href="/detail-mobil">Read More</a> <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
            </span></button>
          </div>
        </div>
      </div>

      </div>

      {{-- xl7 --}}
      <div class="flex flex-row-reverse">

        <div class="w-1/2">
          <img src="/img/xl7.png" alt="" class="w-[120rem]">
        </div>

      <div class="w-1/2 bg-[#889293]">
        <div class="container p-20">
          <h1 class="text-6xl text-white uppercase font-semibold">Suzuki</h1>
          <h1 class="text-6xl text-white uppercase my-10 font-semibold">XL-7 Hybrid</h1>
          <div class="container">
            <p class="text-xl text-white ">Suzuki XL7 Hybrid memiliki kapasitas tempat duduk untuk 7 penumpang. <br> Mobil ini dirancang sebagai SUV keluarga dengan konfigurasi tiga baris kursi, menawarkan ruang yang cukup bagi seluruh penumpang.</p>
          </div>
          <div class="flex justify-start">
            <button class="btn mt-24 bg-secondary border-none hover:bg-secondary text-white uppercase"><a href="/detail-mobil">Read More</a> <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
            </span></button>
          </div>
        </div>
      </div>

      </div>
    </div>

  <div>
    <h1 class="text-center p-8 text-5xl text-white capitalize"><a href="/detail-mobil">View More Car</a></h1>
  </div>
</div>
</div>
{{-- Facility End --}}

<div class="bg-primary w-screen min-h-screen h-auto ">

  <div class="flex flex-col justify-center items-center h-screen">

    <div class="mb-10 -mt-72">
      <h1 class="text-5xl text-white font-bold" id="faq">Frequenly Asked Questions</h1>
    </div>

    <div>


      @forelse ($faq as $faq)
          <!-- Accordion Item 1 -->
          <div class="border-b border-slate-200 bg-white px-10 rounded-t">
            <button onclick="toggleAccordion({{$faq->id}})" class="w-full flex justify-between items-center py-5 text-slate-800">
              <span class="text-3xl font-semibold">{{$faq->question}}</span>
              <span id="icon-{{$faq->id}}" class="text-secondary transition-transform duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#FFC436" class="w-4 h-4">
                  <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                </svg>
              </span>
            </button>
            <div id="content-{{$faq->id}}" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
              <div class="pb-5 text-lg text-slate-500">
                {{$faq->answer}}
              </div>
            </div>
          </div>

      @empty
      <div class="border-b border-slate-200 bg-white px-10 rounded-t">
        <button onclick="toggleAccordion(1)" class="w-full flex justify-between items-center py-5 text-slate-800">
          <span class="text-3xl font-semibold">Apakah bisa  rental tanpa supir?</span>
          <span id="icon-1" class="text-secondary transition-transform duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#FFC436" class="w-4 h-4">
              <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
            </svg>
          </span>
        </button>
        <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="pb-5 text-lg text-slate-500">
            Tidak bisa dikarenakan paket yang dipilih sudah termasuk supir yang mengendarai mobilnya.
          </div>
        </div>
      </div>

      <div class="border-b border-slate-200 bg-white px-10 rounded-t">
        <button onclick="toggleAccordion(2)" class="w-full flex justify-between items-center py-5 text-slate-800">
          <span class="text-3xl font-semibold">Jika meminta waktu tambahan dalam waktu sewa?</span>
          <span id="icon-2" class="text-secondary transition-transform duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#FFC436" class="w-4 h-4">
              <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
            </svg>
          </span>
        </button>
        <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="pb-5 text-lg text-slate-500">
            Bisa. nanti dalam proses pengembalian unit akan ditambahkan biaya tambahan dari biaya penyewaan
          </div>
        </div>
      </div>

      <div class="border-b border-slate-200 bg-white px-10 rounded-t">
        <button onclick="toggleAccordion(3)" class="w-full flex justify-between items-center py-5 text-slate-800">
          <span class="text-3xl font-semibold">Perlu apa untuk menyewa unit dan jasa?</span>
          <span id="icon-3" class="text-secondary transition-transform duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#FFC436" class="w-4 h-4">
              <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
            </svg>
          </span>
        </button>
        <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
          <div class="pb-5 text-lg text-slate-500">
            Dengan membawa kartu tanda penduduk atau identitas diri untuk jaminan selama sewa jasa dan unit.
          </div>
        </div>
      </div>
      @endforelse

    </div>

<script>
  function toggleAccordion(index) {
    const content = document.getElementById(`content-${index}`);
    const icon = document.getElementById(`icon-${index}`);

    const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;

    const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
      content.style.maxHeight = '0';
      icon.innerHTML = plusSVG;
    } else {
      content.style.maxHeight = content.scrollHeight + 'px';
      icon.innerHTML = minusSVG;
    }
  }
</script>

  </div>


@endsection