<x-layout>
    <x-slot:heading>
        Edit a Product
    </x-slot:heading>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}"/>
        </div>

        <div>
            <label>Quantity</label>
            <input type="text" name="qty" placeholder="Quantity" value="{{$product->qty}}"/>
        </div>

        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}"/>
        </div>

        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}"/>
        </div>

        <div>
            <input type="submit" value="Update Product"/>
        </div>
    </form>
</x-layout>
