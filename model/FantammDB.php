<?php

include_once "./Settings.php";

class FantammDB extends mysqli {
	
	private static $_instance = null;
    
	private function __construct()
	{
		
	}
	
    public static function instance()
    {
    	if(self::$_instance == null)
    	{
    		self::$_instance = new FantammDB();
    		
    		self::$_instance->connect(Settings::$host, Settings::$user, Settings::$password, Settings::$db);
    		
    		if(self::$_instance->connect_errno != 0)
    		{
    			$idErrore = self::$_instance->connect_errno;
    			$msg = self::$_instance->connect_error; 
    			error_log("Errore nella connessione al server $idErrore : $msg", 0);
    			
    			self::$_instance = null;
    		}

    	}
    	
    	return self::$_instance;
    }
    
    public static function chiudiDB()
    {
    	if(self::$_instance != null)
    	{
    		self::$_instance->close();
    	}
    }
    
   
}

?>