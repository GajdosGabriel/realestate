<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Reminder;
use Session;

class AdminUpcomingReminders {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $arrReminders = Reminder::where('datetime', '<=', date('Y-m-d H:i:s', strtotime("+10 minutes")))->where('done', 0)->orderBy('datetime', 'asc')->with(['user', 'agent'])->get();

        Session::flash('upcomingReminders', $arrReminders);

        return $next($request);
    }
}
