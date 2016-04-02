<?php

namespace App\Http\Middleware;

use Closure;

class MaintenanceMiddleware
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

    if ( env('APP_MAINTENANCE', false) ) {
        return redirect()->route('maintenance');
    }

    return $next($request);
  }

}
