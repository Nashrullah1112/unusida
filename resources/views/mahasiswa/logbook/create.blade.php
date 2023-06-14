@extends('dosen.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Tambah Logbook</h1>

            <form action="{{ route('mahasiswa.logbook.insert') }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-4">
                    <label for="logbook" class="block text-gray-700 font-semibold mb-2">Logbook</label>
                    <textarea id="logbook" name="logbook" class="w-full px-4 py-2 border border-gray-300 rounded-md"
                        required></textarea>
                </div>

                <div class="mb-4">
                    <label for="tanggal_lapor" class="block text-gray-700 font-semibold mb-2">Tanggal Lapor</label>
                    <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-md" name="tanggal_lapor"
                        id="tanggal_lapor" />
                </div>

                <div class="mt-8">
                    <button type="submit"
                        class="px-4 py-2 bg-blue-500 text-black font-semibold rounded-md hover:bg-blue-600">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection