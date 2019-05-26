<?php

/*
* Bootstrap.php
* get the routes from the request
*/
class Bootstrap{
  public function __construct(){
    // router
    try{
      Dispatcher::dispatch();
    } catch(ClassNotFoundException $e){
      echo '<br />dispatcher had an exception';
      echo $e->getMessage();
      exit();
    }

  } // end __construct()
} // end Bootstrap
