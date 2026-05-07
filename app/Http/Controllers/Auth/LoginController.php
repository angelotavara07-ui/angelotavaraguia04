<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
{
    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::firstOrCreate(
    ['email' => $googleUser->email],
    [
        'name' => $googleUser->name,
        'password' => bcrypt(uniqid())
    ]
);

    Auth::login($user);

    return redirect('/home');
}

    public function authenticated(Request $request, $user)
    {
        $device = $request->header('User-Agent');

        $user->sessions()->create([
            'device' => $device
        ]);
    }
}