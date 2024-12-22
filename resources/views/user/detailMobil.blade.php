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
<div class="container mx-auto my-20">

  <div class="flex flex-row space-x-40">

    <div class="flex flex-col space-y-2">
      {{-- maps --}}
      <div class="flex flex-col mb-5">
          <h1 class="font-bold text-2xl my-2">Google Maps Location</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6553800511347!2d106.78866658607424!3d-6.308925277385602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef19048ebbb1%3A0xcf46c174b665d7e2!2sTirta%20Agung%20Teknik!5e0!3m2!1sid!2sid!4v1734852864036!5m2!1sid!2sid" width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <div>
                <p class="font-semibold ">Transmission</p>
                @foreach(['Automatic', 'Manual'] as $transmisi)
                    <label for="trans_{{ $transmisi }}" class="flex gap-x-2 items-center">
                        <input type="checkbox" name="transmisi[]" value="{{ $transmisi }}"
                            {{ in_array($transmisi, request('transmisi', [])) ? 'checked' : '' }}>
                        {{ $transmisi }}
                    </label>
                @endforeach
            </div>

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

        <select name="sort" class="select border border-gray-400 rounded-full w-full text-base capitalize" onchange="this.form.submit()">
            <option value="" {{ request('sort') === null ? 'selected' : '' }}>Sort by: recommended</option>
            <option value="price_asc" {{ request('sort') === 'price_asc' ? 'selected' : '' }}>Price: Low to High</option>
            <option value="price_desc" {{ request('sort') === 'price_desc' ? 'selected' : '' }}>Price: High to Low</option>
        </select>
    </form>
</div>

