<!doctype html>
<html lang="ru">
@include('component.AdmniCreatePanel')
@include('component.DangerButtonBack')

<body>

<div class="form-container">
    <h2>Добавить товар</h2>
    <form action="{{route('AdminCreateStore')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Название *</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Описание</label>
        <textarea id="description" name="description" rows="4"></textarea>

        <select name="category_id" required>
            <option value="" disabled selected>-- Выберите категорию --</option>
            @foreach($Categorys as $Category)
                <option value="{{ $Category->id }}">{{ $Category->category }}</option>
            @endforeach
        </select>

        <label for="price">Цена (₽) *</label>
        <input type="number" id="price" name="price" step="0.01" required>

        <label for="product_photo">Фото товара</label>
        <input type="file" id="product_photo" name="product_photo" accept="image/*">

        <button type="submit">Сохранить</button>
    </form>
</div>

</body>
</html>
