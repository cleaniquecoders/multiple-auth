<?php

namespace App\Http\Controllers\Auth\Login;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class EmployeeController extends DefaultLoginController
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/employee/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:employee')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login.employee');
    }

    public function username()
    {
        return 'employee_id';
    }

    protected function guard()
    {
        return Auth::guard('employee');
    }
}
