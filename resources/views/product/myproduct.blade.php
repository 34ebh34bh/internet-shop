@include('component.DangerButtonBack')
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; padding: 20px; font-family: Arial, sans-serif;">
    @foreach($products as $product)
        <div style="background: #fff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); overflow: hidden; display: flex; flex-direction: column;">

            <!-- Фото товара -->
            <div style="width: 100%; height: 200px; overflow: hidden;">
                <img src="{{ asset($product->product_photo) }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>

            <!-- Информация -->
            <div style="padding: 15px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h3 style="font-size: 18px; margin-bottom: 5px; color: #333;">{{ $product->name }}</h3>
                    <p style="color: #726969; font-size: 14px; margin-bottom: 10px;">
                        Категория: <strong>{{ $product->category->category ?? 'Без категории' }}</strong>
                    </p>
                    <p style="color: #555; font-size: 14px; margin-bottom: 15px; line-height: 1.4;">
                        {{ Str::limit($product->description, 80) }}
                    </p>
                </div>
        </div>
    @endforeach
</div>
