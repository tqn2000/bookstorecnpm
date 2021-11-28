<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
   protected $table ='imageproduct';
   public function Product(){

       return $this->belongsTo('app\Models\Product');

   }
}
