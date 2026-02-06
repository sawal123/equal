<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visit;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        if (
            $request->isMethod('get') &&
            ! $request->ajax() &&
            ! $request->wantsJson() &&
            str_contains(
                $response->headers->get('content-type', ''),
                'text/html'
            )
        ) {
            Visit::create([
                'page'       => optional($request->route())->getName(),
                'ip'         => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);
        }

        return $response;
    }
}
