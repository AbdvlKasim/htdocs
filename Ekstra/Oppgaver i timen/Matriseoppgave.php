<?php
$lodd = array ();
echo "dine lodd er ";
for ($i=1; $i<=5; $i++)
{
    $dette_lodd = rand(1,100);
    $lodd[] = $dette_lodd;
    echo $dette_lodd . ",";
}

$vinnerlodd = rand(1,100);
if(in_array($vinnerlodd,$lodd))
{
    echo "<br> Du vant med loddnr. " . $vinnerlodd;
}
else 
{
    echo "<br> beklager, ikke noe gevinst"; 
}

?>