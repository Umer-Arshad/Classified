<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\CouponCode;
use Illuminate\Http\Request;

class CouponCodeController extends Controller
{
    //
    public function view_coupon_code(){
        $coupon_code=CouponCode::all();
        return view('SuperAdmin.CouponCodes.ViewCouponCode',compact('coupon_code'));
    }
    public function add_coupon_code(){
        return view('SuperAdmin.CouponCodes.AddCouponCode');
    }
    public function store_coupon_code(Request $request){

        $request->validate([
            'coupon_name'=>'required|max:50|min:3',
            'type' => 'required',
            'status'=>'required',
            'condition'=>'required',
        ]);
        $coupon_code=new CouponCode();
        $coupon_code->coupon_name=$request->coupon_name;
        $coupon_code->type = $request->type;
        $coupon_code->status = $request->status == TRUE ? 1 : 0;
        $coupon_code->condition=$request->condition;
        $coupon_code->save();
        return redirect()->route('view_coupon_code');

    }
    public function edit_coupon_code($id){
        $coupon_code=CouponCode::find($id);
        return view('SuperAdmin.CouponCodes.EditCouponCode',compact('coupon_code'));
    }
    public function update_coupon_code(Request $request,$id){
        $coupon_code=CouponCode::find($id);
        $coupon_code->coupon_name=$request->coupon_name;
        $coupon_code->type = $request->type;
        $coupon_code->status = $request->status == TRUE ? 1 : 0;
        $coupon_code->condition=$request->condition;
        $coupon_code->update();
        return redirect()->route('view_coupon_code');
    }
    public function delete_coupon_code($id){
        $coupon_code=CouponCode::find($id);
        $coupon_code->delete();
        return redirect()->route('view_coupon_code');
    }
    public function update_coupon_code_status(Request $request)
    {
        $coupon_code = CouponCode::find($request->id);
        if(!$coupon_code){

            return back();
        }
        if($coupon_code->status ==0){
            $coupon_code->status =1;

        }else{
            $coupon_code->status =0;
        }
        $coupon_code->save();

      return redirect()->route('update_coupon_code_status');
    }

}
