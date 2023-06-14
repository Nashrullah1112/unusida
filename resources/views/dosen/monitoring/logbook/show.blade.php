@extends('dosen.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Logbook {{ $logbook->tanggal_lapor }}</h1>

            <form action="{{ route('dosen.monitoring.logbook.update', ['id' => $logbook->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="logbook" class="block text-gray-700 font-semibold mb-2">Logbook</label>
                    <textarea id="logbook" name="logbook" class="w-full px-4 py-2 border border-gray-300 rounded-md"
                        required disabled>{{ $logbook->logbook }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="Catatan" class="block text-gray-700 font-semibold mb-2">Catatan</label>
                    <textarea id="Catatan" name="Catatan"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md">{{ $logbook->Catatan }}</textarea>
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