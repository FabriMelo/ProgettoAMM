<?php

include_once './model/user.php';
include_once './model/FantammDB.php';

class usersDB
{

    private static $singleton;

    private function __constructor()
    {
        
    }
    
    public static function instance()
    {
        if (!isset(self::$singleton))
            self::$singleton = new usersDB();

        return self::$singleton;
    }
    
    public function existUser($username, $password)
    {
        $mysqli = FantammDB::instance();
        
        if (!isset($mysqli)) 
        {
            $mysqli->close();
            return false;
        }

        $stmt = $mysqli->stmt_init();
        
        $query = "SELECT * FROM user WHERE username=\"$username\" AND password=\"$password\" ;";
        
        $stmt->prepare($query);
        
        if (!$stmt) 
            return false;
        
        if(!$stmt->execute())
        {
            $stmt->close();
            $mysqli->close();
            return false;
        }
        
        $result = array();
        $bind = $stmt->bind_result(  
                $result['email'],
                $result['username'],
                $result['password'],
                $result['name'],
                $result['surname'],
                $result['street'],
                $result['number'],
                $result['city'],
                $result['postalCode'],
                $result['state']);
    
       if (!$bind)
           return false;
       
        if (!$stmt->fetch()) 
        {
            $stmt->close();
            $mysqli->close();
            return false;
        }

        $stmt->close();
        $mysqli->close();
        
        return true;
    }
    
    
    public function insert($user)
    {
        $mysqli = FantammDB::instance();
        if (!isset($mysqli))
        {
            $mysqli->close();
            echo "Non ha -1- funzionato!";
            return false;
        }
        
        $stmt = $mysqli->stmt_init();
        
        
         $query = " INSERT INTO user
        (email, username, password, name, surname, street, number, city, postalCode, state)
        VALUES
        ('" . $user->getEmail() ."' , '" . $user->getUsername()."', '" . $user->getPassword()."',
                    '" . $user->getName()."', '" . $user->getSurname()."', '" . $user->getStreet()."', 
                    '" . $user->getNumber()."', '" . $user->getCity()."', '" . $user->getPostalCode()."',   
                    '" . $user->getState()."')";
        
        $stmt->prepare($query);
        
        if (!$stmt) 
            return false;
                
        if(! $stmt->execute())
        {
            $stmt->close();
            $mysqli->close();
            echo "Non ha -2- funzionato!";
            return false;
        }
        
        $stmt->close();  
        $mysqli->close();
       
        return true;
        
    }
}

?>
