<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    use HasFactory;

    protected $fillable = [
        'ShopName',
        'AddressOne',
        'AddressTwo',
        'AddressThree',
        'Contact',
        'Email',
        'ShopLogo',
        'ReceiptLogo',
        'stocktype_id',
        'company_id',
        'ShopStat',
    ];

    //stock type
    public function StockType()
    {
        return $this->belongsTo(StockTypes::class, 'stocktype_id');
    }

    //company
    public function company()
    {
        return $this->belongsTo(Companies::class, 'company_id');
    }
}
