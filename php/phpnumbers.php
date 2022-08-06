<html>
    <head></head>
    <body>
        <h1>Integer</h2>
<?php
echo "<h2>php numbers</h2>";
$x=5985;
var_dump(is_int($x));
echo "<br>";
echo "<h2>php float</h2>";
$y=51.87;
var_dump(is_float($y));
echo "<br>";
echo "<h2>php infinity</h2>";
$inf=65465.e562;
var_dump($inf);
echo "<br>";
echo "<h2>php nan</h2>";
$nan=asin(52);
var_dump($nan);
var_dump(is_nan($nan));
echo "<br>";
echo "<h2>php numerical strings</h2>";
$numeric="87978";
var_dump(is_numeric($numeric));
echo "<br>";
echo "<h2>casting strings and floats to integers</h2>";
$num="76576576.99087988";
$intcast = (int)$num;
echo "$intcast";
?>
</body>
</html>