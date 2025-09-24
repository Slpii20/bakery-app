<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Tambahkan ini

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        $user = User::where('email', $credentials['email'])->first();
        if ($user && Hash::check($credentials['password'], $user->password)) { // Gunakan Hash::check
            Auth::login($user); // Login user
            $request->session()->regenerate(); // Regenerasi sesi
            \Log::info('User logged in: ' . $user->email); // Tambahkan log
            return redirect('/data_kue'); // Redirect ke halaman data produk
        }

        \Log::warning('Login failed for email: ' . $request->email); // Tambahkan log untuk debugging
        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan data kami.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        \Log::info('User logged out: ' . Auth::user()->email); // Tambahkan log untuk debugging
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Hapus sesi
        $request->session()->regenerateToken(); // Regenerasi token CSRF

        return redirect('/')->with('success', 'Anda telah berhasil logout.');
    }
}
