<?php

namespace App\Http\Controllers;

use App\Models\MergingSlugUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }
    public function loginol(Request $request)
    {
        $finduser = User::where([['email', $request->email]])->first();
        $checkingvalidity = MergingSlugUser::where('user_id', $finduser->id)->whereNotNull('slug')->first();
        if (empty($checkingvalidity)) {
            return redirect()->back();
        }
        if ($finduser) {
            if (Hash::check($request->password, $finduser->password)) {
                Auth::login($finduser);
            }
        }
        return redirect()->intended('/dashboard');
    }

    public function logout()
    {
        Auth::logout();
    }
}