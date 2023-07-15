@extends('layouts.dashboard')

@section('content')
    <div class="flex flex-col bg-white border shadow-sm rounded-xl">
        <div class="-m-1.5 overflow-x-auto">
            <a href="{{ route('dashboard.destroy') }}" class="px-3 py-3 text-white bg-red-800 rounded-lg">Delete Rejected</a>
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden border rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed">
                        <thead class="bg-gray-100">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase">Name</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase">PT</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase">Email</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-left uppercase"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-500 ">
                            @foreach ($data as $item)
                                @php
                                    $status = $item->status;
                                    $tableColor = '';
                                    if ($status == 'confirmed') {
                                        $tableColor = 'bg-[#3FD2C7]/[.3]';
                                    } elseif ($status == 'rejected') {
                                        $tableColor = 'bg-[#F60000]/[.3]';
                                    }
                                @endphp
                                <tr class="{{ $tableColor }}">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap">
                                        {{ $item->nama }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $item->nama_pt }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $item->email }}</td>
                                    <td class="flex flex-wrap items-center px-6 py-4 text-sm font-medium whitespace-nowrap">
                                        <a class="px-4 py-1 mr-2 text-xs text-white rounded-md bg-color-blue-4 hover:bg-sky-700"
                                            href="/dashboard/{{ $item->id }}">Detail</a>
                                        <a class="px-4 py-1 text-xs text-white rounded-md bg-color-blue-4 hover:bg-sky-700"
                                            href="#">Hubungi</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
