@extends('layouts.main')
@section('content')
<div class="text-2xl">
    <p class=" text-gray-900 dark:text-white">
        MONITORING MAHASISWA
    </p>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-green-100">
    <form action="{{ route('dosen.monitoring.logbook.update', ['id' => $logbook->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                    Lengkap</label>
                <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $logbook->mahasiswa->user->name }}" readonly disabled>
            </div>
            <div>
                <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                <input type="number" id="nim" name="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $logbook->mahasiswa->nim }}" readonly disabled>

            </div>
            <div>
                <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                <input type="text" id="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $logbook->mahasiswa->jurusan }}" readonly disabled>

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
        </div> <br>
        @if ($logbook->file !== null)
        <div>
            <iframe src="{{ asset($logbook->file) }}" width="100%" height="600px"></iframe>
        </div>
        @endif
        <div>
            <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">catatan Dosen</label>
            <textarea id="catatan" rows="4" name="catatan" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>{{ $logbook->catatan == null ? 'tidak ada catatan' : $logbook->catatan }}</textarea>
        </div> <br>
        <div>
            <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>
</div>
@endsection
