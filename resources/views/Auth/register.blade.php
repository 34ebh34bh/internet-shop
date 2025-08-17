<!DOCTYPE html>
<html lang="ru">
@include('component.regcomp')
<body>

<div class="register-container">
    <h2>Регистрация</h2>
    <form method="post" action="{{ route('Registerstore') }}">
        @csrf
        <input type="text" name="name" placeholder="Имя" required>
        <input type="email" name="email" placeholder="Email"  required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit">Зарегистрироваться</button>
    </form>
</div>

</body>
</html>
