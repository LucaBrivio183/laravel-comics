<footer>
    <div class="container">
        <div class="footer-bottom d-flex align-items-center justify-content-between">
            <span>FOLLOW US</span>
            <ul class="d-flex align-items-center">
                @foreach ($socials as $item)
                <li><a href="{{$item['link']}}"><img :src="{{$item['logo']}}" alt="{{$item['name']}}"></a></li>
                @endforeach  
            </ul>
        </div>
    </div>
</footer>