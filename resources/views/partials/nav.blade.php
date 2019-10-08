<header>
    <div class="top-nav container">
        <div class="logo"><a href="/" id="h-title">Surfboard Shop</a></div>
        @if (! request()->is('checkout'))
        {{ menu('main', 'partials.menus.main') }}
        @endif
    </div> <!-- end top-nav -->
</header>
