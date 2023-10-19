<?php

namespace App\Http\Controllers\api;

use App\Helpers\ResponseBuilder;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(Request $request){
        $user = $request->user();
        $this->response = new UserResource($user);
        return ResponseBuilder::success($this->response);
    }
    public function test(Request $request)
    {
        $usr = new User();
        $check_ = $usr->MobileVerifiction();
        if(!$check_){
            return response()->json([
                'message'=>"please verify your  mobile"
            ],500);
            // return ResponseBuilder::error("Please verify your mobile",$this->errorStatus);
        }
        return $check_;
    }
}
