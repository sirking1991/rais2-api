<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\User;
use App\Token;

class AuthController extends Controller
{

	public function __construct() {
        $this->expire_token();
    }

    public function token($auth_token) {

        // generate token
        $token = md5($auth_token.date('Y-m-d H:i:s'));

        // save it to database
        $token = new Token;
        $token->auth_token = $auth_token;
        $token->token = $token;
        $token->save();

        return response()->json($token, 200);
    }

    function authenticate_user($email){
        $query = $this->db->select('first_name, last_name')->get_where('users', array('email'=>$email, 'status'=>'active'));

        if( 0==$query->num_rows() ) {
            $this->rest->response(json_encode( array('result'=>'ERROR', 'message'=>'Invalid email') ));
        } else {
            $user = $query->row_array();
            $this->rest->response(json_encode( array('result'=>'OK', 'user_info'=>$user) ));
        }

    }

    private function expire_token() {
        // TODO: expire tokens that are older then 24Hrs
    }
}
