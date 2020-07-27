<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $sex)
    {
        if($sex == '1'){
            echo '免检';
            return $next($request);
        } 

        if ($request->age <= 200) {
            return redirect('home');
        }

        echo '前置中间件<br>';
        $resp = $next($request);
        echo '后置中间件<br>';
        return $resp;
    }

    public function terminate($request, $response)
    {
        // Store the session data...
        $startTime = LARAVEL_START * 10000;
        $endTime = microtime(true) * 10000;
        echo $endTime - $startTime;
    }
}
