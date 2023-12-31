@extends('layouts.dashboard')

@section('content')
@php
$status = $data->status;
$labelColor = '';
if($status == 'confirmed')
{
$labelColor = 'text-[#3FD2C7]';
}
else if($status == 'rejected')
{
$labelColor = 'text-[#F60000]';
}
@endphp
<div class="my-10">
	<div class="container mx-auto px-10">
		<div class="flex flex-wrap items-center mb-4">
			<h1 class="text-5xl font-bold">{{ $data->nama_pt }}</h1>
			@if ($data->status != "backlog")
				<h5 class="mx-5 uppercase text-lg font-semibold {{ $labelColor }}">{{ $data->status }}</h5>
			@endif
			@php
				$waMessage = "Halo, saya ingin menghubungi anda terkait pengajuan " . $data->pengajuan . " dari PT " .
				$data->nama_pt . ". Terima kasih.";
				$message = urlencode($waMessage);
				// format no based on country like 6281234567890
				$formattedNomer = preg_replace('/^0/', '62', $data->no_telp);
				$waApi = "https://api.whatsapp.com/send?phone=" . $formattedNomer . "&text=" . $message;
			@endphp
			<a class="px-4 py-1 text-xs text-white rounded-md bg-color-blue-4 hover:bg-sky-700" href="{{ $waApi }}">
				<div class="flex flex-wrap items-center">
					<iconify-icon icon="ic:baseline-whatsapp" class="text-base"></iconify-icon>
					<span class="ml-1">Hubungi</span>
				</div>
			</a>
		</div>
		<div>
			<p class="mb-3">{{ $data->deskripsi }}</p>
			<ul>
				<li class="mb-2 text-lg font-light">Nama Pengaju : <span class="font-semibold">{{ $data->nama }}</span> </li>
				<li class="mb-2 text-lg font-light">Alamat : <span class="font-semibold">{{ $data->alamat_pt }}</span> </li>
				<li class="mb-2 text-lg font-light">Email : <span class="font-semibold">{{ $data->email }}</span> </li>
				<li class="mb-2 text-lg font-light">No Telp/WA : <span class="font-semibold">{{ $data->no_telp }}</span> </li>
				<li class="mb-2 text-lg font-light">Jenis Pengajuan : <span class="font-semibold">{{ $data->pengajuan }}</span>
				</li>
			</ul>
			@if ($data->status == "backlog")
			<div class="flex flex-wrap items-center mt-3">
				<a class="py-1 px-4 text-sm bg-green-500 border text-white rounded-md hover:bg-green-600 mr-5"
					href="{{ route('dashboard.statusUpdate', ['type' => 'confirmed', 'id' => $data->id]) }}">Confirmed
				</a>
				<a class="py-1 px-4 text-sm bg-red-500 border text-white rounded-md hover:bg-red-600 mr-5"
					href="{{ route('dashboard.statusUpdate', ['type' => 'rejected', 'id' => $data->id]) }}">Rejected
				</a>
			</div>
			@endif
			{{-- back to /dashboard --}}
			<div class="mt-5">
				<a class="text-color-blue-4 hover:underline text-base" href="{{ route('dashboard') }}">Kembali</a>
			</div>

		</div>
	</div>
</div>
@endsection