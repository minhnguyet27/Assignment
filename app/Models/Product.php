<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $table = 'products';
    public $timestamp = false;
    public $primaryKey = 'product_id';
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name', 'price', 'description','image_url','quantity','view'];// thêm các cột mới vào đây    ];
        public function orderDetails()
        {
            return $this->hasMany(OrderDetail::class);
        }   
}
 