<!doctype html>
<html lang="ru">
@include('component.AdminCreateCategory')
@include('component.DangerButtonBack')
<body>
<h1>Список пользователей и их роли</h1>
<table>
    <thead>
    <tr>
        <th>Имя</th>
        <th>Роль</th>
        <th>Действие</th>
    </tr>
    </thead>
    <tbody>
    @foreach($Users as $User)
        <tr>
            <td>{{ $User->name }}</td>
            <td>{{ $User->role ?? 'Нет роли' }}</td>
            <td>
                <a href="{{ route('roles', $User->id) }}" class="button">Выдать права</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
