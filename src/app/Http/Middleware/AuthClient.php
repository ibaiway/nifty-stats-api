<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthClient
{

    public function handle(Request $request, Closure $next)
    {
        $clientKey = env('CLIENT_KEY');
        $reqKeyClient = $request->header('x-api-token');
        if($clientKey === $reqKeyClient ){
            return $next($request);
        } else {
            return response()->json([
                'message' => 'invalid key'
            ], status:401);
        }
    }
}
