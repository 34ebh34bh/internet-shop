<!doctype html>
<html lang="ru">
@include('component.SelectUpdateProductPage')
@include('component.DangerButtonBack')
<body>

<div class="form-container">
    <h2>Редактировать товар</h2>

    <form action="{{ route('StoreProductUpdate', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <label for="name">Название</label>
        <input type="text" name="name" value="{{ $product->name }}" >

        <label for="description">Описание</label>
        <input type="text" name="description" value="{{ $product->description }}" >

        <label for="price">Цена</label>
        <input type="number" name="price" value="{{ $product->price }}" min="0" step="0.01" >



        <label for="product_photo">Фото</label>
        @if($product->product_photo)
            <img src="{{asset($product->product_photo)}}" alt="Product Image">
        @endif

        <input type="file" name="product_photo" accept="image/*">
        <label for="category_id">Категория</label>
        <select name="category_id" >
            @foreach($categorys as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->category }}
                </option>
            @endforeach
        </select>
        <br>
        <button type="submit">Сохранить изменения</button>
    </form>
</div>

</body>
</html>
