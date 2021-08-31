@extends('layout.header')
@section('content')
<div class="h-96 flex px-32">
    <div class="w-3/4 border-2 pr-32">
        <div class="w-full">
            <div class="py-3 pl-10 bg-black text-2xl text-white">
                Delivery
            </div>
            <div>
                <div class="w-1/2">
                    <input type="text" class="w-full border-b-2">
                </div>
                <div class="w-1/2">
                    <input type="text" class="w-full border-b-2">
                </div>
            </div>
        </div>
        <div class="w-full"></div>
        <div class="w-full"></div>
    </div>
    <div class="w-1/4 bg-purple-100 px-10">
        <div class="pt-6">ORDER SUMARY</div>
        <div class="flex pt-6">
            <div class="w-1/2">Subtotal</div>
            <div class="w-1/2 text-right">200$</div>  
        </div>
        <div class="flex py-6">
            <div class="w-1/2">Delivery</div>
            <div class="w-1/2 text-right">Free</div>
        </div>
        <div class="flex py-6 border-t-2 border-black mb-6">
            <div class="w-1/2">Total</div>
            <div class="w-1/2 text-right">200$</div>
        </div>
        <button class="w-full py-2 mb-2 items-center justify-center rounded-md bg-black text-white hover:bg-gray-800" type="submit">Checkout</button>
    </div>
</div>
@endsection
