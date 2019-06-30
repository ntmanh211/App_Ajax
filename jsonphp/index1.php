<?php

$phpArray = array("Hà Nội", "Hồ Chí Minh", "Đà Nẵng");

class Student{

    public $name;

    public $age;

    public $location;

    public function __construct($name, $age, $location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}
$st = new Student("Nguyễn Minh Quân", "18", "Hải Dương");
echo "<pre>";
print_r($phpArray);
echo "</pre>";
echo "<pre>";
print_r($st);
echo "</pre>";

$phpjson1 = json_encode($phpArray);

echo "<pre>";
print_r($phpjson1);
echo "</pre>";

$phpjson2 = json_encode($st);

echo "<pre>";
print_r($phpjson2);
echo "</pre>";
?>
