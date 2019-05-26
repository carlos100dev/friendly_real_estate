<?php

class Request implements RequestInterface{
  function __construct(){
    $this->serverToProperties();
  }

  /*
  * serverToProperties() : sets all keys in global $_SERVER array
  * as properties of the Request class
  */
  private function serverToProperties(){
    foreach($_SERVER as $key => $value){
      $this->{$this->toCamelCase($key)} = $value;
      // echo $this->toCamelCase($key).'<br />';
    }
    // echo '<p>'.$this->requestMethod.'</p>';
  }

  /*
  * toCamelCase() : converts a string to camelCase
  * as properties of the Request class
  */
   private function toCamelCase($str){
    $result = strtolower($str);
    $matches[]=NULL;

    preg_match_all('/_[a-z]/', $result, $matches);

    foreach($matches[0] as $match){
      // replace underscores with empty string
      $c = str_replace('_', '', strtoupper($match));
      // replace $c with $match in $result
      $result = str_replace($match, $c, $result);
    }

    return $result;
  } // end toCamelCase

  /*
  * getBody() : retrieves data from the request body
  */
  public function getBody(){
    if($this->requestMethod == 'GET'){
      $body = array();
      foreach($_GET as $key => $value){
        $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
      }
      return $body;
    }
    if($this->requestMethod == 'POST'){
      $body = array();
      foreach($_POST as $key => $value){
        $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
      }
      return $body;
    }
  } // end getBody()


} // end Request
