<?php
class geometricCircle{
    function areaCal($radius){
            $circleAreaCal= pi*$radius*$radius;
            return $circleAreaCal;   
    }

}
class geometricRectangle{
    function areaCal($length,$width){
        $rectangleAreaCal= $length*$width;
        return $rectangleAreaCal;
    }

}
//Circle Area Calculation
const pi = 3.1416;
echo "pi value = 3.1416 and Radius value = 8"."<br>";
$circle = new geometricCircle();
echo "Circle Area Calculation:- ".$circle->areaCal(8)."<br><br>";

//Rectangle Area Calculation
echo "Rectangle Length = 4 and Width = 9"."<br>";
$rectangle = new geometricRectangle();
echo "Rectangle Area Calculation:- ".$rectangle->areaCal(4,9);

?>