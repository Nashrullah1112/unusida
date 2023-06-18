@extends('layouts.main')

@section('content')
    <div class="text-2xl">
        <p class=" text-gray-900 dark:text-white">
            PILIH DOSEN
        </p>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-6 bg-green-50  ">
        <form action="{{ route('admin.mentorship.update', ['id' => $mahasiswa->id]) }}" method="post">
            @csrf
            @method('put')
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Dosen</label>
            <select id="countries" name="id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                <option selected disabled>Select an option</option>
                @foreach ($dosens as $dosen)
                    <option value="{{ $dosen->id }}" {{ $mahasiswa->dosen_id == $dosen->id ? 'selected' : '' }}>
                        {{ $dosen->user->name }}</option>
                @endforeach

            </select>
            <div>
                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Submit</button>
            </div>
        </form>
    @endsection
