<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $type = null)
    {
        $user = Auth::user();
        if(!$user) {
            return redirect()->route('login');
        }

        if(!$type) return $next($request);
        
        if(call_user_func([$this, 'is' . ucfirst($type)], $user)) {
            return $next($request);
        }
    }

    protected function isAdmin($user) {
        if($user->type !== 'admin') abort(404);
        return true;
    }

    protected function isUser() {
        if($user->type !== 'admin') abort(404);
        return true;
    }
}
