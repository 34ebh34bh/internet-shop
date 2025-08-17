<!DOCTYPE html>
<html lang="ru">
@include('component.DangerButtonBack')
@include('component.AdminCategoryCreate')
<body>

<div class="form-container">
    <h2>Добавить категорию</h2>
    <form action="{{route('AdminCreateStoreCategory')}}" method="post">
        @csrf
        <label for="name">Название категории *</label>
        <input type="text" id="name" name="category" required maxlength="255" placeholder="Введите название категории">
        <button type="submit">Сохранить</button>
    </form>
</div>

</body>
</html>
