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
      if (!session('cart')) {
        session()->put('cart', new Cart);
      }

      return $next($request);
    }
}
