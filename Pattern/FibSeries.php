<?php  
    $num=0;
    $n1=0;
    $n2=1;
    echo "<h2>Generate Fib Series Up To number 10: </h2>";
    echo "\n";
    echo $n1.' '.$n2.' ';
    while($num<10)
    {
        $n3=$n1+$n2;
        echo $n3.' ';
        $n1=$n2;
        $n2=$n3;
        $num = $num+1;
    }
?>  