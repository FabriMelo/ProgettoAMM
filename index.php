<!DOCTYPE html>
<?php

@ob_start();

//Controllers
 include_once './controller/userController.php';
 include_once './controller/guestController.php';
 
 //Creazione della pagina
  $Page = new Page();
  $Page->getPage($_REQUEST);
  
  class Page{
      
      public function getPage(&$page){
        
         if (!isset($_SESSION['loggedIn']))
         session_start();
         
         
          if(!isset($page['page']) && !isset($page['action']) && !isset($page['print']))
            {
                
                // Controlla se l'user è loggato
                if(Page::isLogged())
                {
                    $controller = new userController();
                    $controller->handler('home');
                }
                
                else
                {
                    $controller = new guestController();
                    $controller->handler('home');                              
                }
            }
            else if (isset($page['print']))
            {
                    $controller = new userController();
                    $controller->printImg($page['print']);
            }
            
           // Gestisce la richiesta di una pagina diversa dalla home
           else
           {
                if(isset($page['page'])) 
                { 
                    if(Page::isLogged())
                    {
                        $controller = new userController();
                        $controller->handler($page['page']);
                    }
                    else
                    {   
                        $controller = new guestController();
                        $controller->handler($page['page']);
                    }
                }
                else if(isset($page['action']))
                {
                    if ($page['action'] == "login")
                    {
                        $userController = new userController();
                        $result = $userController->login();
                        if($result==1)
                        {
                         $userController->handler('home');   
                        }
                        else
                        {
                         $controller = new guestController();
                         $controller->handler('loginError'); 
                        }
                        
                    }
                    else if ($page['action'] == "signup")
                    {
                        $userController = new userController();
                        $result = $userController->signUp();
                        if ($result==1)
                        {
                         $controller = new guestController();
                         $controller->handler('registrazioneAvvenuta');  
                        }
                       else echo 'Problemi con la registrazione';
                    }
                    
                    else if ($page['action'] == "aggiungiAlCarrello")
                    {
                        $userController = new userController();
                        $result = $userController->aggiungiAlCarrello();
                        echo $result;
                    }
                }
      }
      }
      

      static function isLogged()
        {          
            if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == TRUE)
                return true;
            return false;
        }
  }
  
  ?>