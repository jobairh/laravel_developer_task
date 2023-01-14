<?php

namespace App\Http\Controllers;

use App\Models\UserModelTable;
use Illuminate\Http\Request;
use Session;

class IndexController extends Controller
{
    public function index(){
        return view('home.home');
    }

    public function userHomePage(){
        return view('loggedInPage.loggedInHomePage');
    }

    public function login(){
        return view('userPage.login');
    }

    public function signUp(){
        return view('userPage.signUp');
    }

    public function forgotPassword(){
        return view('userPage.forgotPassword');
    }


    public function saveUser(Request $request){
        $user=new UserModelTable();
        $user->first_name=$request->first_name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return back();
    }

    public function loginCheck(Request $request){
        $userInfo=UserModelTable::where('email',$request->email)
            ->first();
        if ($userInfo){
            $expass=$userInfo->password;
            if (password_verify($request->password,$expass)){
                Session::put('userId',$userInfo->id);
                Session::put('userName',$userInfo->first_name);
                return redirect('/userHomePage');
            }else{
                return back()->with('message','invalid Password');
            }
        }else{
            return back()->with('message','invalid User Name');
        }
    }

    public function userLogout(){
        Session::forget('userId');
        Session::forget('userName');
        return redirect('/');
    }

    public function passwordCheck(Request $request){
        $userInfo=UserModelTable::where('email',$request->email)
            ->first();
        if ($userInfo){
                Session::put('userId',$userInfo->id);
                Session::put('userName',$userInfo->first_name);
                return redirect('/userHomePage');
        }else{
            return back()->with('message','invalid email');
        }
    }
}
