@extends('admin.layouts.main')

@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-green-50">
        {{-- Text Message Start  --}}
        <div>
            <p>
                Verifikasi Akun yang telah di registrasi oleh mahasiswa atau dosen
            </p>
        </div>
        {{-- Text Message --}}

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
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="date" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="date" class="px-6 py-3">
                        Status Verifikasi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row" class="px-6 py-4 font-medium text-black-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->role }}
                        </td>
                        <td class="px-6 py-4">
                            {{ date('d M Y', strtotime($user->created_at)) }}
                        </td>
                        <td class="px-6 py-4">

                            @switch($user->verified)
                                @case(true || 1)
                                    <p
                                        class="text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Verified
                                    </p>
                                @break

                                @case(false || 0)
                                    <form method="POST" action="{{ route('admin.verify', ['id' => $user->id]) }}">
                                        @csrf
                                        @method('PUT')

                                        <input type="submit" value="Verify" name="verified"
                                            class="text-white bg-red-500 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    </form>
                                @break

                                @default
                            @endswitch

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
