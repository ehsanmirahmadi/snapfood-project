<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , ...$guards) : Response
    {
        if (Auth::guard($guards)->check()) {
            $user = auth()->user();
            if ($user->role->value == 0) {
                return redirect('/dashboard-user');

            }
            elseif($user->role->value == 1 ){
                return redirect('/dashboard-res');
            }
        }

        if ($request->is('/')) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
