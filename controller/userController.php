<?php 
include_once './view/createView.php';
include_once './model/FantammDB.php';
include_once './model/usersDB.php';

class userController{
 
public function __constructor()
        {
            
        }
        
        public function handler($cmd)
        {
        $view = new createView();
        
        switch($cmd){
            
        case 'home':
            $this->set_Home($view);
            break;
    
        case 'products':
            $this->set_Products($view);
            break;
        
        case 'carrello':
            $this->set_Carrello($view);
            break;
        
        case 'about':
            $this->set_About($view);
            break;
        
        case 'profilo':
            $this->set_Profilo($view);
            break;
        
        case 'photo':
            $this->set_Photo($view);
            break;
        
        case 'logout':
               {
                    $_SESSION['loggedIn'] = false;
                    $_SESSION['username'] = '';
                    $this->set_Logout($view);
                    header("location: /index.php?page=home");
                    break;
               }
               
        }    
        }
        
        public function set_Home($view){
          
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            
            $view->setContent('./view/user/content.php');
            require_once($view->getContent());
            
            $view->setLeftBar('./view/user/leftbar.php');
            require_once($view->getLeftBar());
            
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
        }
        
          public function set_About($view){
          
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            
            $view->setAbout('./view/user/about.php');
            require_once($view->getAbout());
            
            $view->setLeftBar('./view/user/leftbar.php');
            require_once($view->getLeftBar());
            
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
        }
        
       public function set_Carrello($view){
          
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            
            $view->setCarrello('./view/user/carrello.php');
            require_once($view->getCarrello());
            
            $view->setLeftBar('./view/user/leftbar.php');
            require_once($view->getLeftBar());
            
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
        }
        
        public function set_Products($view){
          
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            
            $view->setProducts('./view/user/products.php');
            require_once($view->getProducts());
            
            $view->setLeftBar('./view/user/leftbar.php');
            require_once($view->getLeftBar());
            
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
        }
        
        public function set_Profilo($view){
          
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            
            $view->setProfilo('./view/user/profilo.php');
            require_once($view->getProfilo());
            
            $view->setLeftBar('./view/user/leftbar.php');
            require_once($view->getLeftBar());
            
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
        }
        
        public function set_Logout($view){
          
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            
            $view->setLogout('./view/user/logout.php');
            require_once($view->getLogout());
            
            $view->setLeftBar('./view/user/leftbar.php');
            require_once($view->getLeftBar());
            
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
        }
        
        public function set_Photo($view){
          
            $view->setStartPage('./view/user/startPage.php');
            require_once($view->getStartPage());
            
            $view->setHeader('./view/user/header.php');
            require_once($view->getHeader());
            
            $view->setPhoto('./view/user/photo.php');
            require_once($view->getPhoto());
            
            $view->setLeftBar('./view/user/leftbar.php');
            require_once($view->getLeftBar());
            
            $view->setFooter('./view/user/footer.php');
            require_once($view->getFooter());
        }
        
       /* //$_POST contiene i dati passati dal form di login del guest content. Viene verificata la validità nel database,
        //e in caso positivo, $_SESSION["loggedIn"] prende vero
        public function login()
        {
            //$exist = userDB::instance()->existUser($_POST['username'], $_POST['password']);
            if(true)
            {
                 $_SESSION["loggedIn"] = true;
                 $_SESSION["username"] = $_POST['username'];
                 unset($_POST['username']);
                 unset($_POST['password']);
                 return true;
            }
            
            return false;
        }*/
        
        public function login()
        {
            $exist = usersDB::instance()->existUser($_POST['username'], $_POST['password']);

            if($exist)
            {
                 $_SESSION["loggedIn"] = true;
                 $_SESSION["username"] = $_POST['username'];
                 unset($_POST['username']);
                 unset($_POST['password']);
                 return true;
            }
            
            return false;
        }
        
        public function signUp()
        {
            $user = new user();            

            if ($this->checkFields() && $_POST['password'] == $_POST['confirm'])
            {
                $user->setEmail($_POST['email']);
                $user->setUsername($_POST['username']);
                $user->setPassword($_POST['password']);
                $user->setSurname($_POST['surname']);
                $user->setName($_POST['name']);
                $user->setStreet($_POST['street']);
                $user->setNumber($_POST['number']);
                $user->setCity($_POST['city']);
                $user->setPostalCode($_POST['postalCode']);
                $user->setState($_POST['state']);
            }
            else
                return false;
            
            if(usersDB::instance()->insert($user))
            return true;
            else
                return false;
        }
        
        public function checkFields()
        {                
               return 
                    isset($_POST['email']) && 
                    isset($_POST['username']) &&
                    isset($_POST['password']) && 
                    isset($_POST['confirm']) && 
                    isset($_POST['confirm']) && 
                    isset($_POST['name']) && 
                    isset($_POST['surname']) && 
                    isset($_POST['street']) && 
                    isset($_POST['number']) && 
                    isset($_POST['city']) && 
                    isset($_POST['postalCode']) && 
                    isset($_POST['state']);
        }
        
        public function aggiungiAlCarrello(){
            
            
            $result= $_GET['id'];
            return $result;
            
        }
           
            
       }

?>