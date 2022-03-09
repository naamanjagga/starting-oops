<?php
class MyCalculator {
    public $num1;
    public $num2;
    function __construct($num1,$num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        
    }
    function add(){
       echo $this->num1 + $this->num2;
    }
    function sub(){
        echo $this->num1 - $this->num2;
     }
     function mul(){
        echo $this->num1 * $this->num2;
     }
     function div(){
        echo $this->num1 / $this->num2;
     }
}

$var = new MyCalculator(100,12);
echo $var->add();
echo '<br>';
echo $var->sub();
echo '<br>';
echo $var->mul();
echo '<br>';
echo $var->div();
?>