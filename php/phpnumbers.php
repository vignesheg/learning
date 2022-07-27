<html>
    <head></head>
    <body>
        <h1>Integer</h2>
<?php
$x=5985;
var_dump(is_int($x));
$y=51.87;
var_dump(is_float($y));
echo "<br>";
$inf=65465.e562;
var_dump($inf);
echo "<br>";
$nan=asin(52);
var_dump($nan);
var_dump(is_nan($nan));
$numeric=87978;
var_dump(is_numeric($numeric));
$num="76576576.99087988";
$intcast = (int)$num;
echo "$
intcast";
?>
</body>
</html>