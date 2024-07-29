<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    protected $table = 'orders';
    public $primaryKey = 'order_id';
    
    use HasFactory;
    protected $fillable = [
        'totalPrice',
        'status',
        'user_id',
    ];
    public function orderDetail(): HasOne {
        return $this->hasOne(OrderDetail::class);
    }
    public function user(): HasOne {
        return $this->hasOne(User::class);
    }
}