<!doctype html>
<html lang="ru">
@include('component.DangerButtonBack')
@include('component.AdminUpdateCategoryPageSelect')


<body>

<h1>Список категорий</h1>

<div class="category-container">
    @foreach($categories as $categorie)
        <div class="category-card">
            <div class="category-info">
                <div class="category-id">ID: {{ $categorie->id }}</div>
                <div class="category-name">Название: {{ $categorie->category }}</div>
            </div>
            <a href="{{ route('UpdateCategoryStoreUpd', $categorie->id) }}" class="update-button">Обновить</a>
        </div>
    @endforeach
</div>

</body>
</html>
