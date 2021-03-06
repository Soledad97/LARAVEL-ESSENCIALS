<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Category;
use App\Cart;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {

        $categories = Category::all();
        
        if(isset(session('cart')->id)){

            $cart = Cart::find(session('cart')->id);
            return view('auth.register',
                [
                    'categories', $categories,
                    'cart' => $cart
                ]
            );
        }
        
        return view('auth.register',
            [
                'categories', $categories,
                'cart' => session('cart')
            ]
        );
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],
        $message = [
          'required' => 'El campo es obligatorio',
          'string' => 'El campo debe contener solo letras',
          'unique:users' => 'El mail ya se encuentra registrado',
          'email' => 'Ingrese un mail con formato usuario@email.com',
          'min' => ['string' => 'La contraseña debe contener minimo 8 caracteres'],
          'confirmed' => 'Las contraseñas no coinciden'
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      //$role = stristr($data['email'], '@essencials') === false ? 0 : 1;
      $role = (stristr($data['email'], '@')) === '@essencials.com' ? 1 : 0;
      //dd($role);
      return User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
          'role ' => $role,
      ]);
    }
}
