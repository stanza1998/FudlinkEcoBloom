<header
    style="background-color: #fff; border-bottom: solid #0b6e1f 3px; border-top: solid #0b6e1f 3px; border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; border-top-right-radius: 20px; border-top-left-radius: 20px;">
    <nav style="display: flex; justify-content: space-between; align-items: center; color: #000; padding: 0 20px;">
        <a class="logo-link d-b" href="{{ route('home') }}" style="text-decoration: none; color: #000;">
            <img class="d-b" src="{{ asset('img/logo-3.png') }}" alt="user">
        </a>

        <form class="ml-auto one-form" action="{{ route('shop') }}" method="GET"
            style="display: flex; align-items: center;">
            <input type="search" name="search" placeholder="Product name....." value="{{ $search ?? '' }}"
                style="padding: 8px; border-radius: 5px; border: 1px solid #0b6e1f; margin-right: 10px; background-color: transparent; color: #000; max-width: 200px;">
            <button type="submit"
                style="background-color: #0b6e1f; border: none; padding: 8px; border-radius: 5px; cursor: pointer; color: #fff;">
                Search
            </button>
        </form>

        <ul style="display: flex; align-items: center; list-style: none; margin: 0;">
            <li>
                <a class="logo-link d-b" href="{{ route('login') }}" style="text-decoration: none; color: #000;">
                    @if (auth()->check())
                    <span class="material-icons">perm_identity</span>
                    @else
                    Login
                    @endif
                </a>
                <a class="logo-link d-b" href="{{ route('shop') }}" style="text-decoration: none; color: #000;">
                    Shop
                </a>
            </li>

            <li>
                <a class="notification-link" href="{{ route('cart') }}"
                    style="text-decoration: none; color: #000; position: relative; display: flex; align-items: center;">
                    <span class="material-icons" style="margin-right: 5px;">shopping_cart</span>
                    @auth
                    @if ($product_count = auth()->user()->carts()->firstOrCreate(['status' =>
                    'N'])->products->sum('pivot.quantity'))
                    <span class='badge'
                        style="background-color: #0b6e1f; color: #fff; border-radius: 100%; padding: 2px 6px; position: absolute; top: -5px; right: -5px;">{{ $product_count }}</span>
                    @endif
                    @endauth
                    @guest
                    @if(request()->cookie('products') && $product_count =
                    array_sum(json_decode(request()->cookie('products'), true)))
                    <span class='badge'
                        style="background-color: #0b6e1f; color: #fff; border-radius: 100%; padding: 2px 6px; position: absolute; top: -5px; right: -5px;">{{ $product_count }}</span>
                    @endif
                    @endguest
                </a>
            </li>
        </ul>
    </nav>
</header>
