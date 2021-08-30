@extends('layout.header')
@section('content')
{{-- slider --}}
<div class="w-full">
    <img id="img" class="w-full h-full object-contain" src="{{asset("img/voucher/voucher(1).jpg")}}" alt="" width="512" height="384">
    <script type="text/javascript">
        var img = document.getElementById("img");
        var currentPos = 0;
        var imgs = ["{{asset("img/voucher/voucher(1).jpg")}}",
        "{{asset("img/voucher/voucher(2).jpg")}}",
        "{{asset("img/voucher/voucher(4).jpg")}}",
        "{{asset("img/voucher/voucher(5).jpg")}}",
        "{{asset("img/voucher/voucher(6).jpg")}}",];
        function volgendefoto()
        {
            if(++currentPos > 4)
                currentPos = 0;
            img.src = imgs[currentPos];
        }
        setInterval(volgendefoto, 3000);
    </script>
  </div>
<div class="px-32 py-5">
    <!-- Sản phẩm chi tiết -->
    <div class="flex justify-between w-full">
        <!--!!-->
        <div class="w-3/12">
            <!-- 3 ảnh (để chạy) mẫu khác của sản phẩm -->
            <div>
                <img id="image1" class="w-5/6  mt-4 mb-2 object-contain" src="{{asset("img/anh_giay_nam/male_shoes(1).png")}}" alt="" width="512" height="384">
            </div>
            <div>
                <img id="image2" class="w-5/6  mt-4 mb-2 object-contain" src="{{asset("img/anh_giay_nam/male_shoes(6).png")}}" alt="" width="512" height="384">
            </div>
            <div> 
                <img id="image3" class="w-5/6  mt-4 object-contain" src="{{asset("img/anh_giay_nam/male_shoes(11).png")}}" alt="" width="512" height="384">
            </div>
        </div>
        <!-- Ảnh to để ở giữa trang -->
        <div class="w-6/12">
            <img class="pl-2 pt-28 h-5/6 object-contain" src="{{asset("img/anh_giay_nam/male_shoes(16).png")}}" alt="">
        </div>
        <!-- Phần thông tin sản phẩm -->
        <div class="w-4/12 pl-8">
            <form class="flex-auto">
                <!-- Thông tin -->
                <div class="flex flex-wrap pt-10">
                    <h1 class="flex-auto text-3xl font-semibold"> <!-- Tên sp -->
                        NIKE FAKE
                    </h1>
                    <div class="text-xl font-semibold text-gray-700 ml-1"> <!-- Giá sau khi giảm giá -->
                        $90.00
                    </div>
                    <div class="text-sm font-semibold text-gray-500 pl-2 line-through"> <!-- Giá gốc -->
                        $110.00
                    </div>
                    <div class="w-full flex-none text-sm font-medium text-gray-700"> <!-- Mô tả ngắn -->
                        Sản phẩm không chính hãng
                    </div>
                </div>
                <!-- Thanh chọn màu -->
                <div class="items-baseline mt-4 mb-6">
                    <div class="w-full pb-5">
                        <div class="text-l font-medium text-gray-900 mt-2 mr-2 ">Color:</div>
                    </div>
                    <div>
                        <div class="flex space-x-2">
                            <label>
                                <img class="w-36 flex items-center justify-center rounded-lg" src="{{asset("img/anh_giay_nam/male_shoes(218).jpg")}}" alt="">
                                <input class="w-5 h-5 flex items-center justify-center rounded-lg mt-2 ml-14" type="radio" name="color" value="">
                                <p class="flex justify-center mr-2 text-sm">Xanh</p>
                            </label>
                                <label>
                                <img class="w-36 flex items-center justify-center rounded-lg" src="{{asset("img/anh_giay_nam/male_shoes(227).jpg")}}" alt="">
                                <input class="w-5 h-5 flex items-center justify-center rounded-lg mt-2 ml-14" type="radio" name="color" value="">
                                <p class="flex justify-center mr-2 text-sm">Vàng</p>
                            </label>
                        </div>
                        <div class="flex space-x-2">
                            <label>
                                <img class="w-36 flex items-center justify-center rounded-lg" src="{{asset("img/anh_giay_nam/male_shoes(216).jpg")}}" alt="">
                                <input class="w-5 h-5 flex items-center justify-center rounded-lg mt-2 ml-14" type="radio" name="color" value=""> 
                                <p class="flex justify-center mr-2 text-sm">Đen</p>
                            </label>
                            <label>
                                <img class="w-36 flex items-center justify-center rounded-lg" src="{{asset("img/anh_giay_nam/male_shoes(222).jpg")}}" alt="">
                                <input class="w-5 h-5 flex items-center justify-center rounded-lg mt-2 ml-14" type="radio" name="color" value=""> 
                                <p class="flex justify-center mr-2 text-sm">Trắng</p>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Thanh chọn size -->
                <div class="flex items-baseline mt-4 mb-6">
                    <div class="flex-none text-l font-medium text-gray-700 mt-2 mr-2 ">Size:</div>
                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-1 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option>37</option>
                        <option>39</option>
                        <option>40</option>
                        <option>41</option>
                        <option>42</option>
                        <div class="flex pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </select>
                    
                </div>
                <!-- Thanh thêm vào giỏ hàng, mua ngay -->
                <div class="mb-2 text-sm font-medium">
                    <div class="">
                        <button class="w-full py-2 mb-2 items-center justify-center rounded-md bg-black text-white" type="submit">Buy now</button>
                        <button class="w-full py-2 mb-2 items-center justify-center rounded-md border border-gray-900" type="button">Add to bag</button>
                    </div>
                    <!-- Nút thả tim -->
                    <div>
                        <button class="flex items-center justify-center w-full h-9 rounded-md text-red-600 border border-pink-900" type="button" aria-label="like">
                            <svg width="20" height="20" fill="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Phần đánh giá, mô tả -->
    <div class="flex justify-between w-full h-96 mt-8 border-t-2 border-gray-300">
        <div class="w-1/3 h-full mt-6 ml-4 border-r-2 border-gray-300">
            <!-- Phần đánh giá -->
            <div class="flex mr-2">
                <div class="text-xl font-medium text-gray-700 w-2/3">
                    Xếp hạng và đánh giá
                </div>
                <div class="flex w-1/3">
                    <svg width="20" height="20" fill="currentColor" class="text-yellow-600">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                    <div class="ml-1">
                        <span class="text-black">4.94</span>
                        <span class="sm:hidden md:inline">(128)</span>
                    </div>
                </div>
            </div>
            <br>
            <!-- Phần đánh giá khách hàng -->
            <div class="flex text-sm font-medium text-gray-700 w-2/3">
                20/07/2020 <!-- Ngày đánh giá -->
                <div class="ml-32 flex">
                    <svg width="20" height="20" fill="currentColor" class="text-yellow-600 mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                    <div class="ml-1">
                        <span class="text-black">4.5</span> <!-- Vote ../5 -->
                    </div>
                </div>
            </div>
            <div class="col-start-1 row-start-3 space-y-3 pr-4 pt-2"> <!-- Thông tin người mua -->
                <p class="flex items-center text-black text-sm font-medium">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="w-6 h-6 rounded-full mr-2 bg-gray-100">
                    Trần Xuân Hương
                </p>
            </div>
            <p class="border-b-2 border-gray-500 w-2/3">Sản Phẩm dùng tốt</p> <!-- Comment -->
            <div class="flex text-sm font-medium text-gray-700 w-2/3">
                26/03/2021
                <div class="ml-32 flex">
                    <svg width="20" height="20" fill="currentColor" class="text-yellow-600 mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                    <div class="ml-1">
                        <span class="text-black">4.0</span>
                    </div>
                </div>
            </div>
            <div class="col-start-1 row-start-3 space-y-3 pr-4 pt-2">
                <p class="flex items-center text-black text-sm font-medium">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="w-6 h-6 rounded-full mr-2 bg-gray-100">
                    Lê Hưng
                </p>
            </div>
            <p class="border-b-2 border-gray-500 w-2/3">Sản Phẩm dùng tạm được</p>
            <div class="flex text-sm font-medium text-gray-700 w-2/3">
                12/06/2021
                <div class="ml-32 flex">
                    <svg width="20" height="20" fill="currentColor" class="text-yellow-600 mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                    <div class="ml-1">
                        <span class="text-black">5.0</span>
                    </div>
                </div>
            </div>
            <div class="col-start-1 row-start-3 space-y-3 pr-4 pt-2">
                <p class="flex items-center text-black text-sm font-medium">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="w-6 h-6 rounded-full mr-2 bg-gray-100">
                    Lê Minh Tiến
                </p>
            </div>
            <p class="border-b-2 border-gray-500 w-2/3">Amazingg goodd chóp</p>
            <div class="flex text-sm font-medium text-gray-700 w-2/3">
                13/05/2021
                <div class="ml-32 flex">
                    <svg width="20" height="20" fill="currentColor" class="text-yellow-600 mr-0">
                        <path d="M9.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118l-2.8-2.034c-.784-.57-.381-1.81.587-1.81H7.03a1 1 0 00.95-.69L9.05 3.69z" />
                    </svg>
                    <div class="ml-1">
                        <span class="text-black">4.5</span>
                    </div>
                </div>
            </div>
            <div class="col-start-1 row-start-3 space-y-3 pr-4 pt-2">
                <p class="flex items-center text-black text-sm font-medium">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdBWMw05M04BIRa7SIuc9f4by2Sa0VR7ZcFw&usqp=CAU" alt="" class="w-6 h-6 rounded-full mr-2 bg-gray-100">
                    Lê Ngọc Văn
                </p>
            </div>
            <p class="">Sản phẩm nên mua</p>
        </div>
        <div class="w-2/3 h-full mt-4">
            <div class="flex h-1/2 w-full">
                <div class="h-full w-1/3"> <!-- Để ảnh sp -->
                    <img class="w-5/6 h-full float-right" src="{{asset("img/anh_giay_nam/male_shoes(20).png")}}">
                </div>
                <!-- Phần giới thiệu -->
                <div class="ml-4 mr-6 h-full w-2/3">
                    <div>
                        <h1 class="text-3xl font-semibold float-left"> NIKE FAKE</h1>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold float-rights w-full mr-48 mt-12">
                            Tuy là hàng fake nhưng mà chất lượng không kém hàng real, màu sắc mẫu mã phải nói là chuẩn fake :)))
                            <br> Sản phẩm đảm bảo 1 lần nhìn qua k thể phát hiện là giả :)) 
                        </h3>
                    </div>
                </div>
            </div>
            <div class="flex h-1/2 w-full">
                <!-- Phần thông số sản phẩm -->
                <div class="h-full w-2/3 pt-6">
                    <div class="h-1/6 w-1/3 pr-4 text-xl font-medium text-gray-700 ml-48 border-b-2 text-center border-gray-500">
                        Thông số
                    </div>
                    <div class="flex h-4/6 w-full mt-6 pl-12">
                        <div class="h-full w-1/2 ml-4 list-inside">
                            <li>Dánh regular fit</li>
                            <li>Có dây buộc</li>
                            <li>Chất liệu tổng hợp</li>
                        </div>
                        <div class="h-full w-1/2 list-inside pr-4">
                            <li>Đế ngoài bằng cao su</li>
                            <li>Primegreen</li>
                            <li>Mã sản phẩm: FX0511</li>
                        </div>
                    </div>
                </div>
                <div class="h-full w-1/3"> <!-- Để ảnh sp -->
                    <img class="w-5/6 h-full float-right mr-12" src="{{asset("img/anh_giay_nam/male_shoes(21).png")}}">
                </div>
            </div>
        </div>
    </div>
    <!-- Đề xuất mua sắm -->
    <div class="relative w-full mt-12">
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
                                        <ul>
                                            <li class="pt-4">
                                                <div class="flex">
                                                <h1 class="flex-auto text-l font-semibold text-white pl-2"> <!-- Tên sp -->
                                                    <p id="h11">NIKE FAKE</p>
                                                </h1>
                                                <div id="gia1" class="text-l font-semibold text-white pl-8"> <!-- Giá sau khi giảm giá -->
                                                    $90.00
                                                </div>
                                                <div id="giag1" class="text-sm font-semibold text-white pl-2 line-through mr-4"> <!-- Giá gốc -->
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
                        //echo '<img src="'.asset("img/anh_giay_nam/male_shoes($i).png").'">';
                    }    
                ?> 
            </ul>
        </div>
    </div>
</div>
@endsection
