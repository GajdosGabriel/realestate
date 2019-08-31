<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Reminder;
use Session;

class AgentUpcomingReminders {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $arrReminders = Reminder::where('agent_id', Auth::user()->id)->where('datetime', '<=', date('Y-m-d H:i:s', strtotime("+10 minutes")))->where('done', 0)->orderBy('datetime', 'asc')->with('user')->get();

        Session::flash('upcomingReminders', $arrReminders);

        return $next($request);
    }
}
