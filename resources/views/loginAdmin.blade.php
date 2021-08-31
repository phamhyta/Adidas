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
<div class="h-96 flex">
    <div class="w-1/3"></div>
    <div class="w-1/3">
        <div class="pt-12"><h1 class="px-20 pt- 0 text-center text-xl">Login Here</h1></div>
        <div class="pt-3 pl-20">
            <form>
            <p>Username</p>
            <input type="text" name="" placeholder="Enter Username" value="">
            <p>Password</p>
            <input type="password" name="" placeholder="Enter Password" value="">
            </form>
        </div> 
        <div>
            <input type="submit" name="" value="Login">
        </div> 
        <a>Lost your password?</a><br>    
    </div>
    
</div>
@endsection