<section id="slider">
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
</section>