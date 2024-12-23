<!DOCTYPE html>
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


    <section class="w-full bg-center bg-cover h-[264px]" style="background-image: url('img/bookHero.png'); height: 264px;">
      <div class="flex justify-center items-center h-full">
        <h1 class="text-6xl text-white font-bold capitalize">sewa jasa termurah di jakarta</h1>
      </div>
    </section>
    

    <div class="mx-auto container my-20">
      <hr class="border border-gray-300 w-[10em] mx-auto">
    </div>

</body>
</html>