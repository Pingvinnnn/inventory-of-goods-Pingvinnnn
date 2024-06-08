<h1>Добавить товар</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <label for="name">Название:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="description">Описание:</label>
    <textarea id="description" name="description"></textarea><br><br>
    <label for="price">Цена:</label>
    <input type="number" id="price" name="price"><br><br>
    <label for="quantity">Количество:</label>
    <input type="number" id="quantity" name="quantity"><br><br>
    <input type="submit" value="Добавить">
</form>
