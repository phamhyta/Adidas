@extends('layout.header')
@section('content')
{{-- slider --}}
<div class="w-full">
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
<div class="flex py-20">
    <div class="w-1/3"></div>
    <div class="w-1/3 bg-gray-100">
        <div class="pt-2 bg-gray-300"><h1 class="px-20 pt- 0 text-center text-xl">Login Here</h1></div>
        <div class="pt-3 px-16">
            <form>
            <p>Username</p>
            <input class="border-2 px-2 py-1 w-full outline-none rounded-md" type="text" name="" placeholder="Enter Username" value="">
            <p>Password</p>
            <input class="border-2 px-2 py-1 w-full outline-none rounded-md" type="password" name="" placeholder="Enter Password" value="">
            </form>
        </div> 
        <div class="text-center pt-4">
            <input class="bg-black text-white py-1 px-8 rounded-md hover:bg-gray-900" type="submit" name="" value="Login">
        </div> 
        <div class="pl-16 py-4">
             <a>Lost your password?</a><br>   
        </div>
       
    </div>
</div>
@endsection