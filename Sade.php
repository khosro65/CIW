<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sade</title>
</head>
<body>
<a href="khash.php">Khash</a>
<?php
$sade = 1000;
define('TEDAD', 10);
define('RULE', 3);
$count = 1;
echo "<h1>Sade</h1>";
while ($count <= TEDAD) {
    echo "$count = " . $sade * $count;
    if ($count % RULE == 0)
        echo "hob";
    echo "</br>";
    $count++;
}
?>
</body>
</html>
