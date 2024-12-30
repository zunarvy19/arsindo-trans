<!DOCTYPE html >
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$title}}</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

  {{-- header --}}
  <div class="w-full bg-primary flex flex-row items-center space-x-4">
    <img src="/img/detail.png" alt="" class="w-28">
    <p class="text-5xl text-secondary font-bold" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.61);">ArsindoTours</p>
  </div>
  <div class="bg-secondary w-full h-6"></div>
  {{-- header end --}}

  {{-- main --}}
  <div class="container mx-auto my-20">
    <div class="mb-16 flex justify-start flex-col">
      <h1 class="text-4xl font-bold text-primary text-start">Customer Review</h1>
      <hr class="border border-secondary w-48 text-center  my-4">
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 my-10">

      @forelse ($dataReview as $item)
      <div class="w-[90%] mx-auto p-6 bg-white border border-gray-300 rounded-lg flex items-center space-x-4">
        <div class="w-24 h-24 rounded-full border-2 border-blue-500 overflow-hidden">
          <img src="{{ asset('storage/' . $item->profile) }}" alt="{{ $item->mobil }}" class="w-full h-full object-cover" />
        </div>
        <div class="flex-1">
          <h3 class="text-lg font-bold">{{$item->nama}}</h3>
          <p class="text-gray-600 mt-2">{{$item->review}}</p>
        </div>
        <div class="text-blue-500 text-3xl">
          <i class="fas fa-quote-right"></i>
        </div>
      </div>
      @empty
      <!-- Card 1 -->
      <div class="w-[90%] mx-auto p-6 bg-white border border-gray-300 rounded-lg flex items-center space-x-4">
        <div class="w-24 h-24 rounded-full border-2 border-blue-500 overflow-hidden">
          <img src="/img/prof1.jpg" alt="Profile Picture" class="w-full h-full object-cover" />
        </div>
        <div class="flex-1">
          <h3 class="text-lg font-bold">Calvin Chang</h3>
          <p class="text-gray-600 mt-2">"Perjalanan saya dengan ArsindoTours sangat menyenangkan! Stafnya profesional dan membantu sekali."</p>
        </div>
        <div class="text-blue-500 text-3xl">
          <i class="fas fa-quote-right"></i>
        </div>
      </div>
    
      <!-- Card 2 -->
      <div class="w-[90%] mx-auto p-6 bg-white border border-gray-300 rounded-lg flex items-center space-x-4">
        <div class="w-24 h-24 rounded-full border-2 border-blue-500 overflow-hidden">
          <img src="/img/prof2.jpg" alt="Profile Picture" class="w-full h-full object-cover" />
        </div>
        <div class="flex-1">
          <h3 class="text-lg font-bold">David Murphy</h3>
          <p class="text-gray-600 mt-2">"Layanan mereka sangat cepat dan kendaraan yang digunakan dalam kondisi prima. Saya pasti akan kembali!"</p>
        </div>
        <div class="text-blue-500 text-3xl">
          <i class="fas fa-quote-right"></i>
        </div>
      </div>
    
      <!-- Card 3 -->
      <div class="w-[90%] mx-auto p-6 bg-white border border-gray-300 rounded-lg flex items-center space-x-4">
        <div class="w-24 h-24 rounded-full border-2 border-blue-500 overflow-hidden">
          <img src="/img/prof3.jpg" alt="Profile Picture" class="w-full h-full object-cover" />
        </div>
        <div class="flex-1">
          <h3 class="text-lg font-bold">Michael Lee</h3>
          <p class="text-gray-600 mt-2">"Perjalanan keluarga kami menjadi lebih mudah berkat layanan dari ArsindoTours. Sangat direkomendasikan!"</p>
        </div>
        <div class="text-blue-500 text-3xl">
          <i class="fas fa-quote-right"></i>
        </div>
      </div>
    
      <!-- Card 4 -->
      <div class="w-[90%] mx-auto p-6 bg-white border border-gray-300 rounded-lg flex items-center space-x-4">
        <div class="w-24 h-24 rounded-full border-2 border-blue-500 overflow-hidden">
          <img src="/img/prof4.jpg" alt="Profile Picture" class="w-full h-full object-cover" />
        </div>
        <div class="flex-1">
          <h3 class="text-lg font-bold">Samantha Wong</h3>
          <p class="text-gray-600 mt-2">"Sangat puas dengan pelayanan ArsindoTours. Sopirnya ramah dan perjalanan kami sangat aman dan nyaman."</p>
        </div>
        <div class="text-blue-500 text-3xl">
          <i class="fas fa-quote-right"></i>
        </div>
      </div>
    
      <!-- Card 5 -->
      <div class="w-[90%] mx-auto p-6 bg-white border border-gray-300 rounded-lg flex items-center space-x-4">
        <div class="w-24 h-24 rounded-full border-2 border-blue-500 overflow-hidden">
          <img src="/img/prof5.jpg" alt="Profile Picture" class="w-full h-full object-cover" />
        </div>
        <div class="flex-1">
          <h3 class="text-lg font-bold">David Tan</h3>
          <p class="text-gray-600 mt-2">"Saya sangat menghargai fleksibilitas dan kehandalan ArsindoTours. Mereka benar-benar memahami kebutuhan pelanggan."</p>
        </div>
        <div class="text-blue-500 text-3xl">
          <i class="fas fa-quote-right"></i>
        </div>
      </div>
    
      <!-- Card 6 -->
      <div class="w-[90%] mx-auto p-6 bg-white border border-gray-300 rounded-lg flex items-center space-x-4">
        <div class="w-24 h-24 rounded-full border-2 border-blue-500 overflow-hidden">
          <img src="/img/prof6.jpg" alt="Profile Picture" class="w-full h-full object-cover" />
        </div>
        <div class="flex-1">
          <h3 class="text-lg font-bold">Linda Chandra</h3>
          <p class="text-gray-600 mt-2">"Pelayanan bintang lima! Sopirnya sangat profesional, dan kendaraan yang digunakan sangat bersih dan nyaman."</p>
        </div>
        <div class="text-blue-500 text-3xl">
          <i class="fas fa-quote-right"></i>
        </div>
        
      </div>
      @endforelse

    </div>

    
    <div class="flex justify-end">
      <button class="btn bg-primary hover:bg-primary text-lg text-white"><a href="/">Home</a></button>
    </div>
    
    
  {{-- main end --}}



</body>
</html>