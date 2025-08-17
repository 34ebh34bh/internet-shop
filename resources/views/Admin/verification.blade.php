@include('component.DangerButtonBack')

<form action="{{ route('verificationstore', $user->id) }}" method="post" style="max-width: 320px; margin: 30px auto; padding: 20px; background: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); font-family: Arial, sans-serif;">
    @csrf
    <label for="email_verif" style="display: block; margin-bottom: 8px; font-weight: 600; color: #333;">Введите код подтверждения</label>
    <input
        type="text"
        id="email_verif"
        name="email_verif"
        placeholder="Код подтверждения"
        required
        style="width: 100%; padding: 10px 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; box-sizing: border-box;"
    >
    <button
        type="submit"
        style="width: 100%; padding: 12px; background-color: #4CAF50; border: none; border-radius: 4px; color: white; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;"
        onmouseover="this.style.backgroundColor='#45a049'"
        onmouseout="this.style.backgroundColor='#4CAF50'"
    >
        Подтвердить
    </button>
</form>
