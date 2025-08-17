@include('component.DangerButtonBack')
@foreach($favorites as $favorite)
    {{$favorite->product->name}}<br>
    {{$favorite->product->description}}<br>

    <form action="{{route('DeleteFavorite', $favorite->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit"><img src="/images/delete_product.png" alt=""></button>
    </form>
@endforeach
