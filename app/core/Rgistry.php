<?php 
    namespace app\core;
    class Registry{
    	private static $intance;
    	private $storage;

    	private function __construct(){

    	}

    	private static function getIntace(){
    		if( !isset(self::$intance))
    			self::$intance = new self;
    		return self::$intance;
    	}

    	public function __set($name,$value){
    		if( !isset($this->storage[$name]))
    			$this->storage[$name] = $value;
    		else
    			die("Can't not set \"$value\" to \"$name\", $name aready exitst");
    	}

    	public function __get($name){
    		if(isset($this->storage[$name]))
    			return $this->storage[$name];
    		return null;
    	}
    }
 ?>