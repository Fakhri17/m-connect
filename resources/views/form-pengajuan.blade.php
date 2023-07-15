@extends('layouts.form')

@section('content')
<div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-1/2">
  <div class="w-full">
    <h1 class="font-bold text-center mb-5 text-4xl text-color-blue-3">Form Pengajuan</h1>
    <form class="grid grid-cols-1 px-5 md:px-20 gap-4">
      <div class="">
        <label for="input-label" class="block text-sm font-medium mb-2">Nama</label>
        <input type="text" id="input-label" class="py-3 px-4 block w-full border-2 border-color-blue-1 rounded-md text-sm" placeholder="masukkan nama">
      </div>
      <div class="">
        <label for="input-label" class="block text-sm font-medium mb-2">Nama PT</label>
        <input type="text" id="input-label" class="py-3 px-4 block w-full border-2 border-color-blue-1 rounded-md text-sm" placeholder="masukkan nama PT">
      </div>
      <div class="">
        <label for="input-label" class="block text-sm font-medium mb-2">Alamat PT</label>
        <input type="text" id="input-label" class="py-3 px-4 block w-full border-2 border-color-blue-1 rounded-md text-sm" placeholder="masukkan alamat PT">
      </div>
      <div class="">
        <label for="input-label" class="block text-sm font-medium mb-2">Email</label>
        <input type="email" id="input-label" class="py-3 px-4 block w-full border-2 border-color-blue-1 rounded-md text-sm" placeholder="masukkan email">
      </div>
      <div class="">
        <label for="input-label" class="block text-sm font-medium mb-2">No Telp/WA</label>
        <input type="text" id="input-label" class="py-3 px-4 block w-full border-2 border-color-blue-1 rounded-md text-sm" placeholder="+6289xxxxx">
      </div>
      <div>
        <label for="input-label" class="block text-sm font-medium mb-2">Form Pengajuan</label>
        <select class="py-3 px-4 pr-9 block w-full border border-color-blue-1 rounded-md text-sm ">
          <option selected>Konsultasi SOP</option>
          <option>Mentoring Pegawai PT</option>
        </select>  
      </div>
      <div>
        <label for="input-label" class="block text-sm font-medium mb-2">Deskripsi</label>
        <textarea class="py-3 px-4 block w-full border-color-blue-1 rounded-md text-sm" rows="3" placeholder="Isi Deskripsi"></textarea>
      </div>
      <button type="submit"
      class="px-6 py-3 text-sm text-white capitalize bg-color-blue-4 rounded-md hover:bg-blue-500">
          <span>Submit</span>
      </button>
          
    </form>
  </div>
</div>
@endsection