<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('notLogin');
    }
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
     public function showRegistrationForm()
     {
         return view('auth.register');
     }
     /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        $options = [
            'trace' => true,
            'cache_wsdl' => WSDL_CACHE_MEMORY
        ];
        $WSDL= 'http://localhost:8080/News/UserWs?WSDL';
        $client = new \SoapClient($WSDL, $options); // null for non-wsdl mode
        $params = [
            // Your parameters
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        // 'GetResult' being the name of the soap method
        $result = json_decode($client->SignUp($params)->return);
          if (isset( $result->error )) {
            return \redirect('/register')->with('error',$result->error);
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
