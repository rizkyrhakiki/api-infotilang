<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
    $user = User::all();

     return response()->json([
            'title'=>'Daftar User',
                'result'=>$user,
                'meta'=>
                ['http_status'=>200]]);
        }

        public function me(Request $accesToken){
        $id_user = Auth::user()->id;
        $me = User::where('id','=', $id_user)->first();

        return response()->json([
                    'title'=>'Get Me User',
                        'result'=>$me,
                         'headers' => [
                                        'Accept' => 'application/json',
                                        'Authorization' =>'Bearer '.$accesToken],
                        'meta'=>
                        ['http_status'=>200]]);
        }
}
