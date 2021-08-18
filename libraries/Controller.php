<?php
/*
	* Base controller
	* Loads the models and views
	*/
class Controller
{
	// Load model
	public function model($model)
	{
		// require model file 
		require_once 'models/' . $model . '.php';

		// instantiate the model
		return new $model();
	}
	
	// Load view 
	public function view($view, $data = [])
	{
		//check for the view file
		if (file_exists('views/' . $view . '.php')) {
			# code...
			require_once 'views/' . $view . '.php';
		} else {
			//view doesnot exist
			die('View does not exist');
		}
	}
}