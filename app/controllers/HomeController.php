<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex($id=1)
	{
		//model
		$data = new APBD();


		//

		$this->viewdata['data_test'] = $data;

		//view
        $this->layout->nest('content', 'home.index',  $this->viewdata);
        

        //Style
        //Asset::container('header')->add('home','css/home/home.css');
	}



}