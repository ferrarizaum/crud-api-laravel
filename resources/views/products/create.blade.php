<x-layout>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name"/>
        </div>

        <div>
            <label>Quantity</label>
            <input type="text" name="qty" placeholder="Quantity"/>
        </div>

        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price"/>
        </div>

        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description"/>
        </div>

        <div>
            <input type="submit" value="Save Product"/>
        </div>
    </form>
</x-layout>

