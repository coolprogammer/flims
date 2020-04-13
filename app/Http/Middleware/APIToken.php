<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class APIToken
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
        $token = $request->header('Authorization');
        $user = $user = User::whereNotNull('api_token')->where('api_token', $token)->first();
        if ($user) {
            return $next($request);
        }
        return response()->json([
            'message' => 'access token not valid.',
        ]);
    }
}
