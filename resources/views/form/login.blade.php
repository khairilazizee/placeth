@extends('welcome')

@section('mainbody')
    
    <div class="container mx-auto px-5 py-24 h-screen">
        <div class="flex flex-col-h align-middle">
            <div class="w-4/12 mx-auto px-6 py-5 bg-white rounded-lg shadow-lg">
                @if(session('status'))
                <div class="px-3 py-2 bg-red-100 font-semibold w-full rounded">
                    {{ session('status') }}
                </div>
                @endif
                <h2 class="font-bold text-center text-3xl text-gray-800">Login</h2>
                <form action="{{ url('login') }}" method="post" class="mt-10">
                    @csrf
                    <label for="" class="block mt-10 font-semibold uppercase text-xs">E-mail</label>
                    <input type="text" name="email" id="email" class="block w-full border-b-2 py-3 px-1 mt-4 appearance-none border-gray-100" placeholder="E-mail address">

                    @error('email')
                        <div class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="" class="block mt-10 font-semibold uppercase text-xs">Password</label>
                    <input type="password" name="password" id="password" class="block w-full border-b-2 py-3 px-1 mt-4 appearance-none border-gray-100" placeholder="Password">

                    @error('password')
                        <div class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    <input type="checkbox" name="remember" id="remember">
                    <label for="">Remember me</label>

                    <button class="w-full mt-10 py-3 bg-blue-500 text-white hover:bg-blue-700">Log In</button>

                    <div class="sm:flex sm:flex-wrap mt-8 sm:mb-4 text-sm text-center">
                        <a href="forgot-password" class="flex-2 underline">
                            Forgot password?
                        </a>
    
                        <p class="flex-1 text-gray-500 text-md mx-4 my-1 sm:my-auto">
                            or
                        </p>
            
                        <a href="{{ url('register') }}" class="flex-2 underline">
                            Create an Account
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection