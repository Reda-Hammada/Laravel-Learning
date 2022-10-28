<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
 
    // 
        public function login (Request $request) 

        {
                $fields = $request->validate([

                    'email'=>'required|string',
                    'password'=>'required|string',

                ]);

                // check user if exists 

                $user = new User();

                $creds = $user->where('email', $fields['email'])->first();

            

                if(!Hash::check($fields['password'], $creds->password)):


                    return  response([
                        'message' => 'wrong creds',
                    ],401);

                else:

                    if(Hash::check($fields['password'], $creds->password)):


                        $token = $creds->createToken('myapptoken')->plainTextToken;

                            return response([

                                'user'=>$user,
                                'token'=>$token,
                            


                            ],200);
                    endif;
                endif;
        }


        public function register(Request $request) 

        {
                $fields = $request->validate([

                    'name'=>'required|string',
                    'email'=>'required|string|unique:users,email',
                    'password' => 'required|string',

                ]);

                $user = User::create([

                    'name'=>$fields['name'],
                    'email'=>$fields['email'],
                    'password' => bcrypt($fields['password'])
                ]);

                $token = $user->createToken('myapptoken')->plainTextToken;

                $reponse = [

                    'user' => $user,
                    'token'=> $token,
                ];

                return response($reponse, 200);






        }

        public function logout(Request $request)
         
        {

            auth()->user()->tokens()->delete();

            return [

                'message' =>'logged out',
            ];
        }
    


}
