<?php

define('TIREPRICE', 100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);

//echo SPARKPRICE;

//phpinfo();

$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];

$find = $_POST['find'];

$totalqty = $tireqty + $oilqty + $sparkqty;

$totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;


if ($tireqty < 10) {
    $disount = 0;
} else if ($tireqty >= 10 && $tireqty <= 49) {
    $disount = 5;
} else if ($tireqty >= 50 && $tireqty <= 99) {
    $disount = 10;
} else if ($tireqty >= 100) {
    $disount = 15;
}

switch ($find) {
    case "a":
        echo "<p>regular customer</p>";
        break;
    case "b":
        echo "<p>Customer referrred by Tv Advert</p>";
        break;
    case "c":
        echo "<p>Customer referrred by phone directory</p>";
        break;
    case "d":
        echo "<p>Customer referrred by word of mouth</p>";
        break;
    default :
        echo "<p>we do not know how this customer found us</p>";
        break;

}


echo '<p>Your order is as follows</p>';

if ($totalqty == 0) {
    echo '<p style = "color:red">';
    echo 'You did not order anyting on the previous page! <br/>';
    echo '</p>';
//    exit;
} else {
    if ($tireqty > 0)
        echo $tireqty . ' tires <br/>';
    if ($oilqty > 0)
        echo $oilqty . ' bottles of oil <br/>';
    if ($sparkqty > 0)
        echo $sparkqty . ' spark plugs <br/>';
}


echo "Subtotal:$" . number_format($totalamount, 2) . "<br/>";
$taxrate = 0.10;
$totalamount = $totalamount * (1 + $taxrate);

echo "total including tax:$" . number_format($totalamount, 2) . "<br/>";


$a = 56;
//echo gettype($a)."<br/>";
//settype($a,'double');
//
//echo gettype($a).'<br/>';;
//
//echo 'isset($tireqty)'.isset($tireqty).'<br/>';
//echo 'isset($nothere)'.isset($nothere).'<br/>';
//echo 'empty($tireqty)'.empty($tireqty).'<br/>';
//echo 'empty($nothere)'.empty($nothere).'<br/>';


?>

<html>
<head>
    <title> Bob's auto Parts</title>
</head>

<body>
<h1>Bob's Auto Pars</h1>

<h2> Order results</h2>
<?php
echo "<p> Order processed at";
echo date('H:i,jS F Y');
//echo "</p>";
//echo "<p> Order processed at".date('H:i,jS F Y'). "</p>";
?>

</body>

</html>