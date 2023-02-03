<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
use Str;
   
class UserController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function checkUsageStatus()
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);
        $usageLimit = $user->usage_limit;
        $hitCount = $user->hit_count;
        $difference = (int)($usageLimit-$hitCount); 
        $data = 'Your usage limit is '.$usageLimit.' and your total usage of API i.e hit count is '.$hitCount.' you have '.$difference.' request left.';
        return $this->sendResponse($data, 'Here is you usage stats.');
    }

    public function updateRequestCount(){
        $userId = auth()->user()->id;
        $user = User::find($userId);
        $count = $user->hit_count + 1;
        $user->hit_count = $count;
        $user->save();
        return $this->sendResponse($user, 'Hit count added');

    }
}
