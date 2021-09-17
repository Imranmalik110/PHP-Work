<?php
$row = 5;
for($i=1;$i<=$row;$i++)
{
    for($k=$i;$k<$row;$k++)
    {
        echo '&nbsp;&nbsp;';
    }
    for($j=1;$j<=(2 * $i -1);$j++)
    {
        if($j==1 || $j==(2 * $i - 1) || $i==$row)
        {
            echo '*';
        }
        else 
        {
            echo '&nbsp;&nbsp;';
        }
    }
    echo '<br>';
}

?>