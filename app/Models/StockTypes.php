<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockTypes extends Model
{
    use HasFactory;
    protected $fillable = [
        'StockTypeName',
    ];

    public function shops()
    {
        return $this->hasMany(Shops::class, "stocktype_id");
    }
}
