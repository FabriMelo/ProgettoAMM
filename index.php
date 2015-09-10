<!DOCTYPE html>
<?php
//Controllers
 include_once './controller/userController.php';
 //Create and ask for the page
  $Page = new Page();
  $Page->getPage($_REQUEST);
  
  class Page{
      
      public function getPage(&$page){
        
         $controller = new userController();
         $controller->handler('header');
      }
  }
  
  ?>