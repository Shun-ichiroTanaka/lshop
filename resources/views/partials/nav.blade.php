<header>
    <div class="top-nav container">
        <div class="top-nav-left">
            <div class="logo"><a href="/" id="h-title">Surfboard Shop</a></div>
            @if (! request()->is('checkout'))
            {{ menu('main', 'partials.menus.main') }}
            @endif
        </div>
        <div class="top-nav-right">
            @if (! request()->is('checkout'))
            @endif
        </div>

    </div> <!-- end top-nav -->
</header>
