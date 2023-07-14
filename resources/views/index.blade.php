@extends('layouts.app')

@section('content')
  <section class="my-24">
    <div class="container mx-auto px-12">
      <div class="grid grid-cols-1 md:grid-cols-2 items-center">
        <div>
          <h1 class="text-7xl font-bold text-color-blue-3">M-Connect</h1>
          <p class="text-lg my-4">Konsultan jasa layanan pembuatan Standar Operasional Prosedur (SOP) dan Mentoring P3 (Pendidikan, Pelatihan, dan Pengembangan) Tenaga Kerja.</p>
        </div>
        <div>
          <img class="w-3/5 h-3/5 block mx-auto" src="{{ asset('/images/image-circle.png')}}" alt="">
        </div>
      </div>
    </div>
  </section>
  <section class="my-24 py-12 bg-color-blue-7">
    <div class="container mx-auto px-12">
      <div class="text-center mb-10">
        <h2 class="text-white font-bold text-4xl">Target dan apa yang telah kita lakukan</h2>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-3 justify-items-center items-center">
        <div class="text-white text-center justify-self-end">
          <h4 class="text-2xl font-bold">40</h4>
          <p>Perusahaan</p>
        </div>
        <div class="text-white text-center">
          <h4 class="text-2xl font-bold">40</h4>
          <p>Company</p>
        </div>
        <div class="text-white text-center justify-self-start">
          <h4 class="text-2xl font-bold">40</h4>
          <p>Company</p>
        </div>
      </div>
    </div>
  </section>
  <section class="my-24">
    <div class="container mx-auto px-12">
      <h2 class="font-bold text-4xl text-center">Alur Kerja</h2>
      <div class="mt-16">
        <img class="w-full h-auto object-cover" src="{{ asset('/images/workflow.png')}}" alt="">
      </div>
    </div>
  </section>
  <section class="mt-24 py-12 bg-color-blue-8">
    <div class="container mx-auto px-12">
      <div class="mx-auto text-center mb-20">
        <h2 class="text-color-blue-3 font-bold text-4xl">Layanan</h2>
        <p class="mt-5 w-[508px] mx-auto">M-Connect Menyediakan Dua Jasa Layanan Sebagai Solusi untuk Mendukung Perusahaan Anda</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-14 mb-24">
        <img src="{{ asset('/images/meeting.svg')}}" alt="">
        <div class="w-[450px]">
          <h3 class="font-bold text-3xl text-color-blue-4">Layanan Konsultasi Pembuatan SOP</h3>
          <p class="my-4">Layanan ini berfokus pada pengajuan bentuk kerjasama pembuatan Standar Operasional</p>
          <a href="/form-pengajuan" class="py-2 px-5 bg-color-blue-4 rounded-md text-sm text-white">Ajukan Pelayanan</a>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-14">
        <div class="w-[450px]">
          <h3 class="font-bold text-3xl text-color-blue-4">Layanan Konsultasi Pembuatan SOP</h3>
          <p class="my-4">Layanan ini berfokus pada pengajuan bentuk kerjasama pembuatan Standar Operasional</p>
          <a href="/form-pengajuan" class="py-2 px-5 bg-color-blue-4 rounded-md text-sm text-white">Ajukan Pelayanan</a>
        </div>
        <img src="{{ asset('/images/youtube-tutorial.svg')}}" alt="">
      </div>
    </div>
  </section>
@endsection