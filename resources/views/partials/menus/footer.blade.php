<ul>
    @foreach($items as $menu_item)
        @if ($menu_item->title === 'Follow Me:')
            <li>{{ $menu_item->title }}</li>
        @endif
        <li><a href="{{ $menu_item->link() }}" target="_blank"><i class="{{ $menu_item->title }}"></i></a></li>
    @endforeach
</ul>

{{-- <footer>
    <div class="footer-content container">
        <div class="made-with">Made by Tana using Laravel and Vue.js</div>
        <ul>
            <li>Follow Me: </li>
            <li><a href="https://github.com/Shun-ichiroTanaka" target="_blank"><i class="fa fa-github"></i></a></li>
            <li><a href="https://twitter.com/tana_fe" target="_blank"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div> <!-- end footer-content -->
</footer> --}}