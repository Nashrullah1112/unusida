@extends('pages.login_main')
@section('content')
<section class=" flex bg-gray-50 dark:bg-gray-900">
    <div class="w-[1000px] flex justify-center items-center">
        <img class="w-[600px]" src="{{asset('/img/signup.png')}}" alt="">
    </div>
    <div class="w-2/5 flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Create an account
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <label for="TEXT" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Lengkap</label>
                        <input type="TEXT" name="name" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="name@company.com" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="name@company.com" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" required autocomplete="new-password">

                        @error('password')
                        <span class="text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                            password</label>
                        <input type="password" name="password_confirmation" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" required autocomplete="new-password">
                        <br>
                        <div>
                            <fieldset>
                                <div class="flex items-center mb-4">
                                    <input id="country-option-1" type="radio" name="role" value="mahasiswa" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-green-600 dark:focus:bg-green-600 dark:bg-gray-700 dark:border-gray-600" checked>
                                    <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Mahasiswa
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="country-option-2" type="radio" name="role" value="dosen" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-green-300 dark:focus:ring-green-600 dark:focus:bg-green-600 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                        Dosen
                                    </label>
                                </div>
                                @error('role')
                                <span class="text-red-500" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </fieldset>
                        </div>
                    </div>
                    <button type="submit" class="w-full text-white bg-green-600 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-700 dark:focus:ring-green-500">Create
                        an account</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
