<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\EditUserRequest;
use Auth;
use Illuminate\Support\Facades\Hash;
class AdminUserController extends Controller
{
    public function getEditUser($id)
    {
    	$data['user']=User::find($id);
    	return view('backend.user.user_edit',$data);
    }
    public function postTestPassOld(Request $re)
    {
        $user=Auth::user();
        $curPass=$re->oldpass;
        $newPass=$re->newpass;
        if(Hash::check($curPass, $user->password))
        {
            $user_id=$user->id;
            $obj_user=User::find($user_id);
            $obj_user->password=Hash::make($newPass);
            $obj_user->save();
            return response()->json(['success'=>true]);
        }
        else
            return response()->json(['success'=>'Password False!']);
    }
}
