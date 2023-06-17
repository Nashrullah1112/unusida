@extends('admin.layouts.main')

@section('content')
<div >
  <p class="text-2xl font- text-gray-900 dark:text-white">
      PILIH DOSEN
  </p>
</div>
<div class="bg-green-100 p-7 rounded-lg">

<div class="bg-green-100 p-6 rounded-lg">
  <label for="countries" class="block mb-2 text-sm font-medium text-green-900 dark:text-white">Nama Dosen</label>
  <select id="countries" class="bg-green-50 border border-green-300 text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
      <option selected>Nama Dosen</option>
      <option value="US">Yudi Sembarang S.Psi</option>
  </select>
</div>
</select>

@endsection