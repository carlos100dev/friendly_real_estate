<?php defined('__ROOT__') OR exit('No direct access allowed');
class View{
  private $pageTitle;

  /*
  * render() : renders the page on the user
  * @param - viewPath : the name of page file in the pages directory
  * @param - data : data passed to the page
  * @param - layout : FALSE if you don't to display the layout
  */
  public function render($viewPath, $data=NULL, $layout=NULL){
    $this->view = $viewPath;
    if($layout !== FALSE){
      $title = $this->getPageTitle();
      require("{$_SERVER['DOCUMENT_ROOT']}".__BASE_DIR__."view/layout.php");
    }
  }

  // helper methods

  public function getPageTitle(){
    return $this->pageTitle;
  }

  public function setPageTitle($newTitle){
    $this->pageTitle = $newTitle;
  }

}
