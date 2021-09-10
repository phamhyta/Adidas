@extends('layout.header')
@section('content')
<div class="splide">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
            <img src="img/home-poster-1.jpg" alt="">
        </li>
        <li class="splide__slide">
            <img src="img/home-poster-2.jpg" alt="">
        </li>
        <li class="splide__slide">
            <img src="img/home-poster-3.jpg" alt="">
        </li>
      </ul>
    </div>
</div>

<div class="pt-10 flex flex-row justify-around">
    <div class="w-1/2 relative mx-3">
        <img src="img/nike-summer.jpeg" alt="" class=" h-full w-full object-contain">
        <div class=" absolute top-5 left-0 flex flex-col justify-center items-center">
            <div class="text-center text-2xl font-black">OUR SUMMER COLECTION</div>
            <button class="mt-2 border-2 border-gray-800  bg-gray-800 text-center text-white py-2 px-8 hover:bg-white hover:text-black hover:border-white">Discover</button>
        </div>
    </div>
    <div class="w-1/2 relative mx-3">
        <img src="img/basketball.jpeg" alt="" class=" h-full w-full object-contain">
        <div class=" absolute top-5 left-5 flex flex-col justify-center items-center">
            <div class="text-center text-2xl font-black text-white">MORE BASKETBALL SHOES</div>
            <button class="mt-2 border-2 border-gray-800  bg-gray-800 text-center text-white py-2 px-8 hover:bg-white hover:text-black hover:border-white">Discover</button>
        </div>
    </div>
</div>

<div class="pt-16 flex flex-row justify-around">
    <div class="relative w-1/2 mx-3">
        <img src="img/anh_giay_nam/male_shoes(100).jpg" alt="" class="h-full w-full object-contain">
        <div class="absolute  bottom-5 left-0 right-0 mx-auto flex flex-col justify-center items-center">
            <div class="text-center text-3xl font-black">MEN SHOES</div>
            <button class="mt-2 border-2 border-gray-800  bg-gray-800 text-center text-white py-2 px-8 hover:bg-white hover:text-black hover:border-white">Discover</button>
        </div>
    </div>
    <div class="relative w-1/2 mx-3">
        <img src="img/anh_giay_nam/male_shoes(110).jpg" alt="" class="h-full w-full object-contain">
        <div class="absolute  bottom-5 left-0 right-0 mx-auto flex flex-col justify-center items-center">
            <div class="text-center text-3xl font-black">WOMEN SHOES</div>
            <button class="mt-2 border-2 border-gray-800  bg-gray-800 text-center text-white py-2 px-8 hover:bg-white hover:text-black hover:border-white">Discover</button>
        </div>
    </div>
</div>

<div class="pt-20">
    <div class="flex justify-center mb-10">
        <div class="mx-10 border-b-2 border-yellow-500 text-yellow-500">BEST SELLER</div>
        <div class="mx-10">SALES</div>
    </div>
    <div class="splide" id="productSlide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php
                    echo "Run here!";
                    for($i = 1; $i <= 8; $i++){
                        echo '<li class="splide__slide p-2">
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
                                                    <div class="text-sm font-semibold text-white pl-2 pr-2 line-through relative float-left"> <!-- Giá gốc -->
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

<div class="flex flex-row py-20">
    <div class="w-1/2 mx-5">
        <div class=" font-semibold text-4xl">Kyrie Irving</div>
        <img src="img/irving-nike.jpeg" alt="" class="w-full h-full object-contain">
    </div>
    <div class="w-1/2 mx-5">
        <div class=" font-semibold text-4xl">Giannis Antetokounmpo</div>
        <img src="img/giannis-nike.jpeg" alt="" class="w-full h-full object-contain">
    </div>
</div>

<div class="splide px-20" id="nikadas-new">
    <div class="splide__track">
        <ul class="splide__list">
            <?php
                for($i = 1; $i <= 8; $i++){
                    echo '<li class="splide__slide px-5">
                        <div class="transform motion-safe hover:scale-110...">
                            <div>
                                <img src="img/nikadas-new-'.$i.'.jpeg" alt="" class="mb-2">
                                <div class="flex flex-row justify-center absolute left-0 right-0 mx-auto">
                                    <i class="far fa-calendar text-gray-800"></i>
                                    <div class="ml-1 text-gray-800">
                                        10/09/2021
                                    </div>
                                    <div class="ml-2 text-gray-800">
                                        Đăng bởi:
                                    </div>
                                    <div class=" text-gray-700 font-semibold">
                                        Tiến
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-200 mt-10">
                                <div class=" text-center font-bold text-2xl my-5 pt-10">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                                <div class=" text-center mb-10 mx-5 pb-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum exercitationem voluptatem corrupti deserunt magni.</div>
                            </div>
                        </div>
                    </li>';    
                }
            ?>
            
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide( '.splide', {
            perPage    : 1,
            height     : '100vh',
            cover      : true,
            type        : 'loop',
            autoplay    : true,
            pauseOnHover: false,
        } ).mount();
    });

    document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '#productSlide',{
            perPage: 4,
	        rewind : true,
        } ).mount();
	} );

    document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '#nikadas-new',{
            perPage: 4,
	        rewind : true,
        } ).mount();
	} );
</script>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
@endsection