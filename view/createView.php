<?php
    class CreateView
    {
        private $startPage;
        private $header;
        private $content;
        private $footer;
        private $endPage;
        private $staticPage;
        private $products;
        private $signUp;
        private $successfullSignUp;
        private $notAuthorized;
        private $carrello;
        private $profilo;
        private $logout;
        private $photo;
        private $loginError;
        
        public function __construct()
        {
            
        }  
        
        
           public function getStartPage()
        {
            return $this->startPage;
        }
        
        public function setStartPage($startPage)
        {
            $this->startPage = $startPage;
        }
        
        public function getHeader()
        {
            return $this->header;
        }
        public function setHeader($header)
        {
            $this->header = $header;
        }
        public function getContent()
        {
            return $this->content;
        }
        public function setContent($content)
        {
            $this->content = $content;
        }
        public function getFooter()
        {
            return $this->footer;
        }
        public function setFooter($footer)
        {
            $this->footer = $footer;
        }
        
             public function getLeftBar()
        {
            return $this->leftbar;
        }
        public function setLeftBar($leftbar)
        {
            $this->leftbar = $leftbar;
        }
        
        public function getAbout()
        {
            return $this->about;
        }
        public function setAbout($about)
        {
            $this->about = $about;
        }
        
          public function getProducts()
        {
            return $this->products;
        }
        public function setProducts($products)
        {
            $this->products = $products;
        }
        
            public function getSignUp()
        {
            return $this->signUp;
        }
        public function setSignUp($signUp)
        {
            $this->signUp = $signUp;
        }
        
            public function getSuccessfullSignUp()
        {
            return $this->successfullSignUp;
        }
        public function setSuccessfullSignUp($successfullSignUp)
        {
            $this->successfullSignUp = $successfullSignUp;
        }
        
        public function getNotAuthorized()
        {
            return $this->notAuthorized;
        }
        
        public function setNotAuthorized($notAuthorized)
        {
            $this->notAuthorized = $notAuthorized;
        }
        
        public function getCarrello()
        {
            return $this->carrello;
        }
        
        public function setCarrello($carrello)
        {
            $this->carrello = $carrello;
        }
        
        public function getProfilo()
        {
            return $this->profilo;
        }
        
        public function setProfilo($profilo)
        {
            $this->profilo = $profilo;
        }
        
        public function getLogout()
        {
            return $this->logout;
        }
        
        public function setLogout($logout)
        {
            $this->logout = $logout;
        }
        
        public function getPhoto()
        {
            return $this->photo;
        }
        
        public function setPhoto($photo)
        {
            $this->photo = $photo;
        }
        
        public function getLoginError()
        {
            return $this->loginError;
        }
        
        public function setLoginError($loginError)
        {
            $this->loginError = $loginError;
        }
       
     

    }
    
?>