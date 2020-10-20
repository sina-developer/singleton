<?php

class Singleton {
    private static $instance = null;
    
    public static function getInstance(){

        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function SayHello(){
        echo "Hello World!\n";
    }
}