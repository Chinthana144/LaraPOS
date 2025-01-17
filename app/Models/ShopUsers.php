<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopUsers extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop_id',
        'user_id',
    ];

    public function shop()
    {
        return $this->belongsTo(Shops::class, 'shop_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
