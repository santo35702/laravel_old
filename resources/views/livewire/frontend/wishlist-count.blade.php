@if (Cart::instance('wishlist')->count() > 0)
    <li><a href="{{ route('wishlist') }}">Wishlist <span class="badge badge-light">{{ Cart::instance('wishlist')->count() }}</span></a></li>
@else
    <li><a href="{{ route('wishlist') }}">Wishlist <span class="badge badge-light">0</span></a></li>
@endif
