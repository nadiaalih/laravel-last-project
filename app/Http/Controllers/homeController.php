<?php

namespace App\Http\Controllers;
use App\models\Category;
use App\models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function index(){
       $Categories = Category::all();
       $allproducts= Product::all();
       $vegetables= Product::where('catid' , '=' , 1)->get();
       $fruite= Product::where('catid' , '=' , 2)->get();
       $Bread= Product::where('catid' , '=' , 3)->get();

        return view('frontend.index' , compact ('Categories','allproducts' ,'vegetables' ,'fruite','Bread'));
    }

    public function blog(){

      return view('frontend.layout.pages.blog');
    }
    public function about(){

        return view('frontend.layout.pages.about');
      }
      public function contact(){

        return view('frontend.layout.pages.contact');
      }
      public function product_details($id){

$product = DB::table('allproducts')->join('categories' ,'categories.id' ,'=' ,'allproducts.catid')
->select('allproducts.*', 'categories.name as cname' )
->where('allproducts.id','=' ,$id)
->first();
$relatedproduct =product::where('catid' , '=' , $product->catid)->get();
        return view('frontend.layout.pages.product_details' ,  compact ("product","relatedproduct"));
;
      }
}
