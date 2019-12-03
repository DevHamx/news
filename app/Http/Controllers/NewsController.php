<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public $client;
    public function __construct()
    {
        $this->middleware('login');
        $options = [
            'trace' => true,
            'cache_wsdl' => WSDL_CACHE_NONE 
        ];
        $WSDL= 'http://localhost:8080/News/NewsWs?wsdl';
        $this->client = new \SoapClient($WSDL, $options); // null for non-wsdl mode
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        // 'GetResult' being the name of the soap method
        $result = json_decode($this->client->getAllNewsSortedFromNewOnes()->return);

              return \view('home')->with('newsList',$result->news);
    }
    public function addComents(Request $request)
    {
        $params = [
            // Your parameters
            'url' =>$request->url,
            'comment' => $request->comment,
            'userEmail' =>session('user')->email
        ];
        // 'GetResult' being the name of the soap method
$this->client->addComment($params);
    }

    public function userProfile($userEmail)
    {
        $params = [
            // Your parameters
            'userEmail' => $userEmail
        ];

        // 'GetResult' being the name of the soap method
        $result = json_decode($this->client->getUserNewsSortedFromNewOnes($params)->return);
        return \view('profil')->with([
            'newsList'=>$result->news,
            'userEmail' => $userEmail
            ]);
    } 
    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'url'=>'required',
            'titre'=>'required',
        ]);
        $params = [
            // Your parameters
            'url' => $request->input('url'),
            'titre' => $request->input('titre'),
            'userEmail' => session('user')->email
        ];
        // 'GetResult' being the name of the soap method
        $result = json_decode($this->client->create($params)->return);
          if (isset( $result->error )) {
            return \redirect('/')->with('error',$result->error);
          } 
              return \redirect('/');
    }

    public function rateNews(Request $request)
    {
        if ($request->rating!=1&&$request->rating!=-1) {
            return \redirect('/')->with('error','inspect is for noobs :)');
        }
        $params = [
            // Your parameters
            'url' =>$request->url,
            'rating' => $request->rating,
            'userEmail' =>session('user')->email,
            'authorEmail' => $request->authorEmail,
            'newsDate' => $request->date_ajouter
        ];
        // 'GetResult' being the name of the soap method
        $this->client->rateNews($params);
        
    }
}
