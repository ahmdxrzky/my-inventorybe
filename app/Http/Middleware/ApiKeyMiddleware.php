<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;

class ApiKeyMiddleware
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
        $apiKey = config('app.api_key');

        $apiKeyIsValid = (
            ! empty($apiKey)
            && $request->header('api-key') == $apiKey
        );

        if (!$apiKeyIsValid) {
            return response()->json([
                'API Key tidak valid'
            ], 403);
        } else {
            return $next($request);
        }
    }
}
