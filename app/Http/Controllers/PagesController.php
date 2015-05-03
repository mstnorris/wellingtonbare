<?php namespace WellingtonBare\Http\Controllers;

use WellingtonBare\Http\Requests;
use WellingtonBare\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.index');
    }
}
