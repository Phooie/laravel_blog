<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $hour = now()->hour;
        $day = now()->dayOfWeek; // 0 (Sunday) to 6 (Saturday)

        // dd([
        //         'hour' => $hour,
        //         'hour_12' => now()->format('h A'), // 12-hour format
        //         'day_of_week' => $day, // 0-6
        //         'day_name' => $dayName,
        //         'time' => now()->toDateTimeString(),
        //         'timestamp' => now()->timestamp
        //     ]);

        if(!$user){
            return redirect('/login')->with('error', 'Please login first');
        }
        
        if ($user->name !== 'admin') {
            // Only allow access Mon-Fri, 8 AM to 6 PM
            if ($day >= 1 && $day <= 5 && $hour >= 8 && $hour < 17) {
                return $next($request);
            }
            
            abort(403, 'Access allowed only during office hours (Mon-Fri, 8AM-5PM)');
        }

        return $next($request);
    }
}
