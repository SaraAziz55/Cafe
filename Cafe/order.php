<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "_//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml111.dtd">
  
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>Bill Generation</title>
</head>
<body>
<?php
$burger = $_POST["burger"];
$pizza = $_POST["pizza"];
$coldcoffee = $_POST["coldcoffee"];
$pasta = $_POST["pasta"];
$pancake = $_POST["pancake"];
$noodles = $_POST["noodles"];
$name = $_POST["name"];
$street = $_POST["street"];
$city = $_POST["city"];
$payment = $_POST["payment"];

if($burger == "") $burger = 0;
if($pizza == "") $pizza = 0;
if($coldcoffee == "") $coldcoffee = 0;
if($pasta == "") $pasta = 0;
if($pancake == "") $pancake = 0;
if($noodles == "") $noodles = 0;

$burger_cost = 100.0 * $burger;
$pizza_cost = 200.0 * $pizza;
$coldcoffee_cost = 50.0 * $coldcoffee;
$pasta_cost = 250.0 * $pasta;
$pancake_cost = 100.0 * $pancake;
$noodles_cost = 200.0 * $noodles;
$total_price = $burger_cost + $pizza_cost + $coldcoffee_cost + $pasta_cost + $pancake_cost+ $noodles_cost;
$total_items = $burger + $pizza + $coldcoffee + $pasta + $pancake + $noodles;
?>
<h4>CUSTOMER:</h4>
<?php
print("$name, <br/> $street, <br/> $city <br/>");
?>
<p/><p/>
<table border = "border">
<caption>ORDER INFORMATION:</caption>
<tr>
<th>PRODUCT</th>
<th>UNIT PRICE</th>
<th>QUANTITY ORDERED</th>
<th>ITEM COST</th>
</tr>
<tr align = "center">
<td>Burger</td>
<td>100.00</td>
<td><?php print("$burger"); ?></td>
<td><?php printf("Rs %4.2f", $burger_cost); ?></td>
</tr>
<tr align = "center">
<td>Pizza</td>
<td>200.00</td>
<td><?php print("$pizza"); ?></td>
<td><?php printf("Rs %4.2f", $pizza_cost); ?></td>
</tr>
<tr align = "center">
<td>Cold coffee</td>
<td>50.00</td>
<td><?php print("$coldcoffee"); ?></td>
<td><?php printf("Rs %4.2f", $coldcoffee_cost); ?></td>
</tr>
<tr align = "center">
<td>Pasta</td>
<td>250.00</td>
<td><?php print("$pasta"); ?></td>
<td><?php printf("Rs %4.2f", $pasta_cost); ?></td>
</tr>
<tr align = "center">
<td>Pancake</td>
<td>100.00</td>
<td><?php print("$pancake"); ?></td>
<td><?php printf("Rs %4.2f", $pancake_cost); ?></td>
</tr>
<tr align = "center">
<td>Noodles</td>
<td>200.00</td>
<td><?php print("$noodles"); ?></td>
<td><?php printf("Rs %4.2f", $noodles_cost); ?></td>
</tr>
</table>
<p/><p/>
<?php
print"You ordered $total_items items <br/>";
printf ("Your total bill is: Rs %5.2f <br/>", $total_price);
print "Your chosen method  of payment is: $payment <br/>";
print "Thank you! Visit again <br/>";
?>
<script type = "text/javascript">
alert("Please give your feedback!");
</script>
</body>
</html>