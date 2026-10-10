<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class LogRequest
{
    public function handle(Request $request, Closure $next): Response
    {
        // Log sebelum request diproses
        Log::info('Request masuk: ' . $request->method() . ' ' . $request->path());

        $response = $next($request);

        // Log setelah response dihasilkan
        Log::info('Response keluar dengan status: ' . $response->status());

        return $response;
    }
}
