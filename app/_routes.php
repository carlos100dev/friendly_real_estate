<?php
/*
 * _routes.php by Carlos Gonzalez
 * use a route, page controller method, and view to route HTTP requests to a page
 * to create a new page:
 * 1. create a new route, 2. add a page controller method, 3. connect to page
*/

// define controllers
$pageController = new PageController();

// define routes
$router = new Router(new Request);

$router->get('/404', function(){
  return '<h1>Error: 404</h1><br /><p>This page does not exist</p>';
});

$router->get('/', function() use (&$pageController, &$pdo){
  return $pageController->index($pdo);
});

$router->get('/index.php', function() use (&$pageController, &$pdo){
  return $pageController->index($pdo);  // still have to update
});

$router->get('/listings', function() use (&$pageController, &$pdo){
	return $pageController->listings($pdo);
});

$router->get('/contact', function() use (&$pageController){
  return $pageController->contact();
});

$router->get("/single", function($request, $param) use (&$pageController, &$pdo){
  return $pageController->singleListing($pdo, $param);
});

$router->get('/create_listing', function(Request $request) use (&$pageController, &$pdo) {
  return $pageController->create_listing($request, $pdo);
});

// example post route
// $router->post('/listing', function(Request $request){
// 	require('profile.php');
// });
