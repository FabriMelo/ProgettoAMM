<?php 
include_once './view/createView.php';

class userController{
 
public function __constructor()
        {
            
        }
        
        public function handler($cmd)
        {
        $view = new createView(); 
        $this->set_staticPage($view);
        }
        
        public function set_staticPage($view){
          
            /*$view->setstaticPage('./view/User/staticPage.php');
            require_once($view->getstaticPage());*/
            
            $view->setHeader('./view/User/header.php');
            require_once($view->getHeader());
            
             $view->setLeftBar('./view/User/leftbar.php');
            require_once($view->getleftBar());
            
            $view->setContent('./view/User/content.php');
            require_once($view->getContent());
            
            $view->setFooter('./view/User/footer.php');
            require_once($view->getFooter());
        }
        
       /*public function set_home($view){
               $view->setHeader('./view/User/header.php');
            require_once($view->getHeader());
            
            $view->setContent('./view/User/content.php');
            require_once($view->getContent());
            
             $view->setLeftBar('./view/User/leftbar.php');
            require_once($view->getLeftBar());
            
            $view->setFooter('./view/User/footer.php');
            require_once($view->getFooter());*/
            
           
            
       }

?>