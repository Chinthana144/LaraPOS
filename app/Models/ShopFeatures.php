<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopFeatures extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'is_wholesale',
        'is_retail',
        'is_inventory',
        'is_minus',
        'is_category',
        'is_image',
        'is_expire',
        'is_supplier',
        'is_service',
        'is_salesman',
        'is_expenses',
        'is_customers',
        'is_fixedprice',
        'is_warranty',
        'is_promotions',
        'is_secondlanguage',
        'is_labelprice',
        'is_quotation',
        'is_racks',
        'is_color',
        'is_size',
    ];

    public function shop()
    {
        return $this->belongsTo(Shops::class, 'shop_id');
    }
}
