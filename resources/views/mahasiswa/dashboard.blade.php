@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if($mahasiswa && $mahasiswa->alamat && $mahasiswa->nim && $mahasiswa->gender && $mahasiswa->agama &&
            $mahasiswa->jurusan && $mahasiswa->tahun_angkatan && $mahasiswa->semester && $mahasiswa->program)
            <p>Your profile is already complete. No additional information required.</p>
            @else
            <form action="{{ route('mahasiswa.profile', ['id' => Auth::id()]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nim" class="block text-gray-700 font-bold mb-2">NIM:</label>
                    <input id="nim" name="nim" type="number" max="9999999999" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required value="">
                </div>

                <div class="mb-4">
                    <label for="gender" class="block text-gray-700 font-bold mb-2">Gender:</label>
                    <select id="gender" name="gender" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option selected disabled>Select gender</option>
                        <option value="laki-laki">Laki-laki
                        </option>
                        <option value="perempuan">Perempuan
                        </option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="agama" class="block text-gray-700 font-bold mb-2">Agama:</label>
                    <select id="agama" name="agama" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option selected disabled>Select religion</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen
                        </option>
                        <option value="katolik">Katolik
                        </option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu
                        </option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="jurusan" class="block text-gray-700 font-bold mb-2">Jurusan:</label>
                    <select id="jurusan" name="jurusan" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option selected disabled>Select religion</option>
                        <option value="Tenik Industri">Tenik
                            Industri</option>
                        <option value="Teknik Kimia">Teknik
                            Kimia</option>
                        <option value="Teknik Lingkungan">Teknik
                            Lingkungan</option>
                        <option value="Sistem Informasi">Sistem
                            Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                        <option value="Manajemen">Manajemen
                        </option>
                        <option value="Akuntansi">Akuntansi
                        </option>
                        <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                        <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tahun_angkatan" class="block text-gray-700 font-bold mb-2">Tahun Angkatan:</label>
                    <input id="tahun_angkatan" name="tahun_angkatan" type="number" max="9999999999" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required value="">
                </div>

                <div class="mb-4">
                    <label for="semester" class="block text-gray-700 font-bold mb-2">Semester:</label>
                    <input id="semester" name="semester" type="number" max="9999999999" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required value="">
                </div>

                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 font-bold mb-2">Alamat:</label>
                    <textarea id="alamat" name="alamat" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="program" class="block text-gray-700 font-bold mb-2">Program:</label>
                    <select id="program" name="program" class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option selected disabled>Select Program</option>
                        <option value="kkn">KKN
                        </option>
                        <option value="kp">KP
                        </option>
                    </select>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
                </div>
            </form>
            @endif

        </div>
    </div>
</div>
@endsection
