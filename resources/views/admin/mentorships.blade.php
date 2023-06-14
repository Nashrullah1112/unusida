@extends('admin.layouts.main')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-green-50">
    {{-- Text Message Start --}}
    <div>
        <p>
            Pilih Dosen Pembimbing untuk Mahasiswa
        </p>
    </div>
    {{-- Text Message --}}

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-grey-700 uppercase bg-green-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    NIM
                </th>
                <th scope="col" class="px-6 py-3">
                    Angkatan
                </th>
                <th scope="date" class="px-6 py-3">
                    Semester
                </th>
                <th scope="date" class="px-6 py-3">
                    Program
                </th>
                <th scope="date" class="px-6 py-3">
                    Pembimbing
                </th>
                <th scope="date" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-black-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4">
                    {{ $mahasiswa->user->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $mahasiswa->nim }}
                </td>
                <td class="px-6 py-4">
                    {{ $mahasiswa->tahun_angkatan }}
                </td>
                <td class="px-6 py-4">
                    Semester {{ $mahasiswa->semester }}
                </td>
                <td class="px-6 py-4">
                    {{ $mahasiswa->program }}
                </td>
                <td class="px-6 py-4">
                    {{ $mahasiswa->dosen->user->name }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('admin.mentorship', ['id' => $mahasiswa->id]) }}" class="">
                        Edit Dosen Pembimbing
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection