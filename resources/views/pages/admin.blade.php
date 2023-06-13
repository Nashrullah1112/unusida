@extends('pages.main')

@section('content')


<div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-green-50">
    {{-- Select button start --}}
    <div class="flex items-end gap-5  pb-4">
        <div>
            <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
            <select id="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih Jurusan </option>
                <option value="Tekkim">Teknik Kimia</option>
                <option value="Tekindus">Teknik Industri</option>
                <option value="Tekling">Teknik Lingkungan</option>
                <option value="SI">Sistem Informasi</option>
                <option value="TI">Teknik Informatika</option>
                <option value="DKV">DKV (Desain Komunikasi Visual)</option>
                <option value="MNJ">Manajemen</option>
                <option value="AKT">Akutansi</option>
                <option value="PBI">Pendidikan Bahasa Inggris</option>
                <option value="PGSD">PGSD (Pendidikan Guru Sekolah Dasar)</option>
            </select>      
        </div>
        <div>
                
            <label for="tahun ajaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Ajaran</label>
            <select id="tahun ajaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
            </select>

        </div>
        <div>
                
            <label for="Semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
            <select id="Semester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-64 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>08</option>
                <option>09</option>
            </select>

        </div>
        {{-- Button regitrasi peserta  --}}
        <button type="button" class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
              </svg>
              
            <span class="sr-only">Icon description</span>
          </button>
            {{-- end Button regitrasi peserta --}}
    </div>
{{-- Select Button End --}}

  
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
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Lokasi KP/KKN
                </th>
                <th scope="col" class="px-6 py-3">
                    Bulan-Tahun
                </th>
                {{-- <th scope="col" class="px-6 py-3">
                    Alamat-Kota
                </th> --}}
                <th scope="col" class="px-6 py-3">
                    NRP-Nama Mahasiswa 
                </th>
                <th scope="col" class="px-6 py-3">
                    Dosen Pembimbing
                </th>
                {{-- <th scope="col" class="px-6 py-3">
                    Status
                </th>     --}}
                {{-- <th scope="col" class="px-6 py-3">
                    Catatan dan Komentar
                </th>    
                <th scope="col" class="px-6 py-3">
                    Status dokumen administrasi
                </th>     --}}
                <th scope="col" class="px-6 py-3">
                    Lama KP/KKN
                </th>    
                <th scope="date" class="px-6 py-3">
                    Tanggal
                </th>    
            </tr>
        </thead>
        <tbody>
            @foreach ($programs as $key=> $data )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-black-900 whitespace-nowrap dark:text-white">
                    {{ $data->nama_lokasi }}
                </th>
                <td class="px-6 py-4">
                    {{ $data->waktu_mulai }}
                </td>
                {{-- <td class="px-6 py-4">
                    {{  }}
                </td> --}}
                <td class="px-6 py-4">
                    {{ $data->mahasiswa->nim }}
                </td>
                <td class="px-6 py-4">
                    {{ $data->dosen->nama }}
                    {{-- <select id="small" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option selected></option>
                      <option value="US">United States</option>
                     
                    </select> --}}
                </td>
                {{-- <td class="px-6 py-4">
                    <select id="small" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected></option>
                        <option value="US">United States</option>
                       
                      </select>
                </td> --}}
                {{-- <td class="px-6 py-4">
                    -
                </td>
                <td class="px-6 py-4">
                    Selesai
                </td> --}}
                <td class="px-6 py-4">
                    {{ $data->durasi }}
                </td>
                <td class="px-6 py-4">
                    {{ $data->waktu_mulai }}
                    {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                </td>
                
            </tr>
                
            @endforeach
            
        </tbody>
    </table>
</div>


@endsection