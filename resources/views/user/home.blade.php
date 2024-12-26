@extends('layouts.navbar')

@section('mainUser')
{{-- Hero --}}
<section class="w-screen h-screen bg-center bg-cover bg-no-repeat opacity-95 bg-blend-multiply" style="background-image: url('/img/heroHome.png');">
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
    <h1 class="text-center text-white text-4xl md:text-6xl font-bold" id="fitur">Layanan Kami</h1>
  </div>

<div class="flex justify-center my-10">

  <div class="flex justify-center items-center flex-col md:flex-row md:gap-x-20 ">
    <div class="grid grid-cols-3 gap-x-10 gap-y-8 mx-auto">

            {{-- service 1 --}}
            <div class="card bg-base-100 w-96 shadow-xl" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
              -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
              -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
              <figure class="px-10 pt-10">
                <img
                  src="/img/livechat.png"
                  alt="Shoes"
                  class="rounded-xl" />
              </figure>
              <div class="card-body items-center text-center">
                <h2 class="card-title text-primary">Live Chat</h2>
                <p>Memberikan bantuan dari chat melalui Whatsapp</p>
                <div class="card-actions">
                  <button class="btn bg-primary text-white rounded-3xl text-md uppercase tracking-widest hover:bg-primary">Lihat Selengkapnya <span class="text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                  </svg>
                  </span></button>
                </div>
              </div>
            </div>
          {{-- service 1 end --}}

          {{-- service 2 --}}
          <div class="card bg-base-100 w-96 shadow-xl" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
            <figure class="px-10 pt-10">
              <img
                src="/img/badge.png"
                alt="Shoes"
                class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title text-primary">Driver Berlisensi</h2>
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
          <div class="card bg-base-100 w-96 shadow-xl" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
            <figure class="px-10 pt-10">
              <img
                src="/img/payments.png"
                alt="Shoes"
                class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title text-primary">Harga Kompetitif</h2>
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
          <div class="card bg-base-100 w-96 shadow-xl" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
            <figure class="px-10 pt-10">
              <img
                src="/img/manService.png"
                alt="Shoes"
                class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title text-primary">Pelayanan Terbaik</h2>
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
          <div class="card bg-base-100 w-96 shadow-xl" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
            <figure class="px-10 pt-10">
              <img
                src="/img/carService.png"
                alt="Shoes"
                class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title text-primary">Pilhan Mobil Beragam</h2>
              <p>Menampilkan berbagai macam jenis mobil yang diinginkan</p>
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

          {{-- service 6 --}}
          <div class="card bg-base-100 w-96 shadow-xl" style="box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -webkit-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);
          -moz-box-shadow: 1px 10px 5px -2px rgba(0,0,0,0.75);">
            <figure class="px-10 pt-10">
              <img
                src="/img/tool.png"
                alt="Shoes"
                class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
              <h2 class="card-title text-primary">Fasilitas Berkualitas</h2>
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
    <h1 class="text-center p-8 text-5xl text-white capitalize"><a href="#">View More Car</a></h1>
  </div>
</div>
</div>
{{-- Facility End --}}

<div class="bg-primary w-screen min-h-screen h-auto ">

  <div class="flex flex-col justify-center items-center h-screen">

    <div class="mb-10 -mt-72">
      <h1 class="text-5xl text-white font-bold">Frequenly Asked Questions</h1>
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