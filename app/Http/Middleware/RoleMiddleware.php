<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
  /**
  * Run the request filter.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @param  string  $role
  * @return mixed
  */
  public function handle($request, Closure $next, $role)
  {

    if (! $request->user()->is($role)) {
      return response('Unauthorized.', 401);
    }

    return $next($request);
  }
}
