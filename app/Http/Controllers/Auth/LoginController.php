<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use App\Category;
use App\Cart;
use App\User;


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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('cart');
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {   
        $categories = Category::all();
        
        if(isset(session('cart')->id)){

            $cart = Cart::find(session('cart')->id);
            return view('auth.login',
                [
                    'categories', $categories,
                    'cart' => $cart
                ]
            );
        }
        
        return view('auth.login',
            [
                'categories', $categories,
                'cart' => session('cart')
            ]
        );
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
/*         if ( session()->has('cart') ) {
            $cart = session('cart');
            $cart->update(['user_id' => $user->id]);
            session()->put('cart', $cart);

            dd($cart);
        }

        dd($user->toArray()); */
    }
  }
