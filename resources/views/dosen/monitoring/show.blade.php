@extends('dosen.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Logbook {{ $mahasiswa->user->name }}</h1>

            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            #
                        </th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal
                        </th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Logbook
                        </th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Catatan
                        </th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                        <!-- Add more table headers for additional columns -->
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($mahasiswa->logbooks as $logbook)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $logbook->tanggal_lapor }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($logbook->logbook, 50) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $logbook->Catatan == null ? 'tidak ada catatan' :
                            Str::limit($logbook->Catatan, 30) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('dosen.monitoring.logbook.show', ['id' => $logbook->id]) }}"
                                class="inline-block px-4 py-2 text-sm font-medium leading-5 text-black transition-colors duration-150 bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                                lihat loogbook
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection