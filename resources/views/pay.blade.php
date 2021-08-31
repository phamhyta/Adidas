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
    {{-- Thong tin --}}
    <div class="w-3/4 pr-32">
        {{-- Delivery --}}
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
        {{-- Payment --}}
        <div class="w-full pt-12">
            <div class="py-3 pl-10 bg-black text-2xl text-white">
                Payment
            </div>
            <div class="flex pl-10 pt-5 w-1/2">
                <input type="text" class="w-full border-b-2 border-gray-500 outline-none" placeholder="Promo code">
            </div>
            <div class="pl-10 pt-5 w-1/2">Select payment menthod</div>
            <div class="pl-10 pt-5 flex pb-10">
                <div class="pr-6 flex w-1/2">
                    <div class="w-2/3">Credit or Debit card</div>
                    <div class="w-1/3 text-right">
                        <input type="radio" name="check">
                    </div>
                </div>
                <div class="pl-6 flex w-1/2">
                    <div class="w-2/3">Paypal</div>
                    <div class="w-1/3 text-right">
                        <input type="radio" name="check">
                    </div>
                </div>
            </div>
            <div class="h-32 pl-10">
                <div class="bg-purple-100 h-full">
                    <div class="flex">
                        <div class="w-1/3 pl-5 pt-4">
                            <div class="pl-1">Card number</div>
                            <div>
                                <input type="text" class="border-2 outline-none">
                            </div>
                        </div>
                        <div class="w-1/3 pl-5 pt-4">
                            <div class="pl-1">Expire date</div>
                            <div>
                                <input type="text" class="border-2 outline-none">
                            </div>
                        </div>
                        <div class="w-1/3 pl-5 pt-4">
                            <div class="pl-1">Secure code</div>
                            <div>
                                <input type="text" class="w-5/6 border-2 outline-none">
                            </div>
                        </div>
                    </div>
                    <div class="flex pl-5 pt-4">
                        <div> 
                            <input type="checkbox">
                        </div>
                        <div class="pl-4">Save for later use</div>
                    </div>
                </div>
            </div> 
        </div>
        {{-- Write your felling --}}
        <div class="w-full pt-12">
            <div class="py-3 pl-10 bg-black text-2xl text-white">
                Write your felling
            </div>
            <div class="pl-10 pt-4">Rate us</div>
            <div class="pl-10 flex">
                <div>
                    <svg onclick="color1()" id="sao1" width="30" height="30" fill="currentColor" class="text-gray-600 mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                </div>
                <div>
                    <svg onclick="color2()" id="sao2" width="30" height="30" fill="currentColor" class="text-gray-600 mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                </div>
                <div>
                    <svg onclick="color3()" id="sao3" width="30" height="30" fill="currentColor" class="text-gray-600 mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                </div>
                <div>
                    <svg onclick="color4()" id="sao4" width="30" height="30" fill="currentColor" class="text-gray-600 mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                </div>
                <div>
                    <svg onclick="color5()" id="sao5" width="30" height="30" fill="currentColor" class="text-gray-600 mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                </div>
            </div>
            <script>
                sao1 = document.getElementById("sao1");
                sao2 = document.getElementById("sao2");
                sao3 = document.getElementById("sao3");
                sao4 = document.getElementById("sao4");
                sao5 = document.getElementById("sao5");
                function color1()
                {
                    sao1.style.color = "orange";
                    sao2.style.color = "gray";
                    sao3.style.color = "gray"; 
                    sao4.style.color = "gray"; 
                    sao5.style.color = "gray"; 
                }
                function color2()
                {
                    sao1.style.color = "orange";
                    sao2.style.color = "orange";
                    sao3.style.color = "gray"; 
                    sao4.style.color = "gray"; 
                    sao5.style.color = "gray"; 
                }
                function color3()
                {
                    sao1.style.color = "orange";
                    sao2.style.color = "orange";
                    sao3.style.color = "orange"; 
                    sao4.style.color = "gray"; 
                    sao5.style.color = "gray"; 
                }
                function color4()
                {
                    sao1.style.color = "orange";
                    sao2.style.color = "orange";
                    sao3.style.color = "orange"; 
                    sao4.style.color = "orange"; 
                    sao5.style.color = "gray"; 
                }
                function color5()
                {
                    sao1.style.color = "orange";
                    sao2.style.color = "orange";
                    sao3.style.color = "orange"; 
                    sao4.style.color = "orange"; 
                    sao5.style.color = "orange"; 
                }
            </script>
            <div class="pl-10 pt-2">Comment</div>
            <div class="pl-10">
                <input type="text" class="border-2 outline-none w-full h-12">
            </div>
        </div>
    </div>
    {{-- Tong tien --}}
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
