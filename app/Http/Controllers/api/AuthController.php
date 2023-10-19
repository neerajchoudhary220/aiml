<?php

namespace App\Http\Controllers\api;

use App\Helpers\ResponseBuilder;
use App\Http\Controllers\Controller;
use App\Http\Requests\auth\LoginRequest;
use App\Http\Requests\auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class AuthController extends Controller
{

    public function register(RegisterRequest $request)
    {
        try {
            DB::beginTransaction();
            $user  = User::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'password' => $request->password
            ]);

            DB::commit();
            $this->response = new UserResource($user);
            $token = $user->createToken('authToken')->accessToken;
            return ResponseBuilder::successWithToken($token, $this->response);
        } catch (\Exception $e) {
            Log::error($e);
            dd($e);
            return ResponseBuilder::error('error', $this->errorStatus);
        }
    }

    public function login(LoginRequest $request)
    {
        try {
            $creditional = $request->only(['mobile', 'password']);
            if (auth()->attempt($creditional)) {
                $token = auth()->user()->createToken('authToken')->accessToken;
                $this->response = new UserResource(auth()->user());
                return ResponseBuilder::successWithToken($token, $this->response, "Login Successfully !");
            }
        } catch (\Exception $e) {
            Log::error($e);
            dd($e);
            ResponseBuilder::error('error', $this->errorStatus);
        }
    }

    public function logout(Request $request)
    {
        $request->user('api')->token()->revoke();
        return ResponseBuilder::success(null, "Logout Successfully");
    }
}
