@extends('layout.header')
@section('content')

<div><h1 class="pt-20 text-2xl text-center">CUSTOMER LOGIN</h1></div>
<div class="flex flex-row justify-around pb-40">
    <div class="py-20 w-1/3">
        <div>
            <h2 class="pt-4 text-2xl">LOG IN</h2>
            <form>
                <ul class="flex flex-col">
                    <li><input class="w-full my-5 border-b-2 border-gray-500 outline-none" type="text" name="" placeholder="Email" value=""></li>
                    <li><input class="w-full my-5 border-b-2 border-gray-500 outline-none" type="password" name="" placeholder="Password" value=""></li>
                </ul>
                <button class="w-full mt-10 py-2 mb-2 items-center justify-center rounded-md bg-black text-white hover:bg-gray-800">LOG IN</button>
            </form>
        </div>      
    </div>
    <div class="py-20">
        <h2 class="pt-4 text-2xl">DON'T HAVE ACCOUNT?</h2>
        <p class="text-gray-400">Create an account to enjoy a personalised shopping experience.</p>
        <ul class="list-disc">
            <li class="my-3">Receive our Newsletters</li>
            <li class="my-3">Create your own wishlist</li>
            <li class="my-3">More member discount</li>
        </ul>
        <div>
            <button class="w-full my-6 py-2 mb-2 items-center justify-center rounded-md bg-black text-white hover:bg-gray-800">CREATE ACCOUNT</button>
        </div>
    </div>
</div>
@endsection