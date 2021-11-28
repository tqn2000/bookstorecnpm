<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\GetProduct;
use App\Models\Product;
use App\Models\testproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainPageController extends Controller
{
    public function index(){
        $categorys= Category::where('ParentID',0)->get();  
        // $products= testproduct::get();
        $news=(DB::select('CALL getnews2()'));
        return view('pages.home',compact('categorys','news'));
    }
    // public function quickview($productID){
    //     $productview=GetProduct::where('ID',$productID)->first();
    //     return view('pages.home',compact('productview'));
    // }
};
