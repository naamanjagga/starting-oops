<?php
class MyClass {
    public $str;
    function set_str(){
       echo $this->str;
    }
}

$var = new MyClass();
$var->str = "'MyClass class has   initialized !'";
echo $var->set_str();
?>