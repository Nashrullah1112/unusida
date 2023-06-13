@extends('pages.main')

@section('content')


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-center">
                <th scope="col" class="px-6 py-3">
                    NIP
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Dosen
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Jenis Kelamin
                </th>
                <th scope="col" class="px-6 py-3">
                    Agama
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosen as $dosen)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$dosen->nip}}
                </th>
                <td class="px-6 py-4">
                    {{$dosen->nama}}
                </td>
                <td class="px-6 py-4">
                    {{$dosen->alamat}}
                </td>
                <td class="px-6 py-4">
                    {{$dosen->email}}
                </td>
                <td class="px-6 py-4">
                    {{$dosen->kelamin}}
                </td>
                <td class="px-6 py-4">
                    {{$dosen->agama}}
                </td>
               
                <td class="flex items-center px-6 py-4 space-x-3">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>



@endsection