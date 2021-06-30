<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Hash;
use Str;
use Auth;
use Carbon\Carbon;
use App\Models\User;

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
    protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = RouteServiceProvider::HOME ;    
    protected $maxAttempts= 3;
    protected $decayMinutes= 2;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function google()
    {
        return Socialite::driver("google")->redirect();
    }
    public function google_redirect()
    {
        $user=Socialite::driver("google")->stateless()->user();
        $user=User::firstOrCreate([
            "email"=>$user->email
        ],[
            "email"=>$user->email,
            "name"=>$user->name?$user->name:$user->nickname,
            "password"=>Hash::make(Str::random(24)),
        ]);
        Auth::login($user,true);
        return redirect()->route("home");
        
    }


    public function facebook()
    {
        return Socialite::driver("facebook")->redirect();
    }
    public function facebookRedirect()
    {
        $user= Socialite::driver("facebook")->stateless()->user();
        

        $user=User::firstOrCreate([
            "email"=>$user->email
        ],[
            "email"=>$user->email,
            "name"=>$user->name?$user->name:$user->nickname,
            "password"=>Hash::make(Str::random(24)),
        ]);
        Auth::login($user,true);
        
        return redirect()->route("home");
        
        
    }
}
