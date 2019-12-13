<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public $client;
    public function __construct()
    {
        $this->middleware('login');
        $options = [
            'trace' => true,
            'cache_wsdl' => WSDL_CACHE_NONE 
        ];
        $WSDL= 'http://localhost:8080/News/UserWs?wsdl';
        $this->client = new \SoapClient($WSDL, $options); // null for non-wsdl mode
    }

    public function addFriend(Request $request)
    {
        $params = [
            // Your parameters
            'useremail' =>session('user')->email,
            'friendemail' =>$request->friendEmail
        ];
        // 'GetResult' being the name of the soap method
        $this->client->addFriend($params);
    }
}
