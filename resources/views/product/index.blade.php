<!doctype html>
<html lang="en">
@include('component.product-style')
<body>

<div class="navbar">
    <div class="logo">MyShop</div>
    <div class="menu">
        <a href="{{route('index')}}">Товары</a>
        @can('admin')
        <a href="{{route('Admin')}}">Admin</a>
        @endcan
        <a href="{{route('ContactDate')}}">Контакты</a>
        <a href="{{route('MaFavorites')}}"> <img src="/images/folower_product.png" alt=""> Избранное</a>
        <a href="{{route('MyCart')}}">Корзина</a>
    </div>

    <div class="profile-container">
        <div class="profile" onclick="toggleProfileMenu()">
            <img src="/images/profile-icon.png" alt="Профиль" class="profile-icon">
        </div>
        <div class="profile-menu" id="profileMenu">
        @auth()
            <a href="{{route('profile', auth()->user()->id)}}">{{auth()->user()->name}}</a>
            <a href="{{route('logout')}}">Выйти</a>
        @endauth
        @guest()
            <a href="{{route('registerpage')}}">Зарегистрироваться</a>
            <a href="{{route('login')}}">Войти</a>
        @endguest
        </div>
    </div>
</div>

<hr>
<form action="{{ route('index') }}" method="get">
    <input type="text" name="name" placeholder="Название">
    <input type="text" name="description" placeholder="Описание">
    <input type="text" name="category" placeholder="category">
    <button type="submit">Найти</button>
</form>
<hr>

@foreach($products as $product)
<div class="container">
    <div class="card">
        @if($product->product_photo)
            <img src="{{asset($product->product_photo)}}" alt="Product Image">
        @endif
        <div class="card-content">
            <div class="card-title">{{$product->name}}</div>
            <div class="card-description">{{$product->description}}</div>
            <div class="card-price">{{$product->category->category}}</div>
            <div class="card-price">{{$product->price}}₽</div>
            <a href="{{route('ShowProduct', $product->id)}}" class="buy-button">Подробнее</a>
        </div>
    </div>
</div>
@endforeach

</body>
</html>
