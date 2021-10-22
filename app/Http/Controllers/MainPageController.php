<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\testproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainPageController extends Controller
{
    public function index(){
        $categorys= Category::where('ParentID',0)->where('Status',1)->get();  
        $products= testproduct::get();
         
        return view('pages.home',compact('categorys','products'));
    }
};
