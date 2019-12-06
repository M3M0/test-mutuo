<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestUsers;

class TestUserController extends Controller
{
    public function auth(Request $request)
    {
        $status = false;
        $message = '';
        $res = '';
        try{
            $email = $request->input('email');
            $pass = $request->input('pass');
            $user = TestUsers::where([['password', $pass], ['email', $email]])->first();
            // var_dump($user);
            // die();
            if($user){
                $status = true;
                $message = 'OK';
                $res = $user->token;
            }
            else{
                $message = 'No se pudo validar el usuario';
            }
        } catch(Exception $e){
            $message = 'Error al validar el usuario';
        }
        return response()->json([
            'status'    => $status,
            'code'      => 200,
            'message'   => $message,
            'result'    => $res
        ], 200);
    }
}
