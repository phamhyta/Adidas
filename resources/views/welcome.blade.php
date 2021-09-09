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
<div class="px-32 py-2">
    <div class="h-80 flex mt-16">
        <div class="w-1/2 flex mr-4 bg-center bg-auto bg-no-repeat" style="background-image: url(https://vn-test-11.slatic.net/original/f0f9140886486c429c6d845312689fd0.jpg_720x720q80.jpg_.webp)">
            <div class="w-1/2"></div>
            <div class="w-1/2 text-center px-4">
                <div class="bg-black text-white mt-8">
                    OUR SUMMER COLECTION
                </div>
                <div class="mt-4">
                    <button class="bg-white text-black py-2 px-4 hover:bg-gray-50">Discover</button>
                </div>
            </div>
        </div>
        <div class="w-1/2 flex ml-4 bg-center bg-auto bg-no-repeat" style="background-image: url(https://fsport247.com/wp-content/uploads/2021/03/cac-hang-giay-noi-tieng-5.jpg)">
            <div class="w-1/2 text-center px-4">
                <div class="bg-black text-white mt-8">
                    MORE BASKETBALL SHOSE
                </div>
                <div class="mt-4">
                    <button class="bg-white text-black py-2 px-4 hover:bg-gray-50">Discover</button>
                </div>
            </div>
            <div class="w-1/2"></div>    
        </div>
    </div>
    <div class="h-80 flex mt-24">
        <div class="w-1/2 mr-4 bg-center bg-auto bg-no-repeat" style="background-image: url(https://vn-test-11.slatic.net/original/f0f9140886486c429c6d845312689fd0.jpg_720x720q80.jpg_.webp)">
            <div class="h-2/3"></div>
            <div class="w-full text-center px-4 h-1/3">
                <div class="bg-white text-black">
                    OUR SUMMER COLECTION
                </div>
                <div class="mt-4">
                    <button class="bg-black text-white py-2 px-4 hover:bg-gray-50">Discover</button>
                </div>
            </div>
        </div>
        <div class="w-1/2 ml-4 bg-center bg-auto bg-no-repeat" style="background-image: url(https://fsport247.com/wp-content/uploads/2021/03/cac-hang-giay-noi-tieng-5.jpg)">
            <div class="h-2/3"></div>
            <div class="w-full text-center px-4 h-1/3">
                <div class="bg-white text-black">
                    MORE BASKETBALL SHOSE
                </div>
                <div class="mt-4">
                    <button class="bg-black text-white py-2 px-4 hover:bg-gray-50">Discover</button>
                </div>
            </div> 
        </div>
    </div>
    <div class="relative w-full mt-16">
        <div class="flex justify-center text-xl font-semibold border-b-2">
            YOU MIGHT LIKE
        </div>
        <div class="flex justify-between">
            <ul class="flex flex-wrap font-normal w-full ">
                <?php
                    for($i = 1; $i <= 4; $i++){
                    echo '<li class="my-5 pr-5 ml-0 w-1/4">
                        <div>
                            <div>
                                <i class="far fa-heart"></i>
                                <img src="'.asset("img/anh_giay_nam/male_shoes($i).png").'" alt="male shoes" class="w-full object-contain">
                            </div>
                            <div class="bg-gray-700 flex justify-between">
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
                    </li>';}    
                ?> 
            </ul>
        </div>
    </div>
    <div class="flex h-96 mt-16">
        <div class="w-1/2 mr-1 border-2"></div>
        <div class="w-1/2 ml-1 border-2"></div>
    </div>
    <div class="relative w-full mt-16">
        <div class="flex text-xl font-semibold border-b-2">
            ABOUT SHOES
        </div>
        <div class="flex justify-between">
            <ul class="flex flex-wrap font-normal w-full ">
                <?php
                    for($i = 1; $i <= 4; $i++){
                    echo '<li class="my-5 pr-5 ml-0 w-1/4">
                        <div>
                            <div>
                                <i class="far fa-heart"></i>
                                <img src="'.asset("img/anh_giay_nam/male_shoes($i).png").'" alt="male shoes" class="w-full object-contain">
                            </div>
                            <div class="bg-gray-700 flex justify-between">
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
                    </li>';}    
                ?> 
            </ul>
        </div>
    </div>
</div>
@endsection