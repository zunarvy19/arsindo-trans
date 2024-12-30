@extends('layouts.sidebarAdmin')

@section('main')

<section class="w-full">
<div id="mainbar" class="fixed left-0 top-0 pt-16 w-full md:pl-64">
    <div class="px-4 md:px-8">
        <h1 class="text-start capitalize text-3xl py-5">Data Review</h1>
        <hr class="w-full border border-gray-200">

    <div class="mt-20">

        <div class="flex justify-between items-center ">
            <div class="flex flex-col">
                <h1 class="text-3xl" >Update Review</h1>
                <hr class="w-40 border-2 border-secondary my-4">
            </div>
            <div>
            <a href="/admin/faq/index">
            <button type="button" class="btn btn-error text-white">Kembali
            </button>
            </a>
            </div>
        </div>

        
        <section class="bg-white border rounded-lg">
            <div class=" px-4 py-8 mx-auto">
                <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">Update Data Review</h2>
                <form action="/admin/review/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                  <div class="w-full">
                      <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                      <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Input nama"  required @required(true) value="{{old('nama', $data->nama)}}">
                  </div> 
                  <div class="w-full">
                      <label for="review" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Review</label>
                      <input type="text" name="review" id="review" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Input review"  required @required(true) value="{{old('review', $data->review)}}">
                  </div> 
                  <div class="w-full">
                    <label for="profile" class="block text-sm font-medium text-gray-900 dark:text-white">Profile</label>
                    <input type="hidden" name="oldProfile" value="{{$data->foto}}">
                    <input  accept="image/*"  type="file" name="profile" id="profile" class="file-input file-input-bordered text-gray-900 block w-full" @required(true) >
                </div> 
              </div>
                    <div class="flex items-center justify-end space-x-4">
                        <button type="submit" class="btn btn-outline border border-black">
                            Update Data
                        </button>
                    </div>
                </form>
            </div>
          </section>
        </div>
    </section>

@endsection