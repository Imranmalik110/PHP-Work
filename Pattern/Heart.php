<?php
echo '<h2>Heart Shape in PhP<h2>';
echo '<br>';
$n=5;
for($r=0;$r<=$n;$r++)
{
    for($c=0;$c<=$n+1;$c++)
    {
        if(($r==0 && $c%3!=0) ||($r==1 && $c%3==0) || (($r-$c)==2) || (($r+$c)==8))
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