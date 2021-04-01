<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengelola;

class AuthPengelolaController extends Controller
{
    public function login(Request $request){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $request->email;
            $password = $request->password;
            $auth = Auth::guard('pengelola')->attempt([
                'email' => $email,
                'password' => $password
            ]);
            if ($auth) {
                $checkRole = Auth::guard('pengelola')->user();
                if ($checkRole->hasRole('superadmin')) {
                    return redirect()->route('get.indexSuperadmin');
                }
            } else {
                echo "Auth Gagal!";
            }
            
        } else {
            return view('auth.loginPengelola');
        }
    }

    public function logout(){
        Auth::guard('pengelola')->logout();
        return redirect()->route('get.loginPengelola');
    }
}
