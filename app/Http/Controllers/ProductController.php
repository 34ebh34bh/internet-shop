<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Category;
use App\Models\favorite;
use App\Models\prichina;
use App\Models\supportform;
use App\Models\Product;
use App\Models\user;
use App\Models\comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function index(Request $request ,user $user)
    {
        $ProductQuery = Product::query();

        if ($request->filled('name')) {
            $ProductQuery->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->filled('description')) {
            $ProductQuery->where('description', 'like', '%' . $request->input('description') . '%');
        }

        if ($request->filled('category')) {
            $ProductQuery->where('category_id', $request->input('category'));
        }


        $products = $ProductQuery->get();
        return view('product.index', compact('products', 'user'));
    }

    public function ShowProduct(Product $product)
    {
        $product->load('comments.user'); // зашружает все комментарии на пролукт а user это тут что ещё что бы к имени обратитььбся пользователя которы написсол
        return view('product.show', compact('product'));
    }

    public function CreateProductPage()
    {
        if (Gate::denies('verification-store')) {
            abort(403);
        }
        $Categorys = Category::all();
        return view('product.create', compact('Categorys'));
    }

    public function CreateProductStorew(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'product_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:102048',
            'category_id' => 'nullable|exists:categories,id',
            'user_id' => 'nullable|exists:users,id',
        ]);

        if ($request->hasFile('product_photo')) {
            $FilePath = $request->file('product_photo')->store('product_photo', 'public');
            $data['product_photo'] = "storage/{$FilePath}";
        } else {
            $data['product_photo'] = null;
        }
        $data['user_id'] = auth()->user()->id;
        $data['category_id'] = $request->input('category_id');
        Product::create($data);
        return redirect()->route('index');
    }

    public function HelpPage(product $product)
    {
        $prichinas = prichina::all();
        return view('product.help', compact('product', 'prichinas'));
    }

    public function HelpStore(Request $request, product $product)
    {
        $data = $request->validate([
            'description' => 'required|string|max:500',
        ]);

        $productid = $request->route('product');

        supportform::create([
            'prichina' => $request->input('prichina'),
            'description' => $data['description'],
            'user_id' => auth()->user()->id,
            'product_id' => $productid->id,
        ]);
        return redirect()->route('ShowProduct', $productid->id);
    }

    public function CommentStore(Request $request, product $product)
    {
        $data = $request->validate([
            'comment' => 'required|string|max:500',
        ]);

        $productid = $request->route('product');

        comment::create([
            'comment' => $data['comment'],
            'user_id' => auth()->user()->id,
            'product_id' => $productid->id,
        ]);
        return redirect()->back();
    }

    public function MyProduct(user $user)
    {
        $products = Product::where('user_id', auth()->user()->id)->get();
        return view('product.myproduct', compact('products'));
    }

    public function CartStore(Request $request, product $product)
    {

        $productid = $request->route('product');
//        $cartitem = cart::where('user_id', auth()->user()->id)
//            ->where('product_id', $product->id)
//            ->first();

        $cartitem = Cart::where('user_id', auth()->id())
            ->where('product_id', $product->id)
            ->first();

        if ($cartitem) {
            $cartitem->quantity += $request->input('quantity');
            return redirect()->route('MyCart');
        } else {
            cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $productid->id,
                'quantity' => $request->input('quantity') ?? 1,
            ]);
        }
        return redirect()->back();
    }

    public function MyCart()
    {
        $carts = Cart::where('user_id', auth()->id())
            ->whereHas('product') // добавляем условие, что product существует
            ->with('product')
            ->get();
        return view('product.MyCart', compact('carts'));
    }

    public function DeleteCart(cart $cart)
    {
        $cart->delete();
        return redirect()->back();
    }

    public function MaFavorites()
    {
        $favorites = favorite::where('user_id', auth()->user()->id)
            ->with('product')->get();
        return view('product.favorites', compact('favorites'));
    }

    public function MaFavoritesStore(Request $request, product $product)
    {
        $productid = $request->route('product');

        $favorite = favorite::where('user_id', auth()->id())
            ->where('product_id', $product->id)
            ->first();

        if ($favorite) {
            return redirect()->back();
        } else {
            favorite::create([
                'user_id' => auth()->user()->id,
                'product_id' => $productid->id,
            ]);
        }

        return redirect()->back();
    }

    public function DeleteFavorite(favorite $favorite)
    {
        $favorite->delete();
        return redirect()->back();
    }
}
