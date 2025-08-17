@include('component.DangerButtonBack')
<div class="container mt-4">
    <h2 class="mb-4">🛒 Моя корзина</h2>

    @forelse($carts as $cart)
        <div class="card mb-3 shadow-sm">
            <div class="row g-0">
                {{-- Фото товара --}}
                <div class="col-md-3">
                    @if($cart->product && $cart->product->image)
                        <img src="{{ $cart->product->product_photo }}"
                             class="img-fluid rounded-start"
                             alt="{{ $cart->product->name }}">
                    @else
                        <img src="/images/no_image.png"
                             class="img-fluid rounded-start"
                             alt="Нет фото">
                    @endif
                </div>

                    <?php $total = $cart->product->price * $cart->quantity; ?>

                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cart->product->name }}</h5>
                        <p class="card-text text-muted">{{ $cart->product->description }}</p>
                        <p class="card-text fw-bold">{{ number_format($total , 0, ',', ' ') }} ₽</p>
                        <p class="card-text">
                            Количество: <strong>{{ $cart->quantity }}</strong>
                        </p>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-center justify-content-center">

                    <form action="{{route('DeleteCart',$cart->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">
                            <img src="/images/delete_product.png"
                                 alt="Удалить"
                                 width="24"
                                 height="24">
                            Удалить
                        </button>
                    </form>
                </div>

                <form action="{{route('order',$cart->id)}}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">купить</button>
                </form>
            </div>

            </div>
        </div>
    @empty
        <p class="text-muted">Ваша корзина пуста.</p>
    @endforelse
</div>
