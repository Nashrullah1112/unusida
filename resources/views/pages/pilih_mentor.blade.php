@extends('pages.main')
@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-green-50">
    {{-- Select button start --}}
    <div class="flex items-end gap-5  pb-4">
        
<form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-gentol-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Search Mockups, Logos..." required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>
    </div>
</form>
    </div>


  
    {{-- Text Message Start  --}}
<div>
        <p>
            Arahkan Mahasiswa untuk mendaftarkan tempat KP pada laman :
            Bila status persetujuan <b>DITERIMA</b> atau status dokumen <b>SEDANG DIPROSES</b>, maka mahasiswa tidak dapat membatalkan pengajuannya
        </p>
    </div>
    {{-- TExt Message --}}

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
                    Pilih Dosen Pembimbing
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-black-900 whitespace-nowrap dark:text-white">
                    #
                </th>
                <td class="px-6 py-4">
                    Ahmad
                </td>
                <td class="px-6 py-4">
                    31205000
                </td>
                <td class="px-6 py-4">
                    2019
                </td>
                <td class="px-6 py-4">
                    Semester 6
                </td>
                <td class="px-6 py-4">
                    KKN
                </td>
                <td class="px-6 py-4">
                      Yudi Sembarang S.Psi
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Edit Dosen Pembimbing
                    </a>
                </td>
            </tr>
                
            {{-- @endforeach
             --}}
        </tbody>
    </table>
</div>
@endsection

