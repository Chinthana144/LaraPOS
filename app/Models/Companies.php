<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'ComLogo',
        'ComName',
        'Address',
        'Email',
        'ContactLand',
        'ContactMobile',
        'ComStat',
    ];

    public function shops()
    {
        return $this->hasMany(Shops::class, "company_id");
    }
}
