<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;



class HomeController extends Controller
{
    /*
     * Dashboard Pages Routs
     */
    public function index(Request $request)
    {

    }



    /*
     * default Auth Routs
     */
    public function signin(Request $request)
    {
        $roles = Role::where('status',1)->get();
        return view('auth.login',compact('roles'));
    }
    public function signup(Request $request)
    {
        return view('auth.register');
    }
    public function confirmmail(Request $request)
    {
        return view('auth.confirm-mail');
    }
    public function lockscreen(Request $request)
    {
        return view('auth.lock-screen');
    }
    public function resetPassword(Request $request)
    {
        return view('password.request');
    }
    public function userPrivacySetting(Request $request)
    {
        return view('auth.user-privacy-setting');
    }



}


