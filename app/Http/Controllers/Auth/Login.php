<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    use Authenticates;

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function showFormLogin()
    {
        return view('auth.login');
    }

    /**
     * Redirect URl after the user was authenticated.
     *
     * @return string
     */
    public function redirectTo()
    {
        return route(DASHBOARD_ROUTER);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('web');
    }
}
