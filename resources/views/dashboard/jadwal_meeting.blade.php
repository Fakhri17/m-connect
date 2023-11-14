@extends('layouts.dashboard')

@section('content')
@php
		$arrayJadwal = [];

		foreach ($data_jadwal as $item) {
				$arrayJadwal[] = [
						'title' => $item->nama_pt,
						'waktu' => $item->waktu
				];
		}
@endphp

<div x-data="alpine_calendar()" x-init="connect()">
	<h3 class="mb-3 text-2xl font-semibold">Jadwal Meeting</h3>
	<div class="grid grid-cols-1 gap-6 md:grid-cols-2">
		<div id='calendar'></div>
		<div>
			<form action="{{ route('jadwal.meeting.store') }}" method="POST" class="mb-4">
				@csrf
				<div class="mb-2">
					<input type="text" name="nama_pt" placeholder="nama pt" class="mr-2">
					<input type="date" name="waktu">
				</div>

				<button type="submit"
					class="px-4 py-1 text-sm text-white rounded-md bg-color-blue-4 hover:bg-sky-700">Submit</button>
			</form>
			<div class="-m-1.5 overflow-x-auto">
				<div class="p-1.5 min-w-full inline-block align-middle">
					<div class="overflow-hidden border rounded-lg">
						<table class="min-w-full divide-y divide-gray-200 table-fixed">
							<thead class="bg-gray-100">
								<tr>
									<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase">Nama Pt
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase">Waktu
									</th>
									<th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase"></th>
								</tr>
							</thead>
							<tbody class="divide-y divide-gray-500 list">
								@foreach ($data_jadwal as $item)
								<tr>
									<td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap name">
										{{ $item->nama_pt }}
									</td>
									<td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">
										{{ date('d-m-Y', strtotime($item->waktu)) }}</td>
									<td class="flex flex-wrap items-center px-6 py-4 text-sm font-medium whitespace-nowrap">
										<form action="/dashboard/jadwal-meeting/destroy/{{ $item->id }}" method="post" class="inline">
											@csrf

											<button type="submit"
												class="px-4 py-1 mr-2 text-xs text-white rounded-md bg-color-blue-4 hover:bg-sky-700"
												onclick="return confirm('apakah data ingin dihapus?')">
												Hapus
											</button>
										</form>
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

@section('script')
	<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
	<script>
		var dataHolidays = @json($arrayJadwal);
		console.log(dataHolidays)
		function alpine_calendar(){
			return {
				connect(){   
					const calendarEl = document.getElementById('calendar');
					const calendar = new FullCalendar.Calendar(calendarEl, {
						headerToolbar: {
							left: 'prev,next today',
							center: 'title',
							right: 'dayGridMonth'
						},
						timeZone: "Asia/Jakarta",
						events: [
							{
								title  : 'event1',
								start  : '2023-07-19'
							},
							
						],
						// datesSet: (dateInfo) => {
						// 	const getDataDate = calendar.getDate();
						// 	const yearMonth = getDataDate.getFullYear() + '-' + (getDataDate.getMonth()+1)
						// 	const monthFormat = getDataDate.toLocaleString('default', { month: 'long' });

						// 	this.workMonth = monthFormat + ' ' + getDataDate.getFullYear();
						// 	this.daysCalendar = new Date(getDataDate.getFullYear(), getDataDate.getMonth()+1, 0).getDate();
						// 	this.holidays = calendar.getEvents().filter(event => event.id == yearMonth);
						// 	this.returnDaysCalendar = this.daysCalendar - this.holidays.length;
						// 	this.totalWorks = this.returnDaysCalendar * 3;

						// 	this.dataHolidays = [
						// 		{label: 'Bulan Kerja', data: this.workMonth, icons: 'ti-calendar'},
						// 		{label: 'Target Jam', data: this.totalWorks, icons: 'ti-clock'},
						// 		{label: 'Hari Kalender', data: this.returnDaysCalendar, icons: 'ti-calendar-event'},
						// 		{label: 'Hari Libur', data: this.holidays.length, icons: 'ti-calendar-off'},
						// 	];
						// },
						initialView: 'dayGridMonth',
					});
					calendar.render();
				},
			}
		}
	</script>
	<script>
		
	</script>
@endsection

