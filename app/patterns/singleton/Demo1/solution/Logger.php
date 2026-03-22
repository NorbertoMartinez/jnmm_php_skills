<?php

namespace App\patterns\singleton\Demo1\solution;

class Logger
{
    private static $logger = null;
    protected $file;

    private function __construct(){
        $this->file = fopen("app.log", "a");
    }

    public static function getInstance(){
        if(!self::$logger){
            self::$logger = new Logger();
        }
        return self::$logger;
    }

    public function log($message){
        fwrite($this->file, $message);
    }
}