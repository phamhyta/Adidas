@extends('layout.header')
@section('content')
<div class="container mx-auto mt-5 mb-40">
    <div>
        <h1 class="pt-4 text-2xl text-center">CREATE MY ACCOUNT</h1>
        <p class="text-center">We gives you an extraordinary access to a world of products.</p>
    </div>
    <div class="justify-center flex my-10">
            <form class="w-full justify-center justify-items-center relative">
                <ul class="flex flex-col flex-wrap h-64">
                    <li class=" px-20">
                        <input class="border-b-2 border-gray-500 outline-none my-5 w-full" type="text" name="" placeholder="First Name" value="">
                    </li>
                    <li class=" px-20">
                        <input class="border-b-2 border-gray-500 outline-none my-5 w-full" type="password" name="" placeholder="Password" value="">
                    </li>
                    <li class=" px-20">
                        <input class="border-b-2 border-gray-500 outline-none my-5 w-full" type="text" name="" placeholder="Email" value="">
                    </li>
                    <li class=" px-20">
                        <input class="border-b-2 border-gray-500 outline-none my-5 w-full" type="text" name="" placeholder="Last Name" value="">
                    </li>
                    <li class=" px-20">
                        <input class="border-b-2 border-gray-500 outline-none my-5 w-full" type="password" name="" placeholder="Confirm Password" value="">
                    </li>
                    <li class=" px-20">
                        <input class="border-b-2 border-gray-500 outline-none my-5 w-full" type="text" name="" placeholder="Region" value="">
                    </li>
                </ul>

                <div class=" pl-16">
                    <input class="my-5 mx-5" type="checkbox" id="news" name="receive" value="">
                    <label for="receive">I wish to receive news on my email</label><br>
                    <input class="my-5 mx-5" type="checkbox" id="accept" name="accept" value="">
                    <label for="accept">I accept to all privacy statement</label><br>
                </div>

                <button class="mx-auto left-0 right-0 absolute w-1/2 py-2 mt-10 items-center justify-center rounded-md bg-black text-white hover:bg-gray-800">CREATE ACCOUNT</button>
            </form>
    </div>
</div>
@endsection