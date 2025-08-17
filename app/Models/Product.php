<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = false;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function supportforms() {
        return $this->hasMany(SupportForm::class);
    }


    public function users() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);

    }

    public function cart() {
        return $this->hasMany(Cart::class);
    }

    public function user_carts() {
        return $this->belongsTo(User::class);
    }

    public function users_fav() {
        return $this->belongsTo(User::class);
    }
    public function favorite() {
        return $this->hasMany(Favorite::class);
    }

}
