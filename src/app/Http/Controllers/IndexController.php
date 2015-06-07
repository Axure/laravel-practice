<?php namespace App\Http\Controllers;

//use Illuminate\Routing\Controller;

class IndexController extends Controller {


    /*
     * Index Controller
     *
     *
     *
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');

        $this->middleware('guest');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }


}
