
@extends('layouts.sidebarAdmin')

@section('main')
<section class="w-full">
<div id="mainbar" class="fixed left-0 top-0 pt-16 w-full md:pl-64">
    <div class="px-4 md:px-8">
        <h1 class="text-start capitalize text-3xl py-5">Data Order</h1>
    <hr class="w-full border border-gray-200">

    <div class="mt-20">
        <!-- Modal -->
        <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
            <div class="relative bg-white rounded-lg shadow-lg p-4">
                <button onclick="hideModal()" 
                        class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                    &times;
                </button>
                <img id="modalImage" src="" alt="Preview" class="max-w-full max-h-[80vh] rounded-md">
            </div>
        </div>
  
        <div class="flex justify-between items-center ">
            <div class="flex flex-col">
                <h1 class="text-3xl" > Order</h1>
                <hr class="w-40 border-2 border-secondary my-4">
            </div>
        </div>
    
        @php
            $no = 1;
        @endphp
  
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-1">No.</th>
                        <th scope="col" class="px-4 py-1">Nama Lengkap</th>
                        <th scope="col" class="px-4 py-4">Mobil</th>
                        <th scope="col" class="px-4 py-4">Alamat Jemput</th>
                        <th scope="col" class="px-4 py-4">Tanggal Jemput</th>
                        <th scope="col" class="px-4 py-4">Waktu Jemput</th>
                        <th scope="col" class="px-4 py-4">Tourguide</th>
                        <th scope="col" class="px-4 py-4">Biaya</th>
                        <th scope="col" class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataBooking as $data)
                    <tr class="border-b dark:border-gray-700">
                        <th scope="row" class="px-4 py-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$no++}}</th>
                        <td class="px-4 py-3 capitalize">{{$data->namalengkap}}</td>
                        <td class="px-4 py-3">{{ $data->detailMobil->mobil }}</td>
                        <td class="px-4 py-3">{{ $data->alamatpenjemputan }}</td>
                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($data->tanggalpenjemputan)->format('d-m-Y') }}</td>
                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($data->waktupenjemputan)->format('H:i') }}</td>
                        <td class="px-4 py-3">{{ $data->tourguide ? 'Ya' : 'Tidak' }}</td>
                        <td class="px-4 py-3">
                            {{ number_format($data->harga, 0, ',', '.') }}
                            {{-- <img src="{{ asset('storage/' . $data->identitas) }}" alt="identitas {{ $data->mobil }}" class="w-fit h-16 object-cover rounded-md" onclick="showModal('{{ asset('storage/' . $data->identitas) }}')"> --}}
                        </td>
                        <td class="px-4 py-3 grid grid-rows-2">
                            <!-- Actions -->
                            <td class="px-4 py-3 grid grid-rows-2">
                                <ul class=" text-sm flex flex-col md:flex-row items-center justify-center" aria-labelledby="apple-imac-27-dropdown-button">
                                    <li>
                                        <a href="/booking-pdf/{{ $data->id }}"> 
                                            <button type="button" data-modal-target="updateProductModal" data-modal-toggle="updateProductModal" class="flex w-full text-gray-600 items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white dark:text-gray-200">
                                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2 text-green-500">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                                                </svg>
                                                
                                                Print
                                            </button>
                                        </a>
                                    </li>
                                    <li>
                                      <a href="/admin/order/{{$data->id}}}/edit"> 
                                          <button type="button" data-modal-target="updateProductModal" data-modal-toggle="updateProductModal" class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-gray-700 dark:text-gray-200">
                                              <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                              </svg>
                                              Edit
                                          </button>
                                      </a>
                                  </li>
                                    <li>
                                        <form id="delete-form-{{ $data->id }}"  action="{{ route('booking.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="confirmDelete({{ $data->id }})" class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 text-red-500 dark:hover:text-red-400">
                                                <svg class="w-4 h-4 mr-2" viewbox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M6.09922 0.300781C5.93212 0.30087 5.76835 0.347476 5.62625 0.435378C5.48414 0.523281 5.36931 0.649009 5.29462 0.798481L4.64302 2.10078H1.59922C1.36052 2.10078 1.13161 2.1956 0.962823 2.36439C0.79404 2.53317 0.699219 2.76209 0.699219 3.00078C0.699219 3.23948 0.79404 3.46839 0.962823 3.63718C1.13161 3.80596 1.36052 3.90078 1.59922 3.90078V12.9008C1.59922 13.3782 1.78886 13.836 2.12643 14.1736C2.46399 14.5111 2.92183 14.7008 3.39922 14.7008H10.5992C11.0766 14.7008 11.5344 14.5111 11.872 14.1736C12.2096 13.836 12.3992 13.3782 12.3992 12.9008V3.90078C12.6379 3.90078 12.8668 3.80596 13.0356 3.63718C13.2044 3.46839 13.2992 3.23948 13.2992 3.00078C13.2992 2.76209 13.2044 2.53317 13.0356 2.36439C12.8668 2.1956 12.6379 2.10078 12.3992 2.10078H9.35542L8.70382 0.798481C8.62913 0.649009 8.5143 0.523281 8.37219 0.435378C8.23009 0.347476 8.06631 0.30087 7.89922 0.300781H6.09922ZM4.29922 5.70078C4.29922 5.46209 4.39404 5.23317 4.56282 5.06439C4.73161 4.8956 4.96052 4.80078 5.19922 4.80078C5.43791 4.80078 5.66683 4.8956 5.83561 5.06439C6.0044 5.23317 6.09922 5.46209 6.09922 5.70078V11.1008C6.09922 11.3395 6.0044 11.5684 5.83561 11.7372C5.66683 11.906 5.43791 12.0008 5.19922 12.0008C4.96052 12.0008 4.73161 11.906 4.56282 11.7372C4.39404 11.5684 4.29922 11.3395 4.29922 11.1008V5.70078ZM8.79922 4.80078C8.56052 4.80078 8.33161 4.8956 8.16282 5.06439C7.99404 5.23317 7.89922 5.46209 7.89922 5.70078V11.1008C7.89922 11.3395 7.99404 11.5684 8.16282 11.7372C8.33161 11.906 8.56052 12.0008 8.79922 12.0008C9.03791 12.0008 9.26683 11.906 9.43561 11.7372C9.6044 11.5684 9.69922 11.3395 9.69922 11.1008V5.70078C9.69922 5.46209 9.6044 5.23317 9.43561 5.06439C9.26683 4.8956 9.03791 4.80078 8.79922 4.80078Z" />
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                        </td>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="11" class="px-4 py-3 text-center text-gray-500 dark:text-gray-400">
                            Tidak ada data yang bisa ditampilkan
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            {{ $dataBooking->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</div>
</section>

  <script>
      function confirmDelete(id) {
          event.preventDefault(); 
  
          Swal.fire({
              title: 'Apakah Anda yakin ingin menghapus data ini?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#1F2937',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, hapus!',
              cancelButtonText: 'Batal'
          }).then((result) => {
              if (result.isConfirmed) {
                  document.getElementById(`delete-form-${id}`).submit();
              }
          });
      }

    function showModal(imageUrl) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');


        modalImage.src = imageUrl;


        modal.classList.remove('hidden');
        modal.classList.add('flex'); 
    }

    function hideModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex'); 
    }
    </script>
@endsection
