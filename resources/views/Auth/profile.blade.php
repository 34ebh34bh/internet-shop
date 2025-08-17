@include('component.shablon')
<div style="max-width:300px;margin:80px auto 0;padding:20px;background:#fff;
border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,0.1);
text-align:center;font-family:Arial;">

    <h3 style="margin:5px 0;">{{ $user->name }}</h3>
    <p style="color:#555;margin:4px 0;">{{ $user->email }}</p>

    <div style="margin-top:20px;">
        @can('verification')
            <form action="{{ route('verification', auth()->user()->id) }}" method="post">
                @csrf
                <button type="submit"
                        style="display:inline-block;background:#4CAF50;color:#fff;
                    border:none;padding:10px 20px;border-radius:6px;
                    font-size:14px;cursor:pointer;transition:0.3s;">
                    ✅ Подтвердить почту
                </button>
            </form>
            <p style="margin-top:10px;font-size:12px;color:#777;">
                После подтверждения вы сможете добавлять товары.
            </p>
        @endcan

        @can('verification-store')
            <a href="{{route('CreateProductPage')}}">Создать товар</a>
        @endcan

        @can('verification-store')
            <a href="{{route('MyProduct', auth()->user()->id)}}">Мои товары</a>
        @endcan

    </div>
</div>
