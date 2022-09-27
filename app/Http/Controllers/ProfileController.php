<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Profile;
class ProfileController extends Controller
{
    public function saveprofile(Request $req){
    $profile = new profile;
    $profile->fist_name = $req->fist_name;
    $profile->last_name = $req->last_name;
    $profile->email = $req->email;
    $profile->phone = $req->phone;
    $profile->save();

    return redirect('profile_list');

}



public function getProfile(){

    $profile_all = Profile::all();
    //dd($profile_all);
    return view('profile_list',['profile' =>$profile_all]);
}
public function delprofile(Request $req){
    profile::where('id',$req -> id)
    ->delete();
    return "ok";
}
public function editprofile($id){
    $profile = Profile::where('id',$id)->first();
    return view('edit_profile',['profile' =>$profile]);
}

public function updateprofile(Request $req){
    profile::where('id',$req ->id)
    ->update(['fist_name'=>$req->fist_name,'last_name'=>$req ->last_name,'email'=>$req ->email,'phone' =>$req -> phone]);

    return redirect()->back();
}
}
