<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AdReview;
use App\Models\Attribute;
use App\Models\AttributeCategory;
use App\Models\AttributeProduct;
use App\Models\Category;
use App\Models\Code;
use App\Models\ForgetPassword;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductAttributeValue;
use App\Models\ProductReview;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function dattable(){
        return view('datatable');
    }


    public function category(){
        $category=Category::all();
        return view('ViewData.viewcategory',compact('category'));
    }
    public function product(){
        $product=Product::all();
        return view('ViewData.viewproduct',compact('product'));
    }
    public function attribute(){
        $attributes=Attribute::all();
        return view('ViewData.viewattribute',compact('attributes'));
    }
    public function productattribute(){
        $attribute_product=AttributeProduct::all();
        return view('ViewData.viewattributeproduct',compact('attribute_product'));
    }
     public function addata(){
         $ad_data=Ad::all();
         return view('ViewData.viewad',compact('ad_data'));
     }
     public function adreviews(){
        $adreviews=AdReview::all();
        return view('ViewData.viewadreviews',compact('adreviews'));
     }
     public function productreviews(){
        $productreviews=ProductReview::all();
        return view('ViewData.viewproductreviews',compact('productreviews'));
     }
     public function discount_data(){
        $discount_data=Code::all();
        return view('ViewData.viewdiscountdata',compact('discount_data'));
     }
     public function order_data(){
        $order_data=Order::all();
        return view('ViewData.vieworderdata',compact('order_data'));
     }
     public function show_attribute($product_id){
        $attribute_id = AttributeProduct::where('product_id', $product_id)->pluck('attribute_id');
         $attributes = Attribute::whereIn('id', $attribute_id)->get();

         return view('ViewData.showattribute',compact('attributes'));
     }
     public function model(){
        return view('ViewData.model');
     }
     public function attribute_category(){
        $attribute_category=AttributeCategory::all();
        $category=Category::all();
        $atribute=Attribute::all();
        return view('ViewData.viewattributecategory',compact('attribute_category','category','atribute'));
     }













    public function user_index(){
        $user=User::all();

        return view('ViewData.viewuser', compact('user'));
//      $user=UserRole::find(4)->users()->get();
//       $user=User::find(4)->role()->get();




//        $users = User::all()->chunk(3);
//        return $users;
//
//        User::orderBy('id')->chunk(3, function ($users) {
//            foreach ($users as $user) {
//               echo $user;
//               echo "<br>";
//                // write your email send code here
//            }
//            echo "<br>";
//        });
//        $colors = collect(['orange', 'blue', 'green', 'red', 'yellow', 'purple']);
//        $chunks = $colors->chunk(3);
//        return $chunks;

//        return $user;






    }
    public function forget_password(){
//  $forget_password=ForgetPassword::find(1)->users()->get();
        $forget_password=User::find(1)->forget_password()->get();
        return $forget_password;
    }
    public function product_category(){
// $product=Product::find(1)->categories()->get();
        $product=Category::find(1)->product()->get();
        return $product;
    }
    public function attribute_product(){
//      $attribute=Attribute::find(1)->product()->get();
//      $attribute=Product::find(1)->attribute()->get();
//  $attribute=ProductAttributeValue::find(2)->product()->get();
    $attribute=ProductAttributeValue::find(2)->attribute()->get();
        return $attribute;
    }
    public function ad(){
//       $user=User::find(2)->ads()->get();
//        $ad=Ad::find(1)->user()->get();
   $product=Product::find(1)->ads()->get();
//    $product_ad=Ad::find(1)->product()->get();
        return $product;
    }
    public function ad_review(){
//        $ad_review=Ad::find(1)->ad_reviews()->get();

//       $ad_review=AdReview::find(1)->ad()->get();
//       $ad_review=AdReview::find(1)->user()->get();
        $ad_review=User::find(1)->ad_reviews()->get();
        return $ad_review;
    }
    public function discount(){
//        $discount=Discount::find(1)->user()->get();
//        $discount=Discount::find(1)->product()->get();
       $discount=User::find(1)->discounts()->get();
//        $discount=Product::find(1)->discounts()->get();
        return $discount;
    }
    public function product_review(){
       $product_review=ProductReview::find(2)->user()->get();
//        $product_review=ProductReview::find(1)->product()->get();
//     $product_review=User::find(3)->product_reviews()->get();
//       $product_review=Product::find(1)->product_reviews()->get();
        return $product_review;
    }
    public function order(){
//        $order=Order::find(4)->user()->get();
//        $order=Order::find(2)->product()->get();
//        $order=User::find(1)->order()->get();
        $order=Product::find(2)->order()->get();
        return $order;
    }

}
