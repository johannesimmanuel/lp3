<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Strict Authentication Check
        if (!Auth::check()) {
            // If AJAX / JSON request
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Unauthenticated.'], 401);
            }

            return redirect()->route('admin.login')
                ->with('error', 'Akses ditolak. Silakan login terlebih dahulu untuk mengakses area administrator.');
        }

        // 2. Inactivity Timeout Check
        $timeout = config('auth.admin_timeout', 900); // Default 15 minutes
        $lastActivity = session('admin_last_activity_time');

        if ($lastActivity && (time() - $lastActivity > $timeout)) {
            Auth::logout();
            $request->session()->forget('admin_last_activity_time');
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            if ($request->expectsJson()) {
                return response()->json(['message' => 'Session expired due to inactivity.'], 401);
            }

            $minutes = max(1, round($timeout / 60));
            return redirect()->route('admin.login')
                ->with('error', "Sesi Anda telah berakhir karena tidak ada aktivitas selama {$minutes} menit. Silakan login kembali.");
        }

        // Update last activity timestamp on current interaction
        session(['admin_last_activity_time' => time()]);

        $response = $next($request);

        // 3. Strict No-Cache Headers to prevent browser history / disk cache replay
        $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0, post-check=0, pre-check=0');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');

        return $response;
    }
}
