
<?php
class MyClass {
    public $array;
    function array1(){
        $sort = $this->array;
        sort($sort);
        return $sort;
    
    }
}

$var = new MyClass();
$var->array = array(11, -2, 4, 35, 0, 8, -9);
print_r( $var->array1());
?>