<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table ='allproducts';
    protected $fillable=['name','price','quantity','discription','image','rate','catid'];

}
