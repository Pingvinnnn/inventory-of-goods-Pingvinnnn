<h1>Редактировать товар</h1>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    <label for="name">Название:</label>
    <input type="text" id="name" name="name" value="{{ $product->name }}"><br><br>
    <label for="description">Описание:</label>
    <textarea id="description" name="description">{{ $product->description }}</textarea><br><br>
    <label for="price">Цена:</label>
    <input type="number" id="price" name="price" value="{{ $product->price }}"><br><br>
    <label for="quantity">Количество:</label>
    <input type="number" id="quantity" name="quantity" value="{{ $product->quantity }}"><br><br>
    <input type="submit" value="Обновить">
</form>
