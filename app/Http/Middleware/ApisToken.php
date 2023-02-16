<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApisToken
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
        $key = "MTk5NDA2MTkyMDIwMTIxMDExO0FsaXQgUGVyZGFuYSBQdXRyYQ==";

        if ($request->header('key') === $key) {
            return $next($request);
        }
        
        return response()->json([
            'success'   => false,
            'message'   => 'Forbidden - You Don\'t Have Access To This Request!',
        ],403);

        
    }
}
