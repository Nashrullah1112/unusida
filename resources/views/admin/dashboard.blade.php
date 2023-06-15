@extends('pages.main')
@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-green-50">
    {{-- Select button start --}}
    <div class="flex items-end gap-5  pb-4">

        <form>
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-gentol-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 search"
                    placeholder="" required>
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>
                <span class="counter pull-right"></span>
            </div>
        </form>
    </div>



    {{-- Text Message Start --}}
    <div>
        <p>
            Arahkan Mahasiswa untuk mendaftarkan tempat KP pada laman :
            Bila status persetujuan <b>DITERIMA</b> atau status dokumen <b>SEDANG DIPROSES</b>, maka mahasiswa tidak
            dapat membatalkan pengajuannya
        </p>
    </div>
    {{-- TExt Message --}}

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 results">
        <thead class="text-xs text-grey-700 uppercase bg-green-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
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
                <th scope="col" class="px-6 py-3">
                    Tangal
                </th>
                <th scope="date" class="px-6 py-3">
                    Status Verifikasi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-black-900 whitespace-nowrap dark:text-white">
                    {{ $user->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $user->email }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->role }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->created_at }}
                </td>
                <td class="px-6 py-4">
                    @switch($user->verified)
                    @case(true || 1)
                    <button type="button"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Tolak</button>
                    @break

                    @case(false || 0)
                    <form method="POST" action="{{ route('admin.verify', ['id' => $user->id]) }}">
                        @csrf
                        @method('PUT')
                        {{-- <button type="button"
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Terima</button>
                        --}}

                        <input type="submit" value="Verify" name="verified"
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    </form>
                    @break
                    @endswitch
                </td>
            </tr>
            @endforeach

            {{-- @endforeach
            --}}
        </tbody>
    </table>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $(".search").keyup(function () {
            var searchTerm = $(".search").val().toLowerCase();
            var listItem = $('.results tbody').children('tr');
            
            listItem.each(function () {
                var text = $(this).text().toLowerCase();
                if (text.indexOf(searchTerm) === -1) {
                    $(this).addClass('hidden');
                } else {
                    $(this).removeClass('hidden');
                }
            });
            
            var visibleItems = listItem.filter(':visible').length;
            $('.counter').text(visibleItems + ' item');
            
            if (visibleItems === 0) {
                $('.no-result').show();
            } else {
                $('.no-result').hide();
            }
        });
    });
</script>
@endsection