<?php 
include_once './view/createView.php';

class guestController{
 
public function __constructor()
        {
            
        }
        
        public function handler($cmd)
        {
        $view = new createView();
        
        switch($cmd){
            
        case 'home':
        {
            $this->set_Home($view);
            break;
        }
    
        case 'about':
        {
            $this->set_About($view);
            break;
        }
        
        case 'products':
        {
            $this->set_Products($view);
            break;
        }
        
          case 'signUp':
        {
            $this->set_signUp($view);
            break;
        }
        
          case 'registrazioneAvvenuta':
        {
            $this->set_SuccessfullSignUp($view);
            break;
        }
        
        case 'carrello':
        {
            $this->set_NotAuthorized($view);
            break;
        }
        
         case 'profilo':
        {
            $this->set_NotAuthorized($view);
            break;
        }
        
        case 'photo':
        {
            $this->set_Photo($view);
            break;
        }
        
        case 'loginError':
        {
            $this->set_LoginError($view);
            break;
        }
        
        }
        
        
        }
        
       
        
        public function set_Home($view){
          
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader()); 
            
            $view->setContent('./view/guest/content.php');
            require_once($view->getContent());
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
             $view->setLeftBar('./view/guest/leftbar.php');
            require_once($view->getleftBar());

            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            
            
        }
        
          public function set_About($view){
          
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            
            $view->setAbout('./view/guest/about.php');
            require_once($view->getAbout());
            
             $view->setLeftBar('./view/guest/leftbar.php');
            require_once($view->getleftBar());
            
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
        }
        
        public function set_Products($view){
          
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            
            $view->setProducts('./view/guest/products.php');
            require_once($view->getProducts());
            
             $view->setLeftBar('./view/guest/leftbar.php');
            require_once($view->getleftBar());
            
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
        }
        
        
            public function set_signUp($view){
          
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            
            $view->setSignUp('./view/guest/signUp.php');
            require_once($view->getSignUp());
            
            $view->setLeftBar('./view/guest/leftbar.php');
            require_once($view->getleftBar());
            
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
        }
        
           public function set_SuccessfullSignUp($view){
          
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            
            $view->setSuccessfullSignUp('./view/guest/successfullSignUp.php');
            require_once($view->getSuccessfullSignUp());
            
            $view->setLeftBar('./view/guest/leftbar.php');
            require_once($view->getleftBar());
            
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
        }
        
        public function set_NotAuthorized($view){
          
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader()); 
            
            $view->setNotAuthorized('./view/guest/notAuthorized.php');
            require_once($view->getNotAuthorized());
            
            $view->setLeftBar('./view/guest/leftbar.php');
            require_once($view->getleftBar());
            
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            
        }
        
        public function set_LoginError($view){
          
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader()); 
            
            $view->setLoginError('./view/guest/loginError.php');
            require_once($view->getLoginError());
            
             $view->setLeftBar('./view/guest/leftbar.php');
            require_once($view->getleftBar());

            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
            
            
        }
        
        public function set_Photo($view){
          
            $view->setStartPage('./view/guest/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/guest/header.php');
            require_once($view->getHeader());
            
            $view->setPhoto('./view/guest/photo.php');
            require_once($view->getPhoto());
            
            $view->setLeftBar('./view/guest/leftbar.php');
            require_once($view->getLeftBar());
            
            $view->setFooter('./view/guest/footer.php');
            require_once($view->getFooter());
        }
        
            
}

?>