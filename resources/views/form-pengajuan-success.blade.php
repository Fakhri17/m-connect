@extends('layouts.form')

@section('content')
    <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-1/2">
        <div class="w-full">
            <div class="text-center">
                <div class="flex justify-center">
                    <img src="/images/success-icon.png" alt="" width="300px">
                </div>
                <div class="mt-10">
                    <h1 class="text-[#00458B] font-extrabold text-4xl my-10">SUCCESS</h1>
                    <p>
                        Form pengajuan berhasil di submit. Untuk selanjutnya anda silahkan cek email konfirmasi dan menunggu
                        untuk mendapatkan pesan via WA
                    </p>
                    <div class="my-10">
                        Back to
                        <a href="/" class=""> <span class="text-[#00458B] ">Homepage</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
