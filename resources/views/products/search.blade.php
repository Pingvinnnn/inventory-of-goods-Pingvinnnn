<h1>Результаты поиска:</h1>

<table>
    <thead>
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Количество</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Редактировать</a>
                <a href="{{ route('products.destroy', $product->id) }}">Удалить</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<form method="GET" action="{{ route('products.search') }}">
    @csrf
    <label for="query">Введите запрос:</label>
    <input type="search" id="query" name="query"><br><br>
    <input type="submit" value="Поиск">
</form>
