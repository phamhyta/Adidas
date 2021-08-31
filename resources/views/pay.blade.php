@extends('layout.header')
@section('content')
<div class="h-96 flex">
<div class="w-2/3 border-2"></div>
<div class="w-1/3 border-2 bg-purple-300 px-20">
    <div class="">ORDER SUMARY</div>
    <div class="flex">
        <div class="w-1/2">Subtotal</div>
        <div class="w-1/2 text-sm font-semibold text-white pl-2 line-through relative float-left">200$</div>  
    </div>
    <div class="flex">
        <div class="w-1/2">Delivery</div>
        <div class="w-1/2 float-right">Free</div>
    </div>
    <div class="flex">
        <div class="w-1/2">Total</div>
        <div class="w-1/2 float-right">200$</div>
    </div>
    <button class="bg-black text-white w-full">Checkout</button>
</div>
</div>
@endsection
