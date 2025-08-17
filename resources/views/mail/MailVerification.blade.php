<!DOCTYPE html>
<html lang="ru">
@include('component.mailcomp')
<body>
<div class="container">
    <h1>Код подтверждения</h1>
    <p>Здравствуйте, {{ $user->name }}!</p>
    <p>Пожалуйста, используйте следующий код для подтверждения вашей почты:</p>
    <div class="code">{{ $user->code }}</div>
    <p>Если вы не запрашивали этот код, просто проигнорируйте это письмо.</p>
    <footer>
        &copy; {{ date('Y') }} MyShop. Все права защищены.
    </footer>
</div>
</body>
</html>
