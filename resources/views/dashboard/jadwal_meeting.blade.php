@extends('layouts.dashboard')

@section('content')
	<div>
		<h3 class="text-2xl mb-3 font-semibold">Jadwal Meeting</h3>
		<div class="grid grid-cols-1 md:grid-cols-2 items-center gap-3">
			<div></div>
		</div>
	</div>
	<form action="{{ route('jadwal.meeting.store') }}" method="POST">
		@csrf
		<input type="text" name="nama_pt" placeholder="nama pt">
		<input type="date" name="waktu">
		<button type="submit">Submit</button>
	</form>

	@foreach ($data_jadwal as $item)
	<ul>
		<li>{{ $item->nama_pt }}</li>
		<li>{{ $item->waktu }}</li>
		<li><a href="{{ route('jadwal.meeting.destroy', ['id' => $item->id]) }}"
				onclick="return confirm('apakah data ingin dihapus?')">Delete</a></li>
	</ul>
	@endforeach
@endsection

