<x-app-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    </x-slot>
    <section>
        <main class="_container">
            <div class="product flex_align">
                <div class="card">
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{$product->title}}">
                    <div class="details">
                        <h1>{{ucfirst($product->title)}}</h1>
                        <h2>{{"$".$product->price}}</h2>
                        <p>Category: {{$product->category->title}}</p>
                        <p>{{ $product->stock_quantity > 0 ? "In Stock" : "Out of Stock" }}</p>
                        <p>{{ucfirst($product->about)}}</p>
                        @if ($isAdded)
                        <button class="cta" onclick="window.location = '{{ route('cart') }}'">Go to Cart</button>
                        @else
                        @auth
                        <form action="{{ route('atc', ['product'=>$product->id]) }}" method="post">
                            @csrf
                            <button type="submit" class="cta">Add to Cart</button>
                        </form>
                        <form>
                            <button class="cta" data-product="{{ $product->id }}">
                                Reviews
                            </button>
                        </form>
                        @endauth
                        @guest
                        <button class="cta" onclick="addToCart({{$product->id}})" data-product="{{ $product->id }}">Add
                            to Cart</button>
                        @endguest
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </section>
</x-app-layout>
