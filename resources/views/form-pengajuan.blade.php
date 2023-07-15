@extends('layouts.form')

@section('content')
    <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-1/2">
        <div class="w-full">
            <h1 class="mb-5 text-4xl font-bold text-center text-color-blue-3">Form Pengajuan</h1>
            <form class="grid grid-cols-1 gap-4 px-5 md:px-20" action="{{ route('form.pengajuan.store') }}" method="post">
                <div class="">
                    <label for="input-label" class="block mb-2 text-sm font-medium">Nama</label>
                    <input type="text" id="input-label"
                        class="block w-full px-4 py-3 text-sm border-2 rounded-md border-color-blue-1"
                        placeholder="masukkan nama" name="nama">
                </div>
                <div class="">
                    <label for="input-label" class="block mb-2 text-sm font-medium">Nama PT</label>
                    <input type="text" id="input-label"
                        class="block w-full px-4 py-3 text-sm border-2 rounded-md border-color-blue-1"
                        placeholder="masukkan nama PT" name="nama_pt">
                </div>
                <div class="">
                    <label for="input-label" class="block mb-2 text-sm font-medium">Alamat PT</label>
                    <input type="text" id="input-label"
                        class="block w-full px-4 py-3 text-sm border-2 rounded-md border-color-blue-1"
                        placeholder="masukkan alamat PT" name="alamat_pt">
                </div>
                <div class="">
                    <label for="input-label" class="block mb-2 text-sm font-medium">Email</label>
                    <input type="email" id="input-label"
                        class="block w-full px-4 py-3 text-sm border-2 rounded-md border-color-blue-1"
                        placeholder="masukkan email" name="email">
                </div>
                <div class="">
                    <label for="input-label" class="block mb-2 text-sm font-medium">No Telp/WA</label>
                    <input type="text" id="input-label"
                        class="block w-full px-4 py-3 text-sm border-2 rounded-md border-color-blue-1"
                        placeholder="+6289xxxxx" name="no_telp">
                </div>
                <div>
                    <label for="input-label" class="block mb-2 text-sm font-medium">Form Pengajuan</label>
                    <select class="block w-full px-4 py-3 text-sm border rounded-md pr-9 border-color-blue-1"
                        name="pengajuan">
                        <option selected value="Konsultasi SOP">Konsultasi SOP</option>
                        <option value="Mentoring Pegawai PT">Mentoring Pegawai PT</option>
                    </select>
                </div>
                <div>
                    <label for="input-label" class="block mb-2 text-sm font-medium">Deskripsi</label>
                    <textarea class="block w-full px-4 py-3 text-sm rounded-md border-color-blue-1" rows="3"
                        placeholder="Isi Deskripsi" class="deskripsi" name="deskripsi"></textarea>
                </div>
                <button type="submit"
                    class="px-6 py-3 text-sm text-white capitalize rounded-md bg-color-blue-4 hover:bg-blue-500">
                    <span>Submit</span>
                </button>

            </form>
        </div>
    </div>
@endsection
