<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->only('email', 'password');


        if(!$token = auth()->guard('api')->attempt($credentials)){
            return response()->JSON([
                'success' => 'false',
                'message' => 'Email Atau Password Anda Salah !'
            ], 401);
        }

        return response()->JSON([
            'success' => true,
            'user'    => auth()->guard('api')->user(),
            'token'   => $token
        ], 200);
    }
}
