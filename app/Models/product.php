<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "user_name",
        "product_Name",
        "product_Category",
        "product_Brand",
        "product_Location",
        "product_Price",
        "product_Quantity",
        "product_Status",
    ];

    public function product()
    {
        return $this->belongsTo(accountProduct::class);
    }
}
