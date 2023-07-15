{{-- Data Dari Form Pengajuan --}}
<ul>
    <li>{{ $data->nama }}</li>
    <li>{{ $data->nama_pt }}</li>
    <li>{{ $data->alamat_pt }}</li>
    <li>{{ $data->email }}</li>
    <li>{{ $data->no_telp }}</li>
    <li>{{ $data->pengajuan }}</li>
    <li>{{ $data->deskripsi }}</li>
    <li>
        <a href="{{ route('dashboard.statusUpdate', ['type' => 'confirmed', 'id' => $data->id]) }}">Success</a>
        <a href="{{ route('dashboard.statusUpdate', ['type' => 'rejected', 'id' => $data->id]) }}">Rejected</a>
    </li>
</ul><br>
