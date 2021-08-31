@extends('layout.header')
@section('content')
{{-- slider --}}
<div class="w-full h-96">
    <img id="img" class="w-full h-full" src="https://giayhiendai.com/upload/hinhanh/slider-19801.jpg" alt="">
    <script type="text/javascript">
        var img = document.getElementById("img");
        var currentPos = 0;
        var imgs = ["https://giayhiendai.com/upload/hinhanh/slider-19801.jpg",
        "https://htstore87.com/wp-content/uploads/2021/04/slider_2.png",];
        function volgendefoto()
        {
            if(++currentPos > 1)
                currentPos = 0;
            img.src = imgs[currentPos];
        }
        setInterval(volgendefoto, 5000);
    </script>
</div>
<div class="flex px-32 py-12">
    <div class="w-3/4 pr-32">
        <div class="w-full">
            <div class="py-3 pl-10 bg-black text-2xl text-white">
                Delivery
            </div>
            <div class="flex pl-10 pt-5">
                <div class="w-1/2 pr-6">
                    <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="Frist name">
                </div>
                <div class="w-1/2 pl-6">
                    <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="Last name">
                </div>
            </div>
            <div class="flex pl-10 pt-5">
                <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="Address 1">
            </div>
            <div class="flex pl-10 pt-5">
                <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="Address 2">
            </div>
            <div class="flex pl-10 pt-5">
                <div class="w-1/2 pr-6">
                    <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="District">
                </div>
                <div class="w-1/2 pl-6">
                    <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="City">
                </div>
            </div>
            <div class="flex pl-10 pt-5">
                <div class="w-1/2 pr-6">
                    <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="Country">
                </div>
                <div class="w-1/2 pl-6">
                    <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="Postal code">
                </div>
            </div>
            <div class="flex pl-10 pt-5 w-1/2">
                <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="Email">
            </div>
            <div class="flex pl-10 pt-5 w-1/2">
                <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="Phone number">
            </div>
        </div>
        <div class="w-full pt-12">
            <div class="py-3 pl-10 bg-black text-2xl text-white">
                Payment
            </div>
            <div class="flex pl-10 pt-5 w-1/2">
                <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="Promo code">
            </div>
            <div class="pl-10 pt-5 w-1/2">Select payment menthod</div>
            <div class="pl-10 pt-5 flex">
                <div class="pr-6 flex w-1/2">
                    <div class="w-2/3">Credit or Debit card</div>
                    <div class="w-1/3 text-right">
                        <input type="checkbox">
                    </div>
                </div>
                <div class="pl-6 flex w-1/2">
                    <div class="w-2/3">Paypal</div>
                    <div class="w-1/3 text-right">
                        <input type="checkbox">
                    </div>
                </div>
            </div>
        </div>
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
