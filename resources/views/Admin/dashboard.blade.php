<!doctype html>
<html lang="ru">
@include('component.AdmniDashboard')
{{--@include('component.DangerButtonBack')--}}

<body>


<div class="sidebar">
    <h2>Админка</h2>
    <a href="{{route('index')}}"><span>🏠</span> Главная</a>
    <a href="{{route('AdminCreatePage')}}"><span>➕</span> Создать товар</a>
    <a href="{{route('AdminCreatePageCategory')}}"><span>➕</span> Создать категорию</a>
    <a href="{{route('AdminRoleIssue')}}"><span>🔐</span> Выдать права</a>
    <a href="{{route('DeleteShowPage')}}"><span>❌</span> Удалить</a>
    <a href="{{route('UpdateCategoryPage')}}"><span>♻️</span> Обновить категорию</a>
    <a href="{{route('PageStoreUpdProductUpd')}}"><span>♻️</span> Обновить продукт</a>
</div>

<!-- Main Content -->
<div class="main">
    <h1>Панель администратора</h1>
    <div class="content-box">
        <p>Здесь будет отображаться контент в зависимости от выбранного действия.</p>
        <p>Выберите пункт в меню слева, чтобы начать.</p>
    </div>
</div>

</body>
</html>
