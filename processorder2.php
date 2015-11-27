<?php

define('TIREPRICE',100);
define('OILPRICE',10);
define('SPARKPRICE',4);

echo SPARKPRICE;

//phpinfo();

$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
echo'<p>Your order is as follows</p>';
echo $tireqty.' tires <br/>';
echo $oilqty.' bottles of oil <br/>';
echo $sparkqty.' spark plugs <br/>';
$totalqty = $tireqty+$oilqty+$sparkqty;
$totalamount = $tireqty*TIREPRICE+$oilqty*OILPRICE+$sparkqty*SPARKPRICE;

echo "Subtotal:$".number_format($totalamount,2)."<br/>";
$taxrate = 0.10;
$totalamount = $totalamount*(1+$taxrate);

echo "total including tax:$".number_format($totalamount,2)."<br/>"

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
echo "</p>";
echo "<p> Order processed at".date('H:i,jS F Y'). "</p>";
?>

</body>

</html>