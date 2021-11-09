<?php

namespace alphashop;

class Registry {

    use TSingletone;

    protected static $properties = [];

    public function setProperty($name, $value){
        self::$properties[$name] = $value;
    }

    public function getProperty($name){
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }

    public function getParams($name){
        if(\R::findOne('params', "akey = '{$name}'") !== null){
            return \R::findOne('params', "akey = '{$name}'")->avalue;
        }
        return null;
    }

    public function getProperties(){
        return self::$properties;
    }

}