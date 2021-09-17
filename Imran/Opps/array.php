<?php
$car = array("voldo","rsax","Toyato");
sort($car);
$clength =count($car);
for($x=0;$x<$clength;$x++)
{
    echo $car[$x];
    echo "<br>";

}
?>