@extends('layouts.dashboard')

@section('content')
<div>
	<div class="flex flex-wrap items-center justify-between mb-10">
		<div>
			<h3 class="text-2xl mb-3 font-semibold">List Pengajuan</h3>
			<div class="flex flex-wrap items-center">
				<div class="mr-5 flex flex-wrap items-center">
					<div class="bg-[#3FD2C7] w-6 h-6"></div>
					<span class="ml-3">Confirmed + paid</span>
				</div>
				<div class="mr-5 flex flex-wrap items-center">
					<div class="bg-[#F60000] w-6 h-6"></div>
					<span class="ml-3">Rejected</span>
				</div>
			</div>
		</div>
		<div>
			<a href="{{ route('dashboard.destroy') }}" class="px-3 py-2 text-sm text-white bg-[#F60000] hover:bg-red-600 rounded-md my-10">Delete Rejected</a>
		</div>
	</div>
	
	<div id="pengajuan-list" class="flex flex-col bg-white border shadow-sm rounded-xl">
		<div class="py-3 px-5 flex items-center justify-between">
			<div>
				<button class="py-1 px-3 bg-color-blue-4 text-white rounded-md">Blast Email</button>
			</div>
			<div class="shrink">
				<input class="search rounded-md w-52 text-xs" placeholder="cari nama pengaju/nama pt.." />
			</div>
			
		</div>
		<div class="-m-1.5 overflow-x-auto">
			<div class="p-1.5 min-w-full inline-block align-middle">
				<div class="overflow-hidden border rounded-lg">
					<table class="min-w-full divide-y divide-gray-200 table-fixed">
						<thead class="bg-gray-100">
							<tr>
								<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase">Name</th>
								<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase">PT</th>
								<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase">Email</th>
								<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase hidden">Crated</th>
								<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase"></th>
							</tr>
						</thead>
						<tbody class="divide-y divide-gray-500 list">
							@foreach ($data as $item)
								@php
									$status = $item->status;
									$tableColor = '';
									if ($status == 'confirmed') {
										$tableColor = 'bg-[#3FD2C7]/[.3]';
									} 
									else if ($status == 'rejected') {
										$tableColor = 'bg-[#F60000]/[.3]';
									}
									
									$waMessage = "Halo, saya ingin menghubungi anda terkait pengajuan " . $item->pengajuan . " dari PT " . $item->nama_pt . ". Terima kasih.";
									$message = urlencode($waMessage);
									// format no based on country like 6281234567890
									$formattedNomer = preg_replace('/^0/', '62', $item->no_telp);
									$waApi = "https://api.whatsapp.com/send?phone=" . $formattedNomer . "&text=" . $message;
									
								@endphp
							<tr class="{{ $tableColor }}">
								<td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap name">
									{{ $item->nama }}</td>
								<td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap nama-pt">{{ $item->nama_pt }}</td>
								<td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $item->email }}</td>
								<td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap hidden created-at">{{ $item->created_at }}</td>
								<td class="flex flex-wrap items-center px-6 py-4 text-sm font-medium whitespace-nowrap">
									<a class="px-4 py-1 mr-2 text-xs text-white rounded-md bg-color-blue-4 hover:bg-sky-700"
										href="/dashboard/{{ $item->id }}">Detail</a>
									<a class="px-4 py-1 text-xs text-white rounded-md bg-color-blue-4 hover:bg-sky-700" href="{{ $waApi }}">
										<div class="flex flex-wrap items-center">
											<iconify-icon icon="ic:baseline-whatsapp" class="text-base"></iconify-icon>
											<span class="ml-1">Hubungi</span>
										</div>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
 <script>
	var options = {
    valueNames: [ 'name', 'nama-pt', 'created-at']
	};

	var hackerList = new List('pengajuan-list', options);
 </script>
@endsection