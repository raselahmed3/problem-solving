<?php
class Stack{
    private $stack;
    public function __construct(){
        $this->stack = array();
    }

    public function isEmpty(){
        return empty($this->stack);
    }

    public function push($val){
        array_push($this->stack,$val);
    }

    public function pop(){
        if(!empty($this->stack)){
            return array_pop($this->stack);
        }else{
            return null;
        }
       
    }

    public function peek(){
        if(!empty($this->stack)){
            return end($this->stack);
        }else{
            return null;
        }    
    }

    public function count(){
        return count($this->stack);
    }

}
