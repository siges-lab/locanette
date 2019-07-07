<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Redirect ;
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
    }

    public function index()
    {
        return view("auth/login");
    }


    public function auhenticate(){

              if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                  $user = Auth::user()->active;

                  if( Auth::user()->active == 1 )
                  {
                      if(Auth::user()->role ==  1){

//                        return  Redirect::route('adminlocanette');

                        return redirect('/adminlocanette') ;

                      }
                      else {
//                          return  Redirect::route('adminlocanette');

                          return redirect('/adminlocanette') ;
                      }
                  }
                  else {
                      Auth::logout() ;
                      return redirect('/login')->withError("Vous n'êtes pas autorisé ");
                  }


              } else {
                  return redirect('/login')->withError("email ou password incorrect ");
              }
    }
}
