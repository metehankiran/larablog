<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
class Visitor
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
        $visitor = \App\Models\Visitor::firstOrCreate([
            'ip' => $request->ip(),
            'post_id' => $request->route('post')->id,
            'date' => today()
        ]);
        return $next($request);
    }
}
