@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<h1 class="text-2xl font-bold mb-4 text-center">Daftar Tugas</h1>

<div class="max-w-3xl mx-auto">
    @foreach ($tugasPerMatkul as $matkul => $daftar)
        <div class="kartu gaya-ig rounded-2xl shadow overflow-x-auto mb-6">
            <h2 class="px-4 py-2 font-bold text-center bg-indigo-500 text-white">{{ $matkul }}</h2>

            <table class="w-full text-center">
                <thead class="bg-gray-100 text-gray-600 text-sm font-medium">
                    <tr>
                        <th class="px-3 py-1.5">Tugas</th>
                        <th class="px-3 py-1.5">Deadline</th>
                        <th class="px-3 py-1.5">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar as $item)
                        <tr class="border-t">
                            <td class="px-3 py-1.5">{{ $item['nama'] }}</td>
                            <td class="px-3 py-1.5">{{ $item['Deadline'] }}</td>
                            <td class="px-3 py-1.5">
                                <span class="px-2 py-0.5 rounded-full text-xs font-medium
                                    {{ $item['Status'] == 'Selesai' ? 'bg-green-100 text-green-700' : ($item['Status'] == 'Proses' ? 'bg-yellow-100 text-yellow-700' : 'bg-red-100 text-red-700') }}">
                                    {{ $item['Status'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>
@endsection