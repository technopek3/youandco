<?php

namespace App\Http\Middleware;

use App\Enums\User\UserPermissionsEnum;
use Closure;
use Illuminate\Http\Request;

class pro
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        abort_if(!auth()->user()->hasRole(UserPermissionsEnum::ADMIN_ROLE) && !auth()->user()->hasRole(UserPermissionsEnum::PROVIDER_ROLE),401,'Non autorisé');

        return $next($request);
    }
}
