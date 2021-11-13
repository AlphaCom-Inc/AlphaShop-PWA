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

    public function getSocials($name){
        if(!empty(\R::findOne('as_social', "stype = '{$name}'"))){
            return \R::findOne('as_social', "stype = '{$name}'")->svalue;
        }
        return null;
    }

    public function getParams($name){
        if(!empty(\R::findOne('as_params', "akey = '{$name}'"))){
            return \R::findOne('as_params', "akey = '{$name}'")->avalue;
        }
        return null;
    }

    public function getProperties(){
        return self::$properties;
    }

}