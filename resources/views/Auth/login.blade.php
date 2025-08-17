<!DOCTYPE html>
<html lang="ru">
@include('component.logincomp')
<body>

<div class="login-container">
    <h2>Войти</h2>
    <form action="{{route('loginstore')}}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit">Войти</button>
    </form>
</div>

</body>
</html>
