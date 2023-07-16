@extends('layouts.dashboard')

@section('content')
	<div>
		<h3 class="text-2xl mb-3 font-semibold">Jadwal Meeting</h3>
		<div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
			<div></div>
			<div>
				<form action="{{ route('jadwal.meeting.store') }}" method="POST" class="mb-4">
					@csrf
					<div class="mb-2">
						<input type="text" name="nama_pt" placeholder="nama pt" class="mr-2">
						<input type="date" name="waktu">
					</div>
					
					<button type="submit" class="px-4 py-1 text-sm text-white rounded-md bg-color-blue-4 hover:bg-sky-700">Submit</button>
				</form>
				<div class="-m-1.5 overflow-x-auto">
					<div class="p-1.5 min-w-full inline-block align-middle">
						<div class="overflow-hidden border rounded-lg">
							<table class="min-w-full divide-y divide-gray-200 table-fixed">
								<thead class="bg-gray-100">
									<tr>
										<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase">Nama Pt</th>
										<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase">Waktu</th>
										<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase"></th>
									</tr>
								</thead>
								<tbody class="divide-y divide-gray-500 list">
									@foreach ($data_jadwal as $item)
										
									<tr >
										<td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap name">
											{{ $item->nama_pt }}
										</td>
										<td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">{{ date('d-m-Y', strtotime($item->waktu)); }}</td>
										<td class="flex flex-wrap items-center px-6 py-4 text-sm font-medium whitespace-nowrap">
											<a class="px-4 py-1 mr-2 text-xs text-white rounded-md bg-color-blue-4 hover:bg-sky-700"
												href="{{ route('jadwal.meeting.destroy', ['id' => $item->id]) }}" 
												onclick="return confirm('apakah data ingin dihapus?')">
												Hapus
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
	</div>
	
@endsection

