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

    <form action="{{ route('admin.mentorship.update', ['id' => $mahasiswa->id]) }}" method="post">
        @csrf
        @method('put')

        <div class="relative inline-block w-64">
            <select
                class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow focus:outline-none focus:shadow-outline"
                name="id" required>
                <option disabled>Select an option</option>
                @foreach ($dosens as $dosen)
                <option value="{{ $dosen->id }}" {{ $mahasiswa->dosen_id == $dosen->id ? 'selected' : '' }}>{{
                    $dosen->user->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit"
            class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Submit
        </button>
    </form>
</div>
@endsection