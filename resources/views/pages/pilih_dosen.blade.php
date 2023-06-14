@extends('admin.layouts.main')

@section('content')

<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Dosen</label>
<select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
  <option selected>Nama Dosen</option>
  <option value="US">Yudi Sembarang S.Psi</option>
  
</select>

@endsection