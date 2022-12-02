<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\UserRole;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;


class UserManagementController extends Controller
{
    //

    //Super Admin Update Password

    public function edit_profile(){
        $user = Auth()->user()->id;

       return view('SuperAdmin.Profile.EditProfile',compact('user'));
    }
    public function update_profile(Request $request){

//           $id=Auth()->user()->id;
            $request->validate(
                [
                    "password" => "required|confirmed|min:8",
                ]
            );

            $id = Auth()->user()->id;
            $user=User::find($id);

            $user->password=Hash::make($request->password);
//           return $user->password;
            $user->update();

            if($user)
                Session::flash('success-toast', 'Password has been Updated.');
            else
                Session::flash('error-toast', 'Password has not been Updated.');

            return back();









//        $users = $request->validate([
//            'username' => ['required','max:255', 'min:2'],
//            'firstname' => ['max:100'],
//            'lastname' => ['max:100'],
//            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
//            'address' => ['max:100'],
//            'city' => ['max:100'],
//            'country' => ['max:100'],
//            'postal' => ['max:100'],
//            'about' => ['max:255']
//        ]);
//
//        auth()->user()->update([
//            'username' => $request->get('username'),
//            'firstname' => $request->get('firstname'),
//            'lastname' => $request->get('lastname'),
//            'email' => $request->get('email') ,
//            'address' => $request->get('address'),
//            'city' => $request->get('city'),
//            'country' => $request->get('country'),
//            'postal' => $request->get('postal'),
//            'about' => $request->get('about')
//        ]);
    }







    public function advertiser(){
        $user=User::where('id','<>',Auth()->user()->id)->where('user_role_id',2)->get();

//        $user=User::where('user_role_id',2)->get();
        $title = 'Advertiser';

        return view('pages.user-management',compact('user','title'));
    }
    public function customer(){
        $user=User::where('id','<>',Auth()->user()->id)->where('user_role_id',3)->get();
        $title = 'Customer';
        return view('pages.user-management',compact('user','title'));
    }
    public function view_user($id){
    $user=User::where('id',$id)->get();
    return view('SuperAdmin.UserManagement.ShowUser',compact('user'));
    }
    public function show($id)
    {
        $user=User::find($id);
        return response()->json($user);
    }
    public function edit_user($id){
        $user=User::find($id);
        $user_role=UserRole::all();
//        if($user_role->name=='Advertiser'){
//            $title='Edit Avertiser';
//        } else{
//            $title='Edit Customer';
//        }
       return view('SuperAdmin.UserManagement.EditUser',compact('user','user_role'));
    }
    public function update_user(Request $request,$id){

        $user=User::find($id);
        if ($request->hasFile('profile_image')) {
            $destination = 'assets/userimage/'.$user->profile_image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/userimage/', $filename);
            $user->profile_image = $filename;
        }
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->gender=$request->gender;
        $user->phone_no=$request->phone_no;
        $user->user_role_id=$request->user_role_id;
        $user->status = $request->status == TRUE ? 1 : 0;
        $user->address1=$request->address1;
        $user->address2=$request->address2;
        $user->city=$request->city;
        $user->state=$request->state;
        $user->zip=$request->zip;
        $user->country=$request->country;
        $user->updated_by=Auth()->user()->id;
        $user->update();

        if($user->user_role_id==2){
            return redirect('advertiser');
        }elseif($user->user_role_id==3){
            return redirect('customer');
        }

    }
    public function delete_user($id){
        $user=User::find($id);
        $user->delete();
        if($user->user_role_id==2){
            return redirect('advertiser');
        }elseif($user->user_role_id==3){
            return redirect('customer');
        }
    }
    public function update_user_status(Request $request)
    {
        $user = User::find($request->id);
        if(!$user){

            return back();
        }
        if($user->status ==0){
            $user->status =1;

        }else{
            $user->status =0;
        }
        $user->save();

        if($user->user_role_id==2){
            return redirect('advertiser');
        }elseif($user->user_role_id==3){
            return redirect('customer');
        }
    }

}
