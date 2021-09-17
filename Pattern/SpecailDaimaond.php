<?php
echo '<h1>Specail Daimond Pattern Blank Dimaond</h1>';
echo '<br>';
$row=10;
for($i=1;$i<=$row;$i++)
{
    for($k=$i;$k<$row;$k++)
    {
        echo '&nbsp;&nbsp;';
    }
    for($j=1;$j<=(2 * $i -1);$j++)
    {
        if($j==1 || $j==(2 * $i -1))
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
for($i=$row;$i>=1;$i--)
{
    for($k=$i;$k<$row;$k++)
    {
        echo '&nbsp;&nbsp;';
    }
    for($j=1;$j<=(2 * $i -1);$j++)
    {
        if($j==1 || $j==(2 * $i -1))
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