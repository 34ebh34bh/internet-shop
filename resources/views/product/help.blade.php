@include('component.DangerButtonBack')
<form action="{{ route('HelpStore', $product->id) }}" method="POST" class="complaint-form">
    @csrf

    <label for="reason-select" class="form-label">Причина обращения:</label>
    <select name="prichina" id="reason-select" class="form-select">
        @foreach($prichinas as $prichina)
            <option value="{{ $prichina->prichina }}">{{ $prichina->prichina }}</option>
        @endforeach
    </select>

    <label for="description-input" class="form-label">Описание:</label>
    <textarea name="description" id="description-input" placeholder="Опишите свою жалобу" class="form-textarea"></textarea>

    <button type="submit" class="form-button">Отправить</button>
</form>
@include('component.suppcss')
