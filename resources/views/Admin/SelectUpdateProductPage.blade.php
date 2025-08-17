<!doctype html>
<html lang="ru">
@include('component.ProductSelectUpdate')
@include('component.DangerButtonBack')
<body>

<h1>Список товаров</h1>

<div class="container">
    @foreach($products as $product)
        <div class="card">
            <h3>{{ $product->name }}</h3>
            <p><strong>Описание:</strong> {{ $product->description }}</p>
            <p><strong>Категория:</strong> {{ $product->category->category }}</p>
            <p><strong>Цена:</strong> {{ $product->price }} ₽</p>
            @if($product->product_photo)
                <img src="{{asset($product->product_photo)}}" alt="Product Image">
            @endif
            <a href="{{ route('uPageStoreUpdProductSelect', $product->id) }}" class="update-button">Обновить</a>
        </div>
    @endforeach
</div>

</body>
</html>
