@extends('layouts.app')

@section('content')
  <section class="py-14 bg-color-blue-3">
    <div class="container mx-auto px-20">
      <h1 class="text-white font-bold text-6xl">About Us</h1>
    </div>
  </section>

  <section class="my-24">
    <div class="container mx-auto px-12">
      <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-14 mb-24">
        <img src="{{ asset('/images/about.svg')}}" alt="">
        <div class="m-w-[500px]">
          <h2 class="font-bold text-7xl text-color-blue-3">M-Connect</h2>
          <p class="my-4 leading-relaxed">Bisnis kami merupakan bisnis yang berjalan dibidang jasa
            pembuatan Standar Operasional Prosedur (SOP) dan layanan 
           konsultasi dengan basis teknologi yang berkaitan langsung dengan 
           perusahaan pihak pengaju kerjasama. Bisnis bidang jasa kami 
           merupakan bidang jasa khusus mengatasi permasalahan, layanan
            konsultasi, dan peningkatan kinerja pegawai melalui  program P3
            (pendidikan, pelatihan, dan pengembangan) di lingkungan 
           perusahaan.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-10 bg-color-blue-2">
    <div class="container mx-auto px-12">
      <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center gap-6">
        <div class="max-w-screen-md">
          <h2 class="text-4xl font-bold mb-3 text-color-blue-3 text-center">VISI</h2>
          <p class="text-sm break-words">Menjadi perusahaan konsultasi yang terkemuka dalam membantu organisasi mencapai keunggulan operasional dan pengembangan sumber daya manusia yang berkualitas.</p>
        </div>
        <div>
          <h2 class="text-4xl font-bold mb-3 text-color-blue-3 text-center">VISI</h2>
          <ul class="list-disc list-outside">
            <li class="mb-2">Memberikan solusi konsultasi yang inovatif dan tepat guna untuk meningkatkan efisiensi operasional klien kami.</li>
            <li class="mb-2">Mengembangkan standar operasional prosedur yang efektif dan terukur untuk memastikan konsistensi dalam pelaksanaan tugas dan tanggung jawab.</li>
            <li class="mb-2">Memberikan pelatihan tenaga kerja yang komprehensif dan terkini untuk meningkatkan keterampilan dan pengetahuan mereka.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="my-24">
    <div class="container mx-auto px-12">
      <div class="mb-10">
        <h2 class="font-bold text-5xl text-color-blue-3 mb-3 text-center">Meet Our Team</h2>
        <p class="text-center text-lg">Penggagas dan penggerak layanan jasa M-Connect</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="flex flex-col bg-white border shadow-sm rounded-lg">
          <img class="w-full h-[30rem] xl:h-[35rem] object-cover rounded-t-xl" src="{{ asset('/images/foto-fakhri.jpg')}}" alt="Image Description">
          <div class="p-4 md:p-5 bg-color-blue-3 text-center rounded-b-lg">
            <h3 class="font-semibold text-white text-2xl uppercase">
              Fakhri
            </h3>
            <p class="mt-1 text-white text-base font-light">
              Designer & Branding
            </p>
            
          </div>
        </div>
        <div class="flex flex-col bg-white border shadow-sm rounded-lg">
          <img class="w-full h-[30rem] xl:h-[35rem] object-cover rounded-t-xl" src="{{ asset('/images/foto-wafa.jpg')}}" alt="Image Description">
          <div class="p-4 md:p-5 bg-color-blue-3 text-center rounded-b-lg">
            <h3 class="font-semibold text-white text-2xl uppercase">
              Wafa
            </h3>
            <p class="mt-1 text-white text-base font-light">
              Project Manager
            </p>
            
          </div>
        </div>
        <div class="flex flex-col bg-white border shadow-sm rounded-lg">
          <img class="w-full h-[30rem] xl:h-[35rem] object-cover rounded-t-xl" src="{{ asset('/images/foto-faisal.jpg')}}" alt="Image Description">
          <div class="p-4 md:p-5 bg-color-blue-3 text-center rounded-b-lg">
            <h3 class="font-semibold text-white text-2xl uppercase">
              Faisal
            </h3>
            <p class="mt-1 text-white text-base font-light">
              Web Developer
            </p>
            
          </div>
        </div>
      </div>
      
    </div>
  </section>
@endsection