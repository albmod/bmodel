<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try{
            if (Auth::attempt($request->only('email','password'))){
                $user=Auth::user();
                $token=$user->createToken('app')->accessToken;
                return response([
                    'message'=>'User Successfully login',
                    'token'=>$token,
                    'user'=>$user
                ],200);
            }
        }catch(Exception $exception){
            return response([
                'message'=>$exception->getMessage()],400);
        }

        return response([
            'message'=>'Invalid Email Or Password'
        ],401);
    }




    public function Register(RegisterRequest $request){

        try{

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $token = $user->createToken('app')->accessToken;

            return response([
                'success'   => true,
                'message' => "Registration Successful",
                'token' => $token,
                'user' => $user
            ],200);

        }catch(Exception $exception){
            return response([
                'message'=>$exception->getMessage()],400);
        }


    }



    public function test(Request $request)
    {


        return response([
            'success'   => true,
            'message'=>'test work'
        ],200);
    }

}
