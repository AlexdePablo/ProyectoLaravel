<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateEmail
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
        return $next($request);
    }

    public function validateEmail(Request $request, Closure $validatedData)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email', 'regex:/(.*)@carpediem\.net$/i'],
        ]);

        if (! $request->expectsJson()) {
            return route('login');
        }
    }




}
