<?php
include_once 'Circle.php';
include_once 'Cylinder.php';

$circle1 = new Circle('yellow',3);
echo $circle1->__toString() . '<br>';
echo 'Circle Area :' . $circle1->calculateArea() . '<br>';
echo 'Circle Perimeter :' . $circle1->calculatePerimeter() . '<br>';


$cylinder1 = new Cylinder('red',3,4);
echo $cylinder1->__toString() . '<br>';
echo 'Cylinder Area :' . $cylinder1->calculateArea() . '<br>' ;
echo 'Cylinder Volume:' . $cylinder1->calculateVolume() . '<br>';
