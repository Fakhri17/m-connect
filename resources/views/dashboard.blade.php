{{-- Data Dari Form Pengajuan --}}
@foreach ($data as $item)
    <ul>
        <li>{{ $item->nama }}</li>
        <li>{{ $item->nama_pt }}</li>
        <li>{{ $item->alamat_pt }}</li>
        <li>{{ $item->email }}</li>
        <li>{{ $item->no_telp }}</li>
        <li>{{ $item->pengajuan }}</li>
        <li>{{ $item->deskripsi }}</li>
    </ul><br>
@endforeach
