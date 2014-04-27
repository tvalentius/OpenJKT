
<?php

class CategoryController extends BaseController {

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

	public function getIndex($id)
	{
		//model
		$data = new APBD();


		//

		$this->viewdata['category_name'] = $id;
		//$this->viewdata['category_total_item'] = 128;
		//$this->viewdata['category_total_budget'] = 10000000000;
		//$this->viewdata['category_total_percentage'] = 88;
		$this->viewdata['category_data'] = $data->get_category($id,'2013');
		/*
		- Chart based on Item category?
		- Total Kegiatan
		- Total dana
		- Total yang direalisasikan
		*/


		//view
        $this->layout->nest('content', 'category.index',  $this->viewdata);
        

        //Style
        //Asset::container('header')->add('home','css/home/home.css');
	}

	public function getList($id,$category='urusan')
	{
		//model
		$data = new APBD();


		//

		//$this->viewdata['category_name'] = 'Program';
		//$this->viewdata['category_total_item'] = 128;
		//$this->viewdata['category_total_budget'] = 10000000000;
		//$this->viewdata['category_total_percentage'] = 88;
		$this->viewdata['category_data'] = $data->get_category_item_list($id,$category);
		/*
		- Chart based on Item category?
		- Total Kegiatan
		- Total dana
		- Total yang direalisasikan
		*/


		//view
        $this->layout->nest('content', 'category.list',  $this->viewdata);
	}

	public function getDetail()
	{

	}



}