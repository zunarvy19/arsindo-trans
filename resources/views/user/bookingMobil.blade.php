<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$title}}</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  
    {{-- header --}}
    <div class="w-full bg-primary flex flex-row items-center space-x-4">
      <img src="/img/detail.png" alt="Arsindo Trans" class="w-14 md:w-28">
      <p class="text-3xl md:text-5xl text-secondary font-bold" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.61);">ArsindoTours</p>
    </div>
    <div class="bg-secondary w-full h-6"></div>
    {{-- header end --}}


    <section class="w-full bg-center bg-cover h-[200px]" style="background-image: url('/img/bookHero.png'); height: 264px;">
      <div class="flex justify-center items-center h-full">
        <h1 class="text-4xl md:text-5xl text-white font-bold capitalize text-center">sewa jasa termurah di jakarta</h1>
      </div>
    </section>
    

    <div class=" my-20 mb-52">
      <hr class="border border-gray-300 w-[70%] mx-auto ">

      <div class="my-20 container mx-auto p-4">
        <div class="flex flex-col space-y-10 md:flex md:flex-row md:space-x-20 md:space-y-0">
          {{-- choosen card --}}
          <div class="bg-primary max-w-md md:w-full md:min-w-fit py-8 px-5 md:px-2 flex flex-col md:flex-row rounded-lg h-full mx-auto md:mx-auto">
            <img src="{{ asset('storage/' . $kendaraan->foto) }}" alt="" class="w-fit object-cover">
            <div class="flex flex-col text-white space-y-5">
              <h1 class="text-2xl font-semibold">{{$kendaraan->mobil}}</h1>
              <p class="flex flex-row items-center gap-x-2"><span><img src="/img/checkbox.png" alt=""></span>Direkomendasikan <span>{{$kendaraan->kursi}}</span> orang penumpang</p>
              <p class="flex flex-row items-center gap-x-2"><span><img src="/img/checkbox.png" alt=""></span>Free untuk akses jalan tol yang akan dilewati</p>
              <p class="flex flex-row items-center gap-x-2"><span><img src="/img/checkbox.png" alt=""></span>Bensin disediakan tidak perlu membayar lagi</p>
              <p class="flex flex-row items-center gap-x-2"><span><img src="/img/checkbox.png" alt=""></span>Bebas bayar parkir</p>
            </div>
          </div>
          {{-- choosen card end --}}

          <div class="bg-secondary container p-10 rounded-xl flex flex-col space-y-10">
            <h1 class="text-3xl font-bold mb-10">Formulir Sewa Jasa Mobil</h1>
            {{-- form --}}
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" id="bookingForm">
              @csrf
              @method('POST')

              <input type="hidden" name="mobil_id" value="{{ $kendaraan->id }}">
              <input type="hidden" name="mobil" value="{{ $kendaraan->mobil }}" hidden>
              <input type="hidden" name="harga" value="{{ $kendaraan->harga }}" hidden>
          
              <!-- Nama Lengkap -->
              <div>
                  <label for="nama">Nama Lengkap: </label>
                  <input type="text" name="namalengkap" placeholder="Masukkan nama..." class="input-bordered w-full" required>
                  @error('namalengkap')
                      <div class="text-red-500 text-sm">{{ $message }}</div>
                  @enderror
              </div>
          
              <!-- Alamat -->
              <div class="my-5">
                  <label for="alamat">Alamat Penjemputan: </label>
                  <input type="text" name="alamatpenjemputan" placeholder="Masukkan Alamat..." class="input-bordered w-full">
                  @error('alamat')
                      <div class="text-red-500 text-sm">{{ $message }}</div>
                  @enderror
              </div>
          
              <!-- Tanggal dan Waktu Penjemputan -->
              <div class="flex flex-col md:flex-row md:mb-5">
                  <div class="flex flex-col w-full md:w-72">
                      <label for="tanggalpenjemputan">Tanggal Penjemputan: </label>
                      <input type="date" name="tanggalpenjemputan" required>
                      @error('tanggalpenjemputan')
                          <div class="text-red-500 text-sm">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="md:divider md:divider-horizontal md:h-20 mt-5"></div>
                  <div class="flex flex-col w-full md:w-72">
                      <label for="waktupenjemputan">Waktu Penjemputan (jam): </label>
                      <input type="time" name="waktupenjemputan" required>
                      @error('waktupenjemputan')
                          <div class="text-red-500 text-sm">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
          
              <!-- Identitas -->
              <div class="flex flex-col md:flex-row md:mb-5 my-5">
                  <div class="flex flex-col w-full md:w-72">
                      <label for="identitas">Upload Identitas (KTP/SIM): </label>
                      <input accept="image/*" type="file" name="identitas" class="file-input file-input-bordered file-input-md w-full" required>
                      @error('identitas')
                          <div class="text-red-500 text-sm">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="md:divider md:divider-horizontal md:h-20"></div>
                  <div class="flex flex-col mt-5 md:mt-0 w-full md:w-72">
                      <label for="tourguide">Perlu Tourguide?</label>
                      <select name="tourguide" class="select w-full max-w-md" required>
                          <option value="1">Perlu Tourguide</option>
                          <option value="0">Tidak perlu Tourguide</option>
                      </select>
                      @error('tourguide')
                          <div class="text-red-500 text-sm">{{ $message }}</div>
                      @enderror
                  </div>
              </div>
          
              <!-- Tombol Submit -->
              <div class="flex justify-end items-end mt-20">
                  <button type="submit" class="btn btn-lg bg-primary border-none text-white rounded-full px-10 hover:bg-primary shadow-xl" id="submitBtn">Book Now!</button>
              </div>
          </form>
                
          </div>
        </div>

      </div>
    </div>

    <footer class="footer bg-secondary text-base-content p-10">
      <aside>
        <img src="/img/arsindo.png" alt="Logo" class="w-40">
        <p class="text-justify w-fit md:w-96 font-semibold max-w-sm md:max-w-md">
          Arsindo Tours adalah perusahaan penyedia jasa sewa mobil untuk keperluan wisata, bisnis, dan transportasi harian. 
          Mereka menawarkan berbagai pilihan kendaraan, dari mobil keluarga hingga minibus premium, 
          serta layanan tambahan seperti paket tur, sopir, dan akomodasi.
        </p>
      </aside>
      <nav class="mt-5">
        <h6 class="text-black font-semibold text-xl">Produk dan Layanan</h6>
        <a href="/detail-mobil" class="link link-hover">Sewa Jasa ArsindoTours</a>
        <a href="/detail-mobil" class="link link-hover">Jenis Kendaraan ArsindoTours</a>
      </nav>
      <nav class="mt-5">
        <h6 class="text-black font-semibold text-xl">Tentang ArsindoTours</h6>
        <a href="/" class="link link-hover">Faqs</a>
      </nav>
      <nav class="mt-5">
        <h6 class="text-black font-semibold text-xl">Layanan Pelanggan</h6>
        <a href="https://wa.me/6287882797730" class="link link-hover">Pengaduan Konsumen ArsindoTours</a>
      </nav>
    </footer>
    <footer class="footer bg-secondary text-base-content px-10 py-4">
    
      <nav class="md:place-self-center md:justify-self-start">
        <div class="grid grid-flow-col gap-4">
          <a>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current">
              <path
                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
            </svg>
          </a>
          <a>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current">
              <path
                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
            </svg>
          </a>
          <a>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current">
              <path
                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
            </svg>
          </a>
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="text-black font-bold" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
          </a>
        </div>
        <p><span>@</span>ArsindoTours</p>
      </nav>
    </footer>
    </footer>

    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
    </script>
    @endif

    <script>
        document.getElementById('submitBtn').addEventListener('click', function () {

        const form = document.getElementById('bookingForm');
        const formData = new FormData(form);

        const namalengkap = formData.get('namalengkap');
        const alamatpenjemputan = formData.get('alamatpenjemputan');
        const mobil = formData.get('mobil');
        const tanggalpenjemputan = formatTanggal(formData.get('tanggalpenjemputan'));
        const waktupenjemputan = formData.get('waktupenjemputan');
        const tourguide = formData.get('tourguide') === '1' ? 'Ya' : 'Tidak';

        
        const message = `
            Halo Arsindo! Saya ingin booking kendaraan dengan informasi sebagai berikut:
            Nama Lengkap: ${namalengkap}
            Mobil: ${mobil}
            Alamat Penjemputan: ${alamatpenjemputan}
            Tanggal Penjemputan: ${tanggalpenjemputan}
            Waktu Penjemputan: ${waktupenjemputan}
            Perlu Tourguide: ${tourguide}
        `.trim();

        const phoneNumber = '6287882797730'; 

        const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

        window.open(whatsappURL, '_blank');
    });

    function formatTanggal(tanggal) {
        const [year, month, day] = tanggal.split('-');
        return `${day}-${month}-${year}`;
    }

    </script>
    
</body>
</html>