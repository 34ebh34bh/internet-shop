<?php

namespace App\Http\Controllers;

use App\Mail\MailVerification;
use App\Models\role;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Code;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function Admin(Product $product, Category $category) {
        if(Gate::denies('admin')){
            abort(403);
        }
        return view('Admin.dashboard', compact('product', 'category'));
    }

    public function CreatePage() {
        $Categorys = Category::all();
        return view('Admin.create', compact('Categorys'));
    }

    public function CreateProductStore(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'product_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:102048',
            'category_id' => 'nullable|exists:categories,id'
        ]);

        if ($request->hasFile('product_photo')) {
            $FilePath = $request->file('product_photo')->store('product_photo', 'public');
            $data['product_photo'] = "storage/{$FilePath}";
        }
        else {
            $data['product_photo'] = null;
        }

        $data['category_id'] = $request->input('category_id');
        Product::create($data);
        return redirect()->route('Admin');
    }

    public function CreateCategory() {
        return view('Admin.createCategory');
    }

    public function CreateProductStoreCategory(Request $request) {
        $data = $request->validate([
            'category' => 'required|string|max:255'
        ]);

        Category::create($data);
        return redirect()->route('Admin');
    }

    public function AdminRoleIssue(User $user) {
        $Users = User::all();
        return view('Admin.get_role', compact('Users'));
    }

    public function delete(Product $product) {
        $product->comments()->delete(); // нам надо удалить связь в иаблтцк с комеентарием
        $product->supportforms()->delete(); // нам надо удалить связь в иаблтцк с комеентарием
        $product->delete();
        return redirect()->back();
    }

    public function DeleteShowPage() {
        $products = Product::all();
        $Categories = Category::all();
        return view('Admin.DeleteShowPage', compact('products', 'Categories'));
    }

    public function DeleteCategory(Category $category) {
        $category->delete();
        return redirect()->back();

    }

    public function UpdateCategoryPage()
    {
        $categories = Category::all();
        return view('Admin.UpdateCategoryPage', compact('categories'));
    }
    public function UpdateCategoryPageUpd(category $category)
    {
        return view('Admin.SelectUpdateCategoryPage', compact('category'));
    }

    public function UpdateSelectCategoryStore(Request $request, $category)
    {
        $data = $request->validate([
            'category' => 'required|string|max:255'
        ]);
        $category = Category::find($category);
        $category->update($data);
        return redirect()->route('Admin');
    }

    public function UpdateProductPageUpd()
    {
        $products = Product::all();
        return view('Admin.SelectUpdateProductPage', compact('products'));
    }


    public function UUpdateProductPageUpdSelect(product $product)
    {
        $categorys = Category::all();
        return view('Admin.UpdProd', compact('product', 'categorys'));
    }

    public function StoreProductUpdate(Request $request, product $product) {
        $data = $request->validate([
            'name' => 'string|max:255',
            'description' => 'string|max:255',
            'price' => 'string|max:255',
            'product_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:102048',
            'category_id' => 'nullable|exists:categories,id'
        ]);
        if ($request->hasFile('product_photo')) {
            $FilePath = $request->file('product_photo')->store('product_photo', 'public');
            $data['product_photo'] = "storage/{$FilePath}";
        }

        $product->update($data);
        return redirect()->route('Admin');
    }

    public function ContactDate()
    {
        return view('Contact');
    }

    public function roles(User $user) { // тут у нас по id находится пользователь которому меняем role
        $rolse = role::all();
        return view('Admin.rolespage', compact('user', 'rolse'));
    }

    public function rolesstore(Request $request, User $user) { // тут меняем у же
        $user->role = $request->input('role'); // обращаемся к в таблицк users к полю role и там из реквеста помезаем выбраное
        $user->save(); //сохраняем
        return redirect()->route('Admin');
    }

    public function verification(user $user) {
        if (Gate::denies('verification')){
            abort(403);
        }
        $user->code = rand(100000, 999999);
        $user->save();

        Mail::to($user->email)->send(new MailVerification($user));

        return view('Admin.verification', compact('user'));
    }

    public function verificationstore(Request $request, user $user) {
        if ($user->code === $request->email_verif) {
            $user->verification = 1;
            $user->save();
            return redirect()->route('profile',$user->id);
        }
        else {
            dd('ошибка');
        }
    }



}
