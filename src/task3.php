<?php
class MyClass {
    public $number;
    function fact(){
        $fact = 1;
        for ($i = $this->number ; $i > 0 ; $i-- ){
            $fact *= $i; 
        }
        return $fact;
         
    }
}

$var = new MyClass();
$var->number = 4;
echo $var->fact();
?>