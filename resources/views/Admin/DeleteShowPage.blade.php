<!doctype html>
<html lang="ru">
@include('component.AdmniDeleteComm')
@include('component.DangerButtonBack')
<body>

<!-- Товары -->
<h2>Товары</h2>
<div class="grid">
    @foreach($products as $product)
        <div class="card">
            <img src="https://via.placeholder.com/300x200" alt="Product Image">
            <div class="card-content">
                <div class="card-title">{{ $product->name }}</div>
                <div class="card-description">{{ $product->description }}</div>
                <form action="{{ route('delete', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить товар</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<!-- Категории -->
<h2>Категории</h2>
<div class="category-list">
    @foreach($Categories as $category)
        <div class="category-item">
            <div class="category-name">{{ $category->category }}</div>
            <form action="{{ route('DeleteCategory', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить категорию</button>
            </form>
        </div>
    @endforeach
</div>

</body>
</html>
