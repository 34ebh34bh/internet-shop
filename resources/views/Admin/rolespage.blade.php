
@include('component.DangerButtonBack')

<div style="max-width:400px;margin:50px auto;padding:20px;background:#fff;border-radius:12px;
box-shadow:0 4px 12px rgba(0,0,0,0.1);font-family:Arial;text-align:center;">

    <h2 style="margin-bottom:10px;color:#333;">Изменить роль пользователя</h2>

    <div style="margin-bottom:15px;">
        <strong>Имя:</strong> <span style="color:#555;">{{ $user->name }}</span>
    </div>
    <div style="margin-bottom:20px;">
        <strong>Текущая роль:</strong>
        <span style="padding:4px 8px;background:#f0f0f0;border-radius:6px;color:#333;">
            {{ $user->role }}
        </span>
    </div>

    <form action="{{ route('rolesstore',$user->id) }}" method="post">
        @csrf
        <label for="role" style="display:block;margin-bottom:8px;color:#333;font-weight:bold;">
            Выберите новую роль:
        </label>
        <select name="role" id="role"
                style="padding:8px;width:100%;border:1px solid #ccc;border-radius:6px;margin-bottom:15px;">
            @foreach($rolse as $rols)
                <option value="{{ $rols->role_name }}"
                    {{ $user->role === $rols->role_name ? 'selected' : '' }}>
                    {{ $rols->role_name }}
                </option>
            @endforeach
        </select>

        <button type="submit"
                style="background:#4CAF50;color:#fff;border:none;padding:10px 15px;
            border-radius:6px;cursor:pointer;font-size:14px;">
            💾 Сохранить изменения
        </button>
    </form>
</div>
