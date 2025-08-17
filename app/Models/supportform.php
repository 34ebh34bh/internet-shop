<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class supportform extends Model
{
    protected $table = 'supportforms';
    protected $guarded = false;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

}
