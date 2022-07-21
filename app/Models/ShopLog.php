<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopLog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pwp_shop_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid',
        'item_name',
        'item_id',
        'price'
    ];
}