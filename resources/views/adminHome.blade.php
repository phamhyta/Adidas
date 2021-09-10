@extends('layout.adminHeader')
@section('adminContent')
    <div class="h-screen bg-gray-200 relative">
        <div class=" pt-72">
            <ul class="flex flex-row justify-around">
                <li>
                    <button class="px-20 py-10 border border-gray-300 bg-gray-300 text-black hover:bg-gray-400 hover:border-gray-400">Admin account</button>
                </li>
                <li>
                    <button class="px-20 py-10 border border-gray-300 bg-gray-300 text-black hover:bg-gray-400 hover:border-gray-400">Customer</button>
                </li>
                <li>
                    <button class="px-20 py-10 border border-gray-300 bg-gray-300 text-black hover:bg-gray-400 hover:border-gray-400">Product</button>
                </li>
            </ul>
        </div>
    </div>
@endsection