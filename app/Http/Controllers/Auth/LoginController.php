<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\Http\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //$this->middleware('auth')->only('logout');
    }

    public function authenticated(Request $request, $user){
        if($user->akses == 'operator' || $user->akses == 'admin'){
            return redirect()->route('operator.beranda');
        }elseif($user->akses == 'walimurid'){
            return redirect()->route('walimurid.beranda');
        }else{
            Auth::logout();
            flash('Anda Tidak Memiliki Hak Akses')->error();
            return redirect()->route('login');
        }
    }

    public function logout(Request $request){
        // dd('Ini logout');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}

// User::create([
//     'name' => 'Operator',
//     'email' => 'operator@gmail.com',
//     'password' => bcrypt('1'),
//     'akses' => 'operator',
//     'nohp' => '085709877890',
//     'nohp_verified_at' => now(),
//     'email_verified_at' => now(),
// ]);
