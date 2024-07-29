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
    use HasFactory;
    protected $guarded = [] ;
    
}