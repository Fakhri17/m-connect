@extends('layouts.dashboard')

@section('content')
 

<div class="flex flex-col bg-white border shadow-sm rounded-xl">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div class="border rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200 table-fixed">
          <thead class="bg-gray-100">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase">Name</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase">PT</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase">Email</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase"></th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-500 ">
            @foreach ($data as $item)
            @php
                $status = $item->status;
                $tableColor = '';
                if($status == 'confirmed')
                {
                  $tableColor = 'bg-[#3FD2C7]/[.3]';
                }
                else if($status == 'rejected')
                {
                  $tableColor = 'bg-[#F60000]/[.3]';
                }
            @endphp
              <tr class="{{ $tableColor }}">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{ $item->nama }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $item->nama_pt }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $item->email }}</td>
                <td class="px-6 py-4 flex flex-wrap items-center whitespace-nowrap text-sm font-medium">
                  <a class="py-1 px-4 text-xs bg-color-blue-4 text-white rounded-md mr-2 hover:bg-sky-700" href="/dashboard/{{ $item->id }}">Detail</a>
                  <a class="py-1 px-4 text-xs bg-color-blue-4 text-white rounded-md hover:bg-sky-700" href="#">Hubungi</a>
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


