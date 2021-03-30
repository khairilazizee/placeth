@extends('welcome')

@section('mainbody')
    
    <div class="container mx-auto px-5 py-24">
        <div class="flex flex-wrap align-middle">
            <div class="w-4/12 mx-auto px-6 py-5 bg-white rounded-lg shadow-lg">
                <h2 class="font-bold text-gray-800">Login Form</h2>
                <form action="" method="post" class="mt-10">
                    @csrf
                    <label for="">Username</label>
                    <input type="text">

                    <label for="">Password</label>
                    <input type="password">
                </form>
            </div>
        </div>
    </div>

@endsection