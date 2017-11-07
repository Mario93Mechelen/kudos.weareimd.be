<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('home/index');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $fbUser = Socialite::driver('facebook')->user();
        $user = User::firstOrNew(['email' => $fbUser->user['email']]);

            $user->name = $fbUser->name;
            $user->avatar = $fbUser->avatar;
            $user->avatar_original = $fbUser->avatar;
            $user->gender = $fbUser->user['gender'];
            $user->email = $fbUser->email;
            $user->password = 'true';
            $user->token = $fbUser->token;

        Auth::login($user, true);

        $check = Auth::check();

        return redirect('/home');
        // $user->token;
    }

    public function logout()
    {

        Auth::logout();

        return redirect('/');
    }
}
