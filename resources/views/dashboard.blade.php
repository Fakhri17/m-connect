{{-- Data Dari Form Pengajuan --}}

<form action="/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

@foreach ($data as $item)
    <ul>
        <li>{{ $item->nama }}</li>
        <li>{{ $item->nama_pt }}</li>
        <li>{{ $item->alamat_pt }}</li>
        <li>{{ $item->email }}</li>
        <li>{{ $item->no_telp }}</li>
        <li>{{ $item->pengajuan }}</li>
        <li>{{ $item->deskripsi }}</li>
        <li>
            <a href="/dashboard/{{ $item->id }}">Detail</a>
        </li>
    </ul><br>
@endforeach
