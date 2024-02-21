<a href="{{ route('product', ['product' => $product->id]) }}" class="product_card">
    <div>
        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ ucfirst($product->title) }}">
        <div class="overlay">
            <p style="color:white">{{ ucfirst($product->title) }}</p>
        </div>
    </div>

    <p class="price">{{ "$".$product->price }}</p>
    <div class="reviews">
        <span>4.5 stars</span>
        <br />
        <div class="stars">★★★★☆</div>
    </div>
</a>
