<!doctype html>
<html lang="ru">
@include('component.DangerButtonBack')
@include('component.AdminComponentUpdateSelectPage')
<body>

<div class="form-container">
    <h2>Редактировать категорию</h2>
    <form action="{{ route('UpdateCategoryStoreUpd', $category->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="category">Название категории</label>
        <input type="text" id="category" name="category" value="{{ $category->category }}" required>

        <button type="submit">Сохранить изменения</button>
    </form>
</div>

</body>
</html>
