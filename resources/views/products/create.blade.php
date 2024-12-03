<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
</head>
<body>
    <h1>Create a Product</h1>
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
</body>
</html>
