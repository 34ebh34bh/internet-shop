<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'carts';
    protected $guarded = false;

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        return $this->belongsTo(product::class);
    }
}
