<?php

namespace App\Http\Controllers;

use App\TestUsers;
use App\TestLoans;
use Exception;
use Illuminate\Http\Request;

class TestLoanController extends Controller
{
    public function save(Request $request){

        $status = false;
        $message = '';
        $res = '';
        $token = '';

        try{
            $json =  $request->json()->all();
            $status = true;
            $message = 'OK';
            $token = $json['token'];
            $user = TestUsers::where('token', $token)->first();
            if($user){
                $res = $user->id;
                $data = $json['data'];
                for ($i = 0; $i < count($data); $i++) {
                    $loan = new TestLoans();
                    $loan->loan_id = $data[$i]['loan_id'];
                    $loan->start_date = $data[$i]['start_date'];
                    $loan->due = $data[$i]['due'];
                    $loan->city = $data[$i]['city'];
                    $loan->end_date = $data[$i]['end_date'];
                    $loan->created_at = $data[$i]['created_at'];
                    $loan->updated_at = $data[$i]['updated_at'];
                    $loan->save();
                }
            } else {
                $res = 0;
            }
        }
        catch(Exception $e){
            $message = 'Error al salvar los datos';
        }

        return response()->json([
            'status'    => $status,
            'code'      => 200,
            'message'   => $message,
            'result'    => $res
        ], 200);
    }
}
