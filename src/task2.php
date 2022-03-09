<?php
class MyClass {
    public $name;
    public $str;
    function set_str(){
        echo $this->str;
        echo $this->name;
         
    }
}

$var = new MyClass();
$var->name = 'RAM';
$var->str = " Hello All, I am  ";
echo $var->set_str();
?>