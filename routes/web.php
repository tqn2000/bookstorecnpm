<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProductController;
use App\Models\ProductImg;
use App\Models\Category;
use App\Models\GetProduct;
use App\Models\NewsModel;
use App\Models\Product;
use App\Models\testproduct;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[MainPageController::class, 'index']);
// Route::get('/products/{productID}',[ProductController::class, 'getproduct']);
Route::get('/home',[MainPageController::class, 'index']);



Route::get('register',[AuthController::class,'showFormregister'])->name('show-form-register');
Route::post('register',[AuthController::class,'register'])->name('register');

Route::get('lognin',[AuthController::class,'showFormlognin'])->name('show-form-lognin');
Route::post('lognin',[AuthController::class,'lognin'])->name('lognin');

// Route::get('lognout',[AuthController::class,'register'])->name('register');

Route::get('/products/{idcat}/{productID}', function ($idcategory,$productID)
{
    $categorys= Category::where('ParentID',0)->get();
    // $product=GetProduct::where('ID',$productID)->first();
    $products=(DB::select('CALL laysp('.$productID.')'));
    $relateproducts=DB::select('CALL RelateProduct('.$idcategory.')');

    return view('pages.detailproduct',compact('categorys','products','relateproducts'));
})->name('products');
Route::get('/checkdb/{idcatedory}/{productID}', function ($idcategory,$productID)
{
    $categorys= Category::where('ParentID',0)->get();

    // $product=GetProduct::where('ID',$productID)->first();
    $relateproduct=(DB::select('CALL RelateProduct('.$idcategory.')'));
    $products=(DB::select('CALL laysp('.$productID.')'));
    // $product2=Product::where('ID',$productID)->get();
    // $products2[]= $products->toArray();
    // $getIDcat= $products2[] -> CategoryID;
    

    return dd($products,$categorys,$relateproduct,$idcategory);
});

Route::get('/blogs', function () {
    $categorys= Category::where('ParentID',0)->get();
    $news = NewsModel::get();
    $news2=(DB::select('CALL getnews2()'));
    return view('pages.blogs',compact('categorys','news','news2'));
});
Route::get('/blogs/{idnews}', function ($idnews) {
    $categorys= Category::where('ParentID',0)->get();
    $news2=(DB::select('CALL getnews2()'));
    $newbyid=NewsModel::where('ID',$idnews)->first();
    return view('pages.blogdetail',compact('categorys','news2','newbyid'));
});

Route::get('/contact', function () {
    $categorys= Category::where('ParentID',0)->get();
    return view('pages.contact',compact('categorys'));
});

Route::get('/cart', function () {
    $categorys= Category::where('ParentID',0)->get();
    return view('pages.cart',compact('categorys'));
});
Route::get('/pay', function () {
    $categorys= Category::where('ParentID',0)->get();
    return view('pages.pay',compact('categorys'));
});
Route::get('/intro', function () {
    $categorys= Category::where('ParentID',0)->get();
    return view('pages.intro',compact('categorys'));
});
Route::get('/policy', function () {
    $categorys= Category::where('ParentID',0)->get();
    return view('pages.policy',compact('categorys'));
});
Route::get('/bm', function () {
    $categorys= Category::where('ParentID',0)->get();
    return view('pages.bm',compact('categorys'));
});
Route::get('/dk', function () {
    $categorys= Category::where('ParentID',0)->get();
    return view('pages.dk',compact('categorys'));
});



// Route::get('/Search/{s}', function ($s)
// {
//     $categorys= Category::where('ParentID',0)->get(); 
//     $search=DB::select('CALL Search(\''. $s . '\' ) ')->paginate(3);
//     return view('pages.searchproduct',compact('categorys','search'));
    
//     // return response()->view('pages.searchproduct',compact('categorys'))->json($search);
//     // return view('pages.searchproduct',compact('categorys','search'));
// });
// Route::get('/test', function ()
// {
//     $categorys= Category::where('ParentID',0)->get();
//         // $product=GetProduct::where('ID',$productID)->first();
//         // $search=DB::select('CALL Search(\''. $s . '\' ) ');
//         return view('pages.searchproduct',compact('categorys'));
// });
Route::get('/productsearch/{s}', function ($s)
{
   $search=DB::select('CALL Search(\''. $s . '\' ) ');
   
    return response()->json($search);
});

Route::get('/producthotsell', function ()
{
   $producthotsell=DB::select('CALL Producthotsell() ');
   
    return response()->json($producthotsell);
});
Route::get('/productnew', function ()
{
   $productnew=DB::select('CALL productnew() ');

    return response()->json($productnew);
});
Route::get('/relateproduct/{idcat}', function ($idcat)
{
    $relateproduct=(DB::select('CALL RelateProduct('.$idcat.')'));

    return response()->json($relateproduct);
});

Route::get('/getallproduct', function ()
{
   $allproduct=DB::select('CALL getallproduct() ');

    return response()->json($allproduct);
});
Route::get('category/{idcat}', function ($idcat) {
   
   $allproduct=DB::select('CALL getproductbyIDcat('.$idcat.') ');

   return response()->json($allproduct);
});
Route::get('/sortproduct/{idcat}/{idsort}', function ($idcat,$idsort)
{
    $relateproduct=(DB::select('CALL SortProduct2('.$idcat. ',' .$idsort.')'));

    return response()->json($relateproduct);
});
Route::get('/category/{idcat}', function ($idcat)
{
    $relateproduct=(DB::select('CALL getname('.$idcat.')'));

    return response()->json($relateproduct);
});
Route::get('/news', function () {
    $news=(DB::select('CALL getnews()'));
    return response()->json($news);
});
Route::get('/news2', function () {
    $news=(DB::select('CALL getnews2()'));
    return response()->json($news);
});
Route::get('/news/{idnew}', function ($idnew)
{
    $news=(DB::select('CALL getnewsbyid('.$idnew.')'));

    return response()->json($news);
});

Route::get('/Search/{s}',[ProductController::class, 'Search']);
Route::get('/all/{idcat}',[ProductController::class, 'GetProductList']);
