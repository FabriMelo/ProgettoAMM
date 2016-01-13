<?php

/**
 * Contiene variabili di configurazione
 */

 class Settings
 {
    private static $appPath;
    const debug = false;
    
    public static $user = "meloniFabrizio";
    public static $password = "macaco4973";
    public static $host = "localhost";
    //public static $db = "amm15_meloniFabrizio";
    public static $db = "fantamm";


    public static function getApplicationPath() 
    {
        if (!isset(self::$appPath)) 
        {
            switch ($_SERVER['HTTP_HOST']) {
                case 'localhost':
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/Progetto/';
                    break;
                case 'spano.sc.unica.it':
                    // configurazione pubblica
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/amm2014/deianaRoberto/CM/';
                    break;
                default:
                    self::$appPath = '';
                    break;
            }
        }
        
        return self::$appPath;
    }
}
?>