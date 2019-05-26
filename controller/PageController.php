<?php defined('__ROOT__') OR exit('No direct access allowed');

// controller interacts with models

class PageController extends Controller{
  public function index($data=NULL){
		$this->view->setPageTitle(__SITE_NAME__.' - Home');
		if($data===NULL) return $this->view->render('home');
    else{
      $data = getFeaturedListings($data); // $data is $pdo object
      return $this->view->render('home', $data);
    }
  }

  public function listings($data=NULL){
		$this->view->setPageTitle(__SITE_NAME__.' - Listings');
		if($data===NULL) return $this->view->render('listings');
    else {
      $data = getAllForListings($data);     // data is $pdo object
      return $this->view->render('listings', $data);
    }
  }

  public function contact($data=NULL){
    $this->view->setPageTitle(__SITE_NAME__.' - Contact');
    if($data===NULL) return $this->view->render('contact');
    else return $this->view->render('contact', $data);
  }
  public function singleListing($data=NULL, $param=NULL){
    $this->view->setPageTitle(__SITE_NAME__.' - Single Listing');
    if($data===NULL || $param==NULL || (count($param) == 0)) return $this->view->render('single_listing');
    else{
      //$data is $pdo, $param is not null, $param has an element
      //$param[0] is the listing id
      $data = getSingleListing($data, $param[0]);
      // $data is an array of an array because $data is a row of results
      // echo '<br />pageController(): $data: '.var_dump($data);
      return $this->view->render('single_listing', $data[0]);
    }
  }

  public function create_listing($request=NULL, $pdo_ptr=NULL){
    $this->view->setPageTitle(__SITE_NAME__.' - Create Listing');
    if($pdo_ptr==NULL) return $this->view->render('create_listing', $request);
    else{
      // post is getting created and request should be post request
      
      return $this->view->render('create_listing', $request);
    }
  }
}
