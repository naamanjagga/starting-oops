<?php
class MyClass {
    public $date;
    function date1($date){
       $this->date = $date;
       $res = date_format($this->date,"Y/m/d");
       echo date("Y-m-d", strtotime($res) );
    
    }
}

$var = new MyClass();
$var->date = date_create('12-08-2004');
echo $var->date1($var->date);
?>