@extends('layouts.main')
@section('content')
<div>
    <p class="text-2xl font- text-gray-900 dark:text-white">
        LOGBOOK MAHASISWA
    </p>
</div>
<div class="bg-green-100 p-7 rounded-lg">
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Lengkap</label>
            <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ Auth::user()->name }}" readonly disabled>
        </div>
        <div>
            <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
            <input type="number" id="nim" name="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ Auth::user()->mahasiswa->nim }}" readonly disabled>
        </div>
        <div>
            <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
            <input type="text" id="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ Auth::user()->mahasiswa->jurusan }}" readonly disabled>
        </div>
        <div>
            <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal </label>
            <input type="date" id="tanggal" name="tanggal_lapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $logbook->tanggal_lapor }}" readonly disabled>

        </div>
    </div>
    <div>
        <label for="logbook" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laporan
            Kegiatan</label>
        <textarea id="logbook" rows="4" name="logbook" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly disabled>{{ $logbook->logbook }}</textarea>

    </div>
    <div>
        <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">catatan Dosen</label>
        <textarea id="catatan" rows="4" name="catatan" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly disabled>{{ $logbook->catatan == null ? 'tidak ada catatan' : $logbook->catatan }}</textarea>
    </div> <br>
    @if ($logbook->file !== null)
    <div>
        <iframe src="{{ asset($logbook->file) }}" width="100%" height="600px"></iframe>
    </div>
    @endif
</div>
@endsection
