<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\GetProduct;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class ProductController extends Controller
{
    public function getproduct($productID){

        // $categorys= Category::where('ParentID',0)->get();
        // $product=DB::select('CALL getproduct('.$productID.')');
        // return view('pages.detailproduct',compact('categorys','product'));

        // $categorys= Category::where('ParentID',0)->get();
        // $product=GetProduct::where('ID',$productID)->first();
        // return view('pages.detailproduct',compact('categorys','product'));
    }
    public function Search($s){
        $categorys= Category::where('ParentID',0)->get(); 
        $search=DB::select('CALL Search(\''. $s . '\' ) ');
        // $=$this->paginate($data);

        return view('pages.searchproduct',compact('categorys','search','s'));
    }

    // public function paginate($items, $perPage = 2, $page = null, $options = [])
    // {
    //     $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    //     $items = $items instanceof Collection ? $items : Collection::make($items);
    //     return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    // }

    public function GetProductList($idcat){
        $categorys= Category::where('ParentID',0)->get(); 
        return view('pages.productlist',compact('categorys'));
    }
    
    


    // public function searchproduct($input){
    //     return view('pages.home',compact('input'));

    // }

    // public function QuickViewProduct(){
    //     $product=GetProduct::get();
    //     return $product->toJon();
    // }
    // public function Search ($s){
    //     $search= DB::select('CALL cnpm.Search(" . $s . ")');
       
    //     echo "<pre>";
    //     print_r($search);
        
    
     
    // }
}
