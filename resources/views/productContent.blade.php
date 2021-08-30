@extends('layout.header')
@section('content')
{{-- Quang cao --}}
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
  <!-- Chon mau giay -->
  <div class="mx-5">
      <div class="font-bold text-5xl font-medium pb-10">
          Shoes selector
      </div>
      <div class="flex flex-row flex-wrap pr-5">
          <img src="{{asset("img/nikadas_male_shoes_selector.png")}}" alt="" class="w-1/3 object-contain">
          
          <div class="bg-gray-300 w-4/6 pt-14">
              <ul class="flex flex-wrap font-normal justify-center w-full">
                  <li class=" w-1/3 p-5">
                      <div class="inline-block relative w-full">
                          <select class="block appearance-none w-full bg-gray-300 border-b-2 border-black px-4 py-2 pr-8 leading-tight focus:outline-none focus:shadow-outline">
                            <option>Category</option>
                            <option>Football</option>
                            <option>Tennis</option>
                            <option>Basketball</option>
                            <option>Running</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                  </li>
                  <li class=" w-1/3 p-5">
                      <div class="inline-block relative w-full">
                          <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Size</option>
                            <option>37</option>
                            <option>39</option>
                            <option>40</option>
                            <option>41</option>
                            <option>42</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                  </li>
                  <li class=" w-1/3 p-5">
                      <div class="inline-block relative w-full">
                          <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Material</option>
                            <option>Cotton</option>
                            <option>Leather</option>
                            <option>Nilon</option>
                            <option>Plastic</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                  </li>
              </ul>
              <ul class="flex flex-wrap font-normal justify-center">
                  <li class=" w-1/3 p-5">
                      <div class="inline-block relative w-full">
                          <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Price</option>
                            <option>Low</option>
                            <option>Expensive</option>
                            <option>On sale</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                  </li>
                  <li class=" w-1/3 p-5">
                      <div class="inline-block relative w-full">
                          <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Brand</option>
                            <option>Nikadas Original</option>
                            <option>Nikadas F1</option>
                            <option>Bitis</option>
                            <option>Thuong Dinh</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                  </li>
                  <li class=" w-1/3 p-5">
                      <div class="inline-block relative w-full">
                          <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Surface</option>
                            <option>Smooth</option>
                            <option>Spike</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                  </li>
              </ul>
              <ul class="flex flex-wrap font-normal justify-center">
                  <li class=" w-1/3 p-5">
                      <div class="inline-block relative w-full">
                          <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Color</option>
                            <option>Yellow</option>
                            <option>Red</option>
                            <option>Blue</option>
                            <option>Black</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                  </li>
                  <li class=" w-1/3 p-5">
                      <div class="inline-block relative w-full">
                          <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Shoes height</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                  </li>
                  <li class=" w-1/3 p-5">
                      <div class="inline-block relative w-full">
                          <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option>Athletes</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <!-- Chon mau giay -->
  <div class="mx-5 mt-16">
      <div class="font-bold text-5xl font-medium pb-10 ">
          Men shoes
      </div>
      <div>
          <ul class="flex flex-wrap font-normal w-full ">
              <?php
                  for($i = 1; $i <= 20; $i++){
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
                                            <div id="gia1" class="text-l font-semibold text-white pl-6"> <!-- Giá sau khi giảm giá -->
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
@endsection