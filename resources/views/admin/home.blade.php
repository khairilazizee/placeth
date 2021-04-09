@extends('welcome')

@section('mainbody')

@include('admin.topbar')

<div class="w-full h-screen bg-gray-50">
<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="grid grid-cols-4 -m-4 gap-1">
            <a href="">
                <div class="p-5 w-full bg-blue-500 text-black shadow-md">
                    <i class="fas fa-plus float-right align-middle"></i>
                    <h2 class="text-3xl font-semibold text-black">2.7k</h2>
                    <p>Businesses</p>
                </div>
            </a>
            <a href="">
                <div class="p-5 w-full bg-green-500 text-black shadow-md">
                    <i class="fas fa-eye float-right align-middle"></i>
                    <h2 class="text-3xl font-semibold text-black">2.7k</h2>
                    <p>Products</p>
                </div>
            </a>
            <a href="">
                <div class="p-5 w-full bg-yellow-500 text-black shadow-md">
                    <i class="fas fa-plus float-right align-middle"></i>
                    <h2 class="text-3xl font-semibold text-black">2.7k</h2>
                    <p>Users</p>
                </div>
            </a>
            <a href="">
                <div class="p-5 w-full bg-red-500 text-black shadow-md">
                    <i class="fas fa-eye float-right align-middle"></i>
                    <h2 class="text-3xl font-semibold text-black">2.7k</h2>
                    <p>Reviews</p>
                </div>
            </a>
        </div>
    </div>
</section>
</div>

@endsection