<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    public $primaryKey = 'order_details_id';
    use HasFactory;
    protected $fillable = [
        'quantity',
        'price',
        'order_id',
        'product_id'
    ];
    public function order():HasOne {
        return $this->hasOne(Order::class,);
    }
    public function product():BelongsTo{
        return $this->belongsTo(Product::class,);
    }
    
}