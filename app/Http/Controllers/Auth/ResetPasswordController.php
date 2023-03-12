<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo;

    public function redirectTo()
    {
        switch(Auth::user()->role_id){
            case '2':
            $this->redirectTo = route('admin.dashboard');
            return $this->redirectTo;
                break;
            case '1':
                $this->redirectTo = route('user.dashboard');
                return $this->redirectTo;
                break;
            case '3':
                $this->redirectTo = route('reception.dashboard');
                return $this->redirectTo;
                break;
            case '4':
                $this->redirectTo = route('specialist.dashboard');
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;

        }
    }
}
