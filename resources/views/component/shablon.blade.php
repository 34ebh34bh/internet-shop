@include('component.product-style')

<div class="navbar">
        <div class="logo">MyShop</div>
        <div class="menu">
            <a href="{{route('index')}}">Товары</a>
{{--            <a href="{{route('Admin')}}">Admin</a>--}}
            <a href="{{route('ContactDate')}}">Контакты</a>
        </div>
        <div class="profile-container">
            <div class="profile" onclick="toggleProfileMenu()">
                <img src="/images/profile-icon.png" alt="Профиль" class="profile-icon">
            </div>
            <div class="profile-menu" id="profileMenu">
                @auth()
                    <a href="{{route('profile', auth()->user()->id)}}">{{auth()->user()->name}}</a>
                    {{--            <a href="#">Настройки</a>--}}
                    <a href="{{route('logout')}}">Выйти</a>
                @endauth
                @guest()
                    <a href="{{route('registerpage')}}">Зарегистрироваться</a>
                    <a href="{{route('login')}}">Войти</a>
                @endguest
            </div>
        </div>
    </div>


