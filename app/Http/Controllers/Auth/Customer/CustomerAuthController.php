<?php

namespace App\Http\Controllers\Auth\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Tenant;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomerAuthController extends Controller
{
    public function index()
    {

        return view('shops.auth.login');
    }

    public function customLogin(Request $request)
    {


        $remember_me = $request->has('remember_me') ? true : false;
        $credentials = $request->only('email', 'password');


        if (Auth::guard('customer')->attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('shop.auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (auth()->guard('customer')->check()){
            return view('shops.dashboard.index');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }



    public function logout()
    {
        Session::flush();
        $gaurd = $this->getGaurd();
        $gaurd->logout();

        return redirect()->route('login-customer');
    }

    private function getGaurd()
    {
        return auth('customer');
    }



}