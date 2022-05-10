<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthNode
{
    public function handle(Request $request, Closure $next)
    {
        $nodeKey = env('NODE_KEY');
        $reqKeyNode = $request->header('x-api-token');
        if($nodeKey === $reqKeyNode){
            return $next($request);
        } else {
            return response()->json([
                'message' => 'invalid key'
            ], status:401);
        }
    }
}
