@include('component.shablon')
<div style="max-width:900px;margin:50px auto;padding:20px;background:#fff;border-radius:10px;
            box-shadow:0 4px 12px rgba(0,0,0,0.1);font-family:Arial, sans-serif;">

    <!-- Фото товара -->
    <div style="text-align:center;margin-bottom:20px;">
        <img src="{{ asset($product->product_photo) }}" alt="{{ $product->name }}"
             style="max-width:100%;height:auto;border-radius:10px;">
    </div>

    <!-- Название -->
    <h1 style="font-size:28px;margin-bottom:10px;color:#333;">{{ $product->name }}</h1>

    <!-- Категория -->
    <p style="color:#777;font-size:14px;margin-bottom:15px;">
        Категория: <strong>{{ $product->category->category ?? 'Без категории' }}</strong>
    </p>

    <!-- Описание -->
    <p style="line-height:1.6;color:#555;font-size:16px;margin-bottom:20px;">
        {{ $product->description }}
    </p>

    <!-- Цена -->
    <div style="font-size:22px;color:#e74c3c;font-weight:bold;margin-bottom:20px;">
        {{ number_format($product->price, 2, '.', ' ') }} ₽
    </div>

    <form action="{{ route('CartStore', $product->id) }}" method="post" style="max-width: 300px;">
        @csrf

        <div style="display: flex; flex-direction: column; gap: 10px;">
            <label for="num_cart" style="font-weight: bold; font-size: 14px;">Количество</label>
            <input
                type="number"
                name="quantity"
                id="num_cart"
                value="1"
                min="1"
                style="padding: 8px 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px; width: 100px;"
            >

            <button
                type="submit"
                style="padding: 12px 20px; background: #27ae60; color: #fff; border: none;
                   border-radius: 5px; font-size: 16px; cursor: pointer; transition: background 0.3s ease;">
                🛒 Добавить в корзину
            </button>
        </div>
    </form>


        <a href="{{ route('index') }}" style="padding:12px 20px;background:#3498db;color:#fff;
                   border:none;border-radius:5px;font-size:16px;text-decoration:none;">
            Назад к товарам
        </a>

    <form action="{{route('MaFavoritesStore', $product->id)}}" method="post" style="display:inline;">
        @csrf
        <button type="submit"
                style="padding:12px 20px;background:#f39c12;color:#fff;border:none;
                   border-radius:5px;font-size:16px;cursor:pointer;transition:0.3s;
                   box-shadow:0 4px 8px rgba(0,0,0,0.1);">
            ⭐ В избранное
        </button>
    </form>

        <form action="{{route('HelpPage',$product->id)}}" method="post" style="display:inline;">
            @csrf
            <button type="submit"
                    style="padding:12px 20px;background:#e74c3c;color:#fff;border:none;
                       border-radius:5px;font-size:16px;cursor:pointer;transition:0.3s;
                       box-shadow:0 4px 8px rgba(0,0,0,0.1);">
                🚨 Пожаловаться
            </button>
        </form>
    </div>

</div>
<!-- Кнопка "Пожаловаться" -->

<hr>Отзывы
<form action="{{route('CommentStore', $product->id)}}" method="post">
    @csrf
    <input type="text" name="comment"><br>
    <button type="submit">Отправить</button>
    <br>
</form>
<hr>

@foreach($product->comments as $comment)
{{$comment->user->name}}<br>
{{$comment->comment}}<br>
@endforeach
