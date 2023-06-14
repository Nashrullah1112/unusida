@extends('dosen.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if($dosen && $dosen->alamat && $dosen->nip && $dosen->gender && $dosen->agama)
            <p>Your profile is already complete. No additional information required.</p>
            @else
            <form action="{{ route('dosen.profile', ['id' => Auth::id()]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 font-bold mb-2">Alamat:</label>
                    <textarea id="alamat" name="alamat"
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="4" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="nip" class="block text-gray-700 font-bold mb-2">NIP:</label>
                    <input id="nip" name="nip" type="number" max="9999999999"
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <div class="mb-4">
                    <label for="gender" class="block text-gray-700 font-bold mb-2">Gender:</label>
                    <select id="gender" name="gender"
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                        <option selected disabled>Select gender</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="agama" class="block text-gray-700 font-bold mb-2">Agama:</label>
                    <select id="agama" name="agama"
                        class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                        <option selected disabled>Select religion</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
                </div>
            </form>
            @endif

        </div>
    </div>
</div>
@endsection