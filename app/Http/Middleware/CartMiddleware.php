<?php

namespace App\Http\Middleware;

use Closure;
use App\Cart;

class CartMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if (session('cart')) {
        $cart = session('cart');

        if (!$cart->user_id && auth()->check()) {
          $cart->update(['user_id' => auth()->id()]);
        }

        session()->put('cart', $cart);
      } else {
        session()->put('cart', Cart::create([]));
      }

      return $next($request);
    }
}
