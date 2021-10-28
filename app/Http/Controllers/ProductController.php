<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\GetProduct;
use App\Models\Product;

class ProductController extends Controller
{
    public function getproduct($productID){

        $categorys= Category::where('ParentID',0)->get();
        $product=GetProduct::where('ID',$productID)->first();
        return view('pages.detailproduct',compact('categorys','product'));
    }
}
