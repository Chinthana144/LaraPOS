<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'CategoryName',
        'shop_id',
    ];

    //stock type
    public function Shops()
    {
        return $this->belongsTo(Shops::class, 'shop_id');
    }
}
