<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Listing;

class CheckUserAuthorization
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
        $listingId = $request->route('listing');
        $listing = Listing::find($listingId);

        $loginId = session('loginId');

        if (!$listing) {
            return response()->json(['error' => 'Listing not found'], 404);
        }

        if ($listing->user_id !== $loginId) {
            return back()->with('fail','You Are Not Authorized!');
        }

        return $next($request);
    }
}
