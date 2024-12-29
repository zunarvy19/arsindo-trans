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
        <img src="/img/detail.png" alt="Arsindo Trans" class="w-14 md:w-28">
        <p class="text-3xl md:text-5xl text-secondary font-bold" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.61);">ArsindoTours</p>
    </div>
    <div class="bg-secondary w-full h-6"></div>
    {{-- header end --}}
    
<div class="container mx-auto my-20 p-5 md:p-0">

  <div class="flex flex-col md:flex-row md:space-x-40">

    <div class="flex flex-col space-y-2 ">
      {{-- maps --}}
      <div class="flex flex-col mb-5 w-fit max-w-xl md:max-w-2xl  md:w-[550px] ">
          <h1 class="font-bold text-2xl my-2">Google Maps Location</h1>
          <iframe class="w-fit md:w-[550px] max-w-xl md:max-w-2xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7391454447584!2d106.84797789999999!3d-6.297969200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b467c0e38f7%3A0x60c1eaa28ce69f5f!2sCV%20ARSINDO%20-%20Rental%20Mobil%20Indonesia!5e0!3m2!1sid!2sid!4v1735056421925!5m2!1sid!2sid" width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <form action="{{ route('user.show') }}" method="GET">
        {{-- Filter section --}}
        <div class="border border-slate-300 w-auto px-7 py-10 rounded-xl">
            <div class="flex justify-between">
                <p class="font-semibold">Filter</p>
                <a href="{{ route('user.show') }}" class="hover:underline text-blue-500">Clear all search</a>
            </div>
            <hr class="mx-auto border border-gray-300 my-3">

            {{-- Seats filter --}}
            <div>
                <p class="font-semibold ">Seats</p>
                @foreach([12, 6, 5, 4] as $kursi)
                    <label for="seat_{{ $kursi }}" class="flex gap-x-2 items-center">
                        <input type="checkbox" name="kursi[]" value="{{ $kursi }}"
                            {{ in_array($kursi, request('kursi', [])) ? 'checked' : '' }}>
                        {{ $kursi }}
                    </label>
                @endforeach
            </div>
            <hr class="mx-auto border border-gray-300 my-3">

            {{-- Transmission filter --}}
            {{-- <div>
                <p class="font-semibold ">Transmission</p>
                @foreach(['Automatic', 'Manual'] as $transmisi)
                    <label for="trans_{{ $transmisi }}" class="flex gap-x-2 items-center">
                        <input type="checkbox" name="transmisi[]" value="{{ $transmisi }}"
                            {{ in_array($transmisi, request('transmisi', [])) ? 'checked' : '' }}>
                        {{ $transmisi }}
                    </label>
                @endforeach
            </div> --}}

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Apply Filter</button>
            </div>
        </div>
    </form>

    </div>
    {{-- cars --}}
    <div class="container flex flex-col space-y-4">

  {{-- Sort and count --}}
  <div class="flex flex-col my-5">
    <h1 class="text-2xl font-semibold">{{ $dataMobil->count() }} Car{{ $dataMobil->count() > 1 ? 's' : '' }} Available</h1>
    <form action="{{ route('user.show') }}" method="GET" class="w-full max-w-xs">
        @foreach(request()->except('sort') as $key => $value)
            @if(is_array($value))
                @foreach($value as $val)
                    <input type="hidden" name="{{ $key }}[]" value="{{ $val }}">
                @endforeach
            @else
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endif
        @endforeach

        <div class="flex flex-row justify-between">
            <select name="sort" class="select border border-gray-400 rounded-full w-full text-base capitalize" onchange="this.form.submit()">
                <option value="" {{ request('sort') === null ? 'selected' : '' }}>Sort by: recommended</option>
                <option value="price_asc" {{ request('sort') === 'price_asc' ? 'selected' : '' }}>Price: Low to High</option>
                <option value="price_desc" {{ request('sort') === 'price_desc' ? 'selected' : '' }}>Price: High to Low</option>
            </select>
            
        </div>
    </form>
</div>

{{-- Mobil list --}}
@foreach ($dataMobil as $item)
    <div class="flex flex-col md:flex-row border border-gray-400 rounded-xl container p-10 justify-around my-5">
        <div>
            <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->mobil }}" class="min-w-md w-96">
        </div>
        <div class="flex flex-col">
            {{-- Header --}}
            <div>
                <h1 class="text-secondary uppercase">{{ $item->ukuran }}</h1>
                <h1 class="uppercase text-2xl font-semibold">{{ $item->mobil }}</h1>
            </div>

            {{-- Details --}}
            <div class="grid grid-cols-2 gap-x-7 gap-y-7 my-10">
                <h1 class="flex items-center text-base space-x-2">
                    <span> <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.22238 8.77778C9.37016 8.77778 11.1113 7.03666 11.1113 4.88889C11.1113 2.74111 9.37016 1 7.22238 1C5.07461 1 3.3335 2.74111 3.3335 4.88889C3.3335 7.03666 5.07461 8.77778 7.22238 8.77778Z" 
                            stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      <path d="M13.4444 15C13.4444 13.3498 12.7889 11.7671 11.622 10.6002C10.4551 9.43332 8.87246 8.77777 7.22222 8.77777C5.57199 8.77777 3.98934 9.43332 2.82245 10.6002C1.65555 11.7671 1 13.3498 1 15" 
                            stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></span>
                    <span>{{ $item->kursi }} Seats</span>
                </h1>

            </div>

            {{-- Pricing and booking --}}
            <div class="flex justify-start items-start md:justify-end md:items-end flex-col">
                <h1>Price for 2 days</h1>
                <h1 class="text-2xl font-bold">IDR {{ number_format($item->harga, 0, ',', '.') }}</h1>
                <h1 class="text-[#09A03B] text-base">Free Cancellation</h1>
                <a href="/booking-mobil/{{$item->id}}" class="btn btn-secondary bg-secondary border-none hover:bg-secondary px-10 rounded-full mt-10 ">Book Now!</a>
            </div>
        </div>
    </div>
@endforeach

    {{-- Jika tidak ada hasil --}}
    @if($dataMobil->isEmpty())
        <div class="text-center mt-10">
            <h1 class="text-xl font-semibold">No cars match your filter criteria.</h1>
        </div>
    @endif
      </div>

    </div>
    <div class="flex justify-end my-10">
        <a href="/"> 
        <button class="btn bg-primary text-white px-12 hover:bg-primary text-lg">Home</button>
        </a>
    </div>
    {{-- cars end --}}
  </div>
</div>



</body>
</html>