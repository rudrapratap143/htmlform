<table align = "center";
border ='1' width="100%">

<?php
    //multiplication_table.php
    $num=10;
    for($i = 1;  $i <= 10; $i++)
    {
        echo "<tr>";
    
    for($j = 1; $j <= $num; $j++)
    {
        $multiplication_table = ($i*$j);
        echo "<td align='center'> $multiplication_table </td>";

    }
    echo "<tr/>";
}
?>

</table>
<!-- // heart shap pattern in PHP -->
<?php
for ($r=0; $r <6; $r++)
{
    for($c = 0; $c < 7; $c++)
    {
        if(($r ==0 && $c%3!=0) || ($r ==1 && $c%3==0) || ($r-$c==2) || ($r+$c==8))
        {
              echo "*";
        }
        else{
            echo "&nbsp;&nbsp;";
        }
    }
        echo "</br>";
}
// Arthmetic Operators Use
$a= 11;
$b= 4;
$c= $a+$b;
$d= 5;
$e= 6;
    echo "Add:" .$c."<br>"; 
    $c= $a-$b;
    echo "Subtr : ".$c."<br>";
    $c= $a*$b;
    echo "Multi : ".$c."<br>";
    $c= $a/$b;
    echo "Divison : ".$c."<br>";
    $c= $a%$b;
    echo "Mod : ".$c."<br>";
    $d++;
    echo "Increment :  ".$d."<br>";
    $e--;
    echo "Decrement :  ".$e."<br>";

    // Comparision Operators

    $a = 7;
    $b = 5;
    var_dump($a>$b)
    ; 
    var_dump($a>=$b);

    //Array

    
    
?>
