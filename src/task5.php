<?php
class MyClass {
    public $date1;
    public $date2;
    function date($date1 ,$date2){
       $this->date1 = $date1;
       $this->date2 = $date2;
       //$value = date_diff($date1 ,$date2);
       $value = $date2 - $date1;
       $timeToDate = $value/86400;
       $years = ($timeToDate/365);
       $years = floor($years);

       $months = (($timeToDate%365)/30);
       $months = floor($months);

       $days = (($timeToDate%365)%31)-2;
      //return   $timeToDate;
      echo $years.' years - '.$months.' month - '.$days.' days';
    
    }
}

$var = new MyClass();
$var->date1 = strtotime('1981-11-03');
$var->date2 = strtotime('2013-09-04');
echo $var->date($var->date1 ,$var->date2);
?>