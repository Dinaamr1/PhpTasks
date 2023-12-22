<?php

class Box{
    public $local="localhost";
    protected $username="root";
    private $password=123;
    public function pass(){
        return $this->password;
    }
    public function items(){
     return "Hi I am Items Method"; 
     return $this-> animals();
     return $this-> names();
    } 

    private function animals(){
        return "Animals Method";
    }

    protected function names(){
        return "Names Method";
    }
}

class Items extends Box{

}

class Data extends items{
 public function pass(){
    return 123456;
 }  
 public function info(){
    return $this->pass();
    return parent::pass();
    return self::pass();
    return static::pass();
 }   
 public function labels(){
    return $this->names();
    return $this->animals();
 }
}

$data = new Data;

//echo $data->info();

interface Rules{
    public function name():string;
    public function pass():int;
        
}
abstract class Goods{
   abstract protected function email();
}

class Boss implements Rules{
 protected function email(){

 }
 public function name():string{
    return "welcome";
 }
 public function pass():int{
    return 122;
}

}
class Terms{
    public function __construct($name,$pass){
        echo $pass."<br>";
    }
    public function __destruct(){
        echo "class Ended";
    }
}

$info = new Boss;
echo $info->name();