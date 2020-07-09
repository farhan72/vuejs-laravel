<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public $timestamps = false;

    protected $table = "tbl-price";
    protected $fillable = ['label_package','real_price','discount_price','total_users','features','is_best_sellet'];
}
