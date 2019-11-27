<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('notLogin')->except('logout');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function logout(Request $request)
     {
        session(['key' => null]);
        session(['user' => null]);
        return \redirect('/');
     }
     /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string']
        ]);
        $options = [
            'trace' => true,
            'cache_wsdl' => WSDL_CACHE_MEMORY
        ];
        $WSDL= 'http://localhost:8080/News/UserWs?WSDL';
        $client = new \SoapClient($WSDL, $options); // null for non-wsdl mode
        $params = [
            // Your parameters
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        // 'GetResult' being the name of the soap method
        $result = json_decode($client->Login($params)->return);
          if (isset( $result->error )) {
            return \redirect('/login')->with('error',$result->error);
          } else {
              $user = new User();
              $user->name = $result->name;
              $user->email = $result->email;
              $user->password = $result->password;
              session(['key' => $result->key]);
              session(['user' => $user]);
              return \redirect('/');

          } 
    }
}