{{-- Mobil list --}}
@foreach ($dataMobil as $item)
    <div class="flex flex-row border border-gray-400 rounded-xl container p-10 justify-around my-5">
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

                <h1 class="flex items-center text-base space-x-2">
                    <span>
                      <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.0003 0C10.7513 0 12.1903 0.592 13.1683 1.159C14.4923 1.926 15.0003 3.369 15.0003 4.657V6.367C15.9074 6.93704 16.7833 7.55526 17.6243 8.219C17.8238 8.38696 17.9497 8.62618 17.9753 8.88568C18.001 9.14518 17.9242 9.40442 17.7614 9.60813C17.5987 9.81185 17.3628 9.94394 17.104 9.97623C16.8453 10.0085 16.5841 9.93847 16.3763 9.781C15.9288 9.42869 15.4699 9.09117 15.0003 8.769V15.586C15.0003 16.7567 14.5353 17.8794 13.7075 18.7072C12.8797 19.535 11.757 20 10.5863 20H7.4143C6.24363 20 5.12091 19.535 4.29313 18.7072C3.46534 17.8794 3.0003 16.7567 3.0003 15.586V8.769C2.5333 9.093 2.0703 9.426 1.6253 9.781C1.41816 9.94676 1.15366 10.0234 0.889988 9.99419C0.626312 9.96494 0.385057 9.83213 0.219296 9.625C0.0535362 9.41787 -0.0231514 9.15337 0.00610426 8.88969C0.0353599 8.62602 0.168162 8.38476 0.375296 8.219C1.21661 7.55557 2.09287 6.93768 3.0003 6.368V4.657C3.0003 3.368 3.5083 1.926 4.8323 1.159C5.8103 0.592 7.2503 0 9.0003 0ZM13.0003 9.414L12.8793 9.536L12.7433 9.68C12.3136 10.1708 12.0555 10.7883 12.0083 11.439L12.0003 11.657V15L11.9953 15.15C11.9595 15.6262 11.7545 16.0738 11.4174 16.412C11.0803 16.7502 10.6333 16.9567 10.1573 16.994L10.0003 17H8.0003L7.8503 16.995C7.37413 16.9592 6.92647 16.7542 6.58827 16.4171C6.25006 16.08 6.04363 15.6331 6.0063 15.157L6.0003 15V11.657L5.9933 11.459C5.95051 10.808 5.69668 10.1887 5.2703 9.695L5.1213 9.535L5.0003 9.415V15.585L5.0083 15.777C5.05382 16.3493 5.3018 16.8866 5.70774 17.2926C6.11368 17.6985 6.65101 17.9465 7.2233 17.992L7.4143 18H10.5863L10.7773 17.992C11.3496 17.9465 11.8869 17.6985 12.2929 17.2926C12.6988 16.8866 12.9468 16.3493 12.9923 15.777L13.0003 15.586V9.414ZM9.0003 6C8.4463 6 7.7163 6.192 6.8723 6.547C6.58763 6.66767 6.3013 6.80033 6.0133 6.945L5.5833 7.168L6.5363 8.121C7.40913 8.99407 7.9281 10.1592 7.9933 11.392L8.0003 11.657V15H10.0003V11.657C10.0001 10.4223 10.4567 9.23114 11.2823 8.313L11.4643 8.121L12.4173 7.168C11.9974 6.94059 11.5669 6.73335 11.1273 6.547C10.2853 6.192 9.5553 6 9.0003 6ZM9.0003 2C7.7033 2 6.6103 2.44 5.8353 2.89C5.3233 3.185 5.0003 3.823 5.0003 4.656V5.216C5.3613 5.031 5.7293 4.857 6.0963 4.702C7.0343 4.308 8.0543 4 9.0003 4C9.9463 4 10.9663 4.308 11.9043 4.703C12.2713 4.858 12.6393 5.032 13.0003 5.216V4.656C13.0003 3.824 12.6773 3.186 12.1653 2.889C11.3903 2.44 10.2973 2 9.0003 2Z" fill="#1E1E1E"/>
                        </svg>                    
                    </span>
                    <span>{{ $item->pintu }} Doors</span>
                </h1>

                <h1 class="flex items-center text-base space-x-2">
                    <span>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.625 5V4.625C11.6243 3.67935 11.2544 2.77133 10.5942 2.09427C9.93404 1.41721 9.03565 1.02459 8.09031 1H7.90969C6.96435 1.02459 6.06596 1.41721 5.40576 2.09427C4.74557 2.77133 4.37574 3.67935 4.375 4.625V5H1.625C1.59185 5 1.56005 5.01317 1.53661 5.03661C1.51317 5.06005 1.5 5.09185 1.5 5.125V14.5C1.5 14.6326 1.55268 14.7598 1.64645 14.8536C1.74021 14.9473 1.86739 15 2 15H14C14.1326 15 14.2598 14.9473 14.3536 14.8536C14.4473 14.7598 14.5 14.6326 14.5 14.5V5.125C14.5 5.09185 14.4868 5.06005 14.4634 5.03661C14.4399 5.01317 14.4082 5 14.375 5H11.625ZM10.375 5H5.625V4.65625C5.625 3.34875 6.66906 2.26375 7.97656 2.25C8.29033 2.24724 8.60154 2.30661 8.89225 2.4247C9.18295 2.54278 9.44741 2.71725 9.67037 2.93803C9.89333 3.15881 10.0704 3.42154 10.1913 3.71108C10.3123 4.00061 10.3747 4.31122 10.375 4.625V5Z" fill="#1E1E1E"/>
                        </svg>                    
                    </span>
                    <span>{{ $item->bags }} Bags</span>
                </h1>

                <h1 class="flex items-center text-base space-x-2">
                    <span> <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_267_117)">
                      <path d="M16.6663 5V10H3.33301M9.99967 5V15M3.33301 5V15" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M18.3332 3.33332C18.3332 3.77535 18.1576 4.19927 17.845 4.51183C17.5325 4.8244 17.1085 4.99999 16.6665 4.99999C16.2245 4.99999 15.8006 4.8244 15.488 4.51183C15.1754 4.19927 14.9998 3.77535 14.9998 3.33332C14.9998 2.8913 15.1754 2.46737 15.488 2.15481C15.8006 1.84225 16.2245 1.66666 16.6665 1.66666C17.1085 1.66666 17.5325 1.84225 17.845 2.15481C18.1576 2.46737 18.3332 2.8913 18.3332 3.33332ZM11.6665 3.33332C11.6665 3.77535 11.4909 4.19927 11.1783 4.51183C10.8658 4.8244 10.4419 4.99999 9.99984 4.99999C9.55781 4.99999 9.13389 4.8244 8.82133 4.51183C8.50877 4.19927 8.33317 3.77535 8.33317 3.33332C8.33317 2.8913 8.50877 2.46737 8.82133 2.15481C9.13389 1.84225 9.55781 1.66666 9.99984 1.66666C10.4419 1.66666 10.8658 1.84225 11.1783 2.15481C11.4909 2.46737 11.6665 2.8913 11.6665 3.33332ZM4.99984 3.33332C4.99984 3.77535 4.82424 4.19927 4.51168 4.51183C4.19912 4.8244 3.7752 4.99999 3.33317 4.99999C2.89114 4.99999 2.46722 4.8244 2.15466 4.51183C1.8421 4.19927 1.6665 3.77535 1.6665 3.33332C1.6665 2.8913 1.8421 2.46737 2.15466 2.15481C2.46722 1.84225 2.89114 1.66666 3.33317 1.66666C3.7752 1.66666 4.19912 1.84225 4.51168 2.15481C4.82424 2.46737 4.99984 2.8913 4.99984 3.33332ZM11.6665 16.6667C11.6665 17.1087 11.4909 17.5326 11.1783 17.8452C10.8658 18.1577 10.4419 18.3333 9.99984 18.3333C9.55781 18.3333 9.13389 18.1577 8.82133 17.8452C8.50877 17.5326 8.33317 17.1087 8.33317 16.6667C8.33317 16.2246 8.50877 15.8007 8.82133 15.4881C9.13389 15.1756 9.55781 15 9.99984 15C10.4419 15 10.8658 15.1756 11.1783 15.4881C11.4909 15.8007 11.6665 16.2246 11.6665 16.6667ZM4.99984 16.6667C4.99984 17.1087 4.82424 17.5326 4.51168 17.8452C4.19912 18.1577 3.7752 18.3333 3.33317 18.3333C2.89114 18.3333 2.46722 18.1577 2.15466 17.8452C1.8421 17.5326 1.6665 17.1087 1.6665 16.6667C1.6665 16.2246 1.8421 15.8007 2.15466 15.4881C2.46722 15.1756 2.89114 15 3.33317 15C3.7752 15 4.19912 15.1756 4.51168 15.4881C4.82424 15.8007 4.99984 16.2246 4.99984 16.6667ZM16.6665 18.3333C17.1085 18.3333 17.5325 18.1577 17.845 17.8452C18.1576 17.5326 18.3332 17.1087 18.3332 16.6667C18.3332 16.2246 18.1576 15.8007 17.845 15.4881C17.5325 15.1756 17.1085 15 16.6665 15C16.2245 15 15.8006 15.1756 15.488 15.4881C15.1754 15.8007 14.9998 16.2246 14.9998 16.6667C14.9998 17.1087 15.1754 17.5326 15.488 17.8452C15.8006 18.1577 16.2245 18.3333 16.6665 18.3333Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_267_117">
                      <rect width="20" height="20" fill="white"/>
                      </clipPath>
                      </defs>
                      </svg>        </span>
                    <span>{{ $item->transmisi }}</span>
                </h1>

            </div>

            {{-- Pricing and booking --}}
            <div class="flex justify-end items-end flex-col">
                <h1>Price for 2 days</h1>
                <h1 class="text-2xl font-bold">IDR {{ number_format($item->harga, 0, ',', '.') }}</h1>
                <h1 class="text-[#09A03B] text-base">Free Cancellation</h1>
                <a href="#" class="btn btn-secondary bg-secondary border-none hover:bg-secondary px-10 rounded-full">Book Now!</a>
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
    {{-- cars end --}}
  </div>
</div>



</body>
</html>