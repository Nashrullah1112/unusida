@extends('pages.main')
@section('content')
<div >
  <p class="text-2xl font- text-gray-900 dark:text-white">
      PROFILE DOSEN
  </p>
</div>
<div class="bg-green-100 p-7 rounded-lg">

  
<form>
    <div class="relative z-0 w-full mb-6 group">
        <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIP</label>
    </div>
    <div class="relative z-0 w-full mb-6 group">   
        <label for="underline_select" class="sr-only">Agama</label>
        <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            <option selected>Pilih Agama</option>
            <option value="IS">Islam</option>
            <option value="KR">Kristen</option>
            <option value="HI">Hindu</option>
            <option value="BU">Buddha</option>
        </select>
    </div>
    <div class="relative z-0 w-full group">
        
<fieldset>
    <legend class="sr-only">Agama</legend>
  
    <div class="flex items-center mb-4">
      <input id="country-option-1" type="radio" name="agama" value="USA" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-green-600 dark:focus:bg-green-600 dark:bg-gray-700 dark:border-black-600" checked>
      <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
        Pria
      </label>
    </div>
  
    <div class="flex items-center mb-4">
      <input id="country-option-2" type="radio" name="agama" value="Germany" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-green-600 dark:focus:bg-green-600 dark:bg-gray-700 dark:border-black-600">
      <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
        Wanita
      </label>
    </div>
  </fieldset>
  
    </div>  
    <div class="relative z-0 w-full group">
        <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
    </div>  
</form>
</div>
@endsection