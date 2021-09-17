<?php
echo '<h2>This is specail ulta Trangle Pattern</h2>';
echo '<br>';
$row = 5;
for($i=5;$i>=1;$i--)
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