<?php
// App Core class
// Creates URL and loads core controller
// URL Format - /controller/method/params

class Core
{
  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = [];

  public function __construct()
  {
    // print_r($this->getUrl()); // use print_r to show details of an array 
    $url = $this->getUrl(); // Uses getUrl() function below to extract data from url and put into $url 

    // Look in controllers for first value
    if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
      // If exists, set as controller
      $this->currentController = ucwords($url[0]);
      // Unset 0 index
      unset($url[0]);
    }
    // Require the controller 
    require_once '../app/controllers/' . $this->currentController . '.php';
    // Instantiate controller class
    $this->currentController = new $this->currentController;

    // Check for second part of url 
    if(isSet($url[1])){
      // Check to see if method exists in controller 
      if(method_exists($this->currentController, $url[1])){
        $this->currentMethod = $url[1];
        // Unset 1 index
        unset($url[1]);
      }
    }

    // Get params
    $this->params = $url ? array_values($url) : [];
    // Call a callback with array of params
    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    
  }

  // Take off last /, then remove characters that shouldn't
  // be in url, then explode url using / and create array
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
