<?php

/*
  * Router.php by Carlos Gonzalez
  * stores routes
  * resolve routes requested by URI requests
  * routes are in the format: '/route(/params*)'
*/
class Router{
  private $request;
  private $route = NULL;
  private $method = NULL;
  private $supportedHTTPMethods = array(
    "GET",
    "POST"
  );

  function __construct(RequestInterface $request){
    $this->request = $request;
  }

  /*
  * __call() : calls get or post
  * @param name - either 'GET' or 'POST'
  * @param args - an array of arguments the method was invoked with
  * ex. args[] = ['route', method()]
  * __call() dynamically creates an associative array that maps routes
  * to callbacks
  * store each route,method pair in the GET or POST array in $this
  * each route is stored in the format: /route
  * @exception invalidMethodHandler - response received when a method not
  * supported is called
  */
  function __call($name, $args){
    // echo '<br /> __call was called';
    // list assigns values to variables in one operation
    // ex. $route now equals $args[0] and $method now equals $args[1]
    list($this->route, $this->method) = $args;
    // echo '<br />first $this->method: '.var_dump($this->method);

    // check if http method is supported
    if(!in_array(strtoupper($name), $this->supportedHTTPMethods)){
      $this->invalidMethodHandler();
    }
    // echo '<br />added route to '.strtolower($name).' array';
    // add route,method pair to dynamic array
    // ex. Router->get['route'] = method
    // echo '<br />before formatRoute(): '.$this->route;
    // echo '<br />then in call(): after formatRoute: '.$this->formatRoute($this->route).'<br /><br/>';
    $this->{strtolower($name)}[$this->formatRoute($this->route)] = $this->method;
  }

  /*
  * formatRoute() : removes trailing forward slashes from the right of the route
  * or removes the base directory from the route
  * resulting format: "/route"
  * @param route - String
  */
  private function formatRoute($route){
    // echo '<br />route before formatRoute(): '.$route;
    //empty case
    // '/' case
    if(($route=='') || ($route=='/')){
      return '/';
    }
    // echo '<br />route before string replacement: '.$route;
    // base dir case - remove the base directory if the route includes it
    $result = str_replace(__BASE_DIR__, '/', $route);
    // echo '<br />route after string replacement: '.$result;
    // check if $result=='/' because rtrim will remove it
    if ($result=='/'){
      return $result;
    }
    // right slash case - trim the slash on the right side if it has one
    $result = rtrim($result, '/');

    return $result;
  }

  private function invalidMethodHandler(){
    header("{$this->request->serverProtocol} 405 Method Not Allowed");
  }

  private function defaultRequestHandler(){
    header("{$this->request->serverProtocol} 404 Method Not Allowed");
  }

  /*
  * resolve() : resolves a route - called when a uri is requested
  * resolve() selects a callback that gets called to handle a request
  * based on the request's HTTP method and path
  */
  function resolve(){
    // check if there was even a route to begin with
    if ($this->route != NULL && $this->method != NULL){
      // echo '<br /><br /> resolve() was called';
      // print request method
      // $arr = $this->{strtolower($this->request->requestMethod)};
      // foreach($arr as $k => $v){
      //   echo '<br />possible request method route: '.$k;
      // }

      // three cases
      // case I : '/'
      // case II : '/route'
      // case II : '/route(/params*)'
      $parameters=array();

      $routeList = $this->{strtolower($this->request->requestMethod)};   // method list array($route =>$method)
      $formattedRoute = $this->formatRoute($this->request->requestUri);   // route
      // print URI
      // $uri = $this->request->requestUri;
      // echo '<br />resolve(): request uri: '.$uri;
      // echo '<br />resolve(): formatted uri= '.$formattedRoute;

      $tokens = $this->tokenizePath($formattedRoute);
      // print tokens
      // for($t=0;$t<count($tokens);$t++){
      //   echo'<br />token #'.$t.': '.$tokens[$t];
      // }
      // extract route from tokens array
      $formattedRoute = array_shift($tokens);
      // echo '<br />resolve(): formatted uri after array shift= '.$formattedRoute;
      // echo '<br />tokens array:';
      // for($t=0;$t<count($tokens);$t++){
      //   echo'<br />token #'.$t.': '.$tokens[$t];
      // }

      // echo '<br />tokens array count: '.count($tokens);

      // check if route exists
      if (!array_key_exists($formattedRoute, $routeList)){
        // set the route to 404 page
        $newRoute = '/404';
        echo call_user_func($this->get[$newRoute]);
        exit(1);
      }
      // find the method call that this route maps to
      $method = $routeList[$formattedRoute];

      if(is_null($method)){
        $this->defaultRequestHandler();
        return;
      }

      // case : '/', case : '/route'
        //tokens array is empty
      // case : '/route(/params*)'
        //tokens array is not empty
      // set parameters to remaining tokens
      $parameters = $tokens;

      // print parameters
      // for($t=0;$t<count($parameters);$t++){
      //   echo'<br />token #'.$t.': '.$parameters[$t];
      // }
      // echo '<br />';

      // echo '<br />route taken: '.$formattedRoute;
      $param_arr = array($this->request, $parameters);

      //call_user_func_array ( callable $callback , array $param_arr ) : mixed
      // $param_arr : the parameters passed to the callback, as an indexed array
      echo call_user_func_array($method, $param_arr);

    } // end if
  } // end resolve()

  /*
  * tokenizePath($path) : takes a $path array and splits it up into tokens
  * @param: $path - the path to be split into tokens
  * @return - returns an array with elements : array('page name', param1, param2, ...)
  * @return - if $path is '/', then it will return an array('/')
  */
  private function tokenizePath($path=NULL){
    if($path==NULL) return NULL;
    else if ($path=='/') return array('/');
    else{
      $path = ltrim($path, '/');          // trim before explode() to avoid empty elements
      $path = explode('/', $path);
      $path[0] = '/'.$path[0];            // add the '/' back on put route back in format
      return $path;
    }
  }

  function __destruct(){
    $this->resolve();
  }
} // end Router
