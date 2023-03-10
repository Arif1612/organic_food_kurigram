<x-backend.master>

    <x-slot:title>
        Products Show
    </x-slot:title>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('products.index') }}">
                <button type="button" class="btn btn-sm btn-outline-info">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <h1>Product Name: {{ $product->name }} </h1>
    <h1>Category: {{ $product->category->name }} </h1>
    <h1>Description: {{ $product->description }} </h1>
    <h1>Price: {{ $product->price }} </h1>
    <img width="200px" src="{{ $product->image }}" alt="">
    <img width="200px" src="{{ asset('storage/products/' . $product->image) }}" alt="">

    <h1>Is Available: {{ $product->is_active ? 'Yes' : 'No' }} </h1>




</x-backend.master>
