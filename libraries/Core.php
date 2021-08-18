<?php
/*
	* App Core Class
	* Creates URL & Loads core controller
	* URL FORMAT - /controller/method/params
	*/

class Core
{
    protected $currentController = 'Tasks';
    protected $currentMethod = 'index';
    protected $params = [];


    public function __construct()
    {
        $url = $this->getUrl();

        require_once 'controllers/Tasks.php';

        //Instantiate controller class
        $this->currentController = new $this->currentController;

        // Check for second part of url
        if (isset($url[0])) {
            //check to see if method exists in controller
            if (method_exists($this->currentController, $url[0])) {
                $this->currentMethod = $url[0];

                //unset 1 index
                unset($url[0]);
            }
        }

        // get params
        $this->params = $url ? array_values($url) : [];

        // call a callback with an array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
