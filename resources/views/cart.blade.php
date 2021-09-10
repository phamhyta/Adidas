@extends('layout.header')
@section('content')
    <div class="flex flex-row pt-10">
        <div class="w-3/4 ml-5 mr-20">
            <div class="flex flex-row justify-center">
                <div class="w-1/3 bg-gray-200 text-center relative">
                    <div class="uppercase italic absolute top-8 bottom-0 left-0 right-0 m-auto">Free Delivery</div>
                </div>
                <div class="w-2/3 bg-black text-white">
                    <ul class="ml-5 my-2">
                        <li>Applies to orders of 300$ or more .</li>
                        <li>Elite member.</li>
                        <li>2km around  our nearest store.</li>
                    </ul>
                </div>
            </div>

            <div class="py-7 font-black text-4xl">Your bag</div>

            <?php
                for($i = 1; $i <= 2; $i++){
                    echo '<div class="pb-5">
                            <div class=" flex flex-row bg-gray-200">
                                <div class="w-1/4 p-5">
                                    <img src="img/anh_giay_nam/male_shoes('.$i.').jpg" alt="" class="border border-black object-contain">
                                </div>
                                <div class="w-3/4 px-10 py-5">
                                    <div class="flex flex-row justify-between">
                                        <ul>
                                            <li class="pb-1 font-bold text-lg">NIKE AIR MAX 90</li>
                                            <li class="pb-3 text-sm">Men Shoes</li>
                                            <li class="pb-2 text-sm opacity-50">Color White</li>
                                            <li class="pb-2 text-sm opacity-50">Size 41</li>
                                            <li class="pb-4 text-sm opacity-50">Quantity 1</li>
                                        </ul>
                                        <div class=" underline font-bold text-lg">160$</div>
                                    </div>
                                    <div>
                                        <button class="border-r border-black pr-3 mr-2 hover:text-gray-400">Add to whislist</button>
                                        <button class="border-r border-black pr-3 mr-2 hover:text-gray-400">Change</button>
                                        <button class=" hover:text-gray-400">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            ?>
            
        </div>
        <div class="w-1/4 flex flex-col mr-20 pt-20">
            <div class="flex flex-row pb-5">
                <div class="w-1/2">
                    ORDER SUMMARY
                </div>
                <div class="border-b border-black h-0 w-1/2 pt-3"></div>
            </div>
            <div class="flex flex-row justify-between pb-5">
                <div>
                    Subtotal
                </div>
                <div>
                    320$
                </div>
            </div>
            <div class="flex flex-row justify-between pb-5">
                <div>
                    Delivery
                </div>
                <div>
                    FREE
                </div>
            </div>
            <div class="border-b border-black">
            </div>
            <div class="flex flex-row justify-between pt-3 pb-10">
                <div>
                    Total
                </div>
                <div>
                    320$
                </div>
            </div>

            <button class="py-4 px-2 border-black text-white bg-black hover:bg-gray-200 hover:text-black hover:border-gray-200">CHECK OUT</button>
        </div>
    </div>

    <div class="w-2/3 pt-20 pl-5 pr-20">
        <div class=" text-4xl font-bold pb-8">
            Wishlist
        </div>
        <div class="pb-5">
            <div class=" flex flex-row bg-gray-200">
                <div class="w-1/4 p-4">
                    <img src="img/anh_giay_nam/male_shoes(1).jpg" alt="" class="border border-black object-contain">
                </div>
                <div class="w-3/4 px-10 py-5">
                    <div class="flex flex-row justify-between">
                        <ul>
                            <li class="pb-1 font-bold text-lg">NIKE AIR MAX 90</li>
                            <li class="pb-3 text-sm">Men Shoes</li>
                            <li class="pb-2 text-sm opacity-50">Color White</li>
                            <li class="pb-2 text-sm opacity-50">Size 41</li>
                            <li class="pb-4 text-sm opacity-50">Quantity 1</li>
                        </ul>
                        <div class=" underline font-bold text-lg">160$</div>
                    </div>
                    <div>
                        <button class="border-r border-black pr-3 mr-2 hover:text-gray-400">Add to whislist</button>
                        <button class="border-r border-black pr-3 mr-2 hover:text-gray-400">Change</button>
                        <button class=" hover:text-gray-400">Remove</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 w-full h-32 relative">
            <div class="underline mt-5 ml-5 absolute">
                You have no wishlist items
            </div>
        </div>
    </div>
    <div class="border-b border-gray-100 pt-5"></div>

    <div class="py-10">
        <div class="flex justify-center mb-10">
            <div class="mx-10 border-b-2 border-yellow-500 text-yellow-500">YOU MIGHT LIKE</div>
            <div class="mx-10">SALES</div>
        </div>
        <div class="splide" id="productSlide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                        for($i = 1; $i <= 9; $i++){
                            echo '<li class="splide__slide px-5">
                                    <div>
                                        <div>
                                            <img src="'.asset("img/anh_giay_nam/male_shoes($i).png").'" alt="male shoes" class="w-full object-contain">
                                            </div>
                                            <div class="bg-gray-700 flex justify-between w-full">
                                            <ul class="w-full">
                                                <li class="pt-4 w-full">
                                                    <div class="flex">
                                                        <h1 class="flex-auto text-l font-semibold text-white pl-2"> <!-- Tên sp -->
                                                            <p>NIKE FAKE</p>
                                                        </h1>
                                                        <div class="text-l font-semibold text-white pl-8"> <!-- Giá sau khi giảm giá -->
                                                            $90.00
                                                        </div>
                                                        <div class="text-sm font-semibold text-white pl-2 line-through relative float-left"> <!-- Giá gốc -->
                                                            $110.00
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="w-full text-sm font-medium text-white pb-4 pl-2">
                                                    Sản phẩm không chính hãng
                                                </li>
                                            </ul>
                                        </div>
                                    </div>                      
                                </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '#productSlide',{
                perPage: 4,
                rewind : true,
            } ).mount();
        } );
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
@endsection