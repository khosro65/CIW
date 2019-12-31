<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Khash</title>
</head>
<body>
<a href="Sade.php">Sade</a>
<?php
$konjedi = 1500;
define('TEDAD', 10);
define('RULE', 3);

$count = 1;
echo "<h1>Konjedi</h1>";
while ($count <= TEDAD) {
    echo "$count = " . $konjedi * $count;
    if ($count % RULE == 0)
        echo "hob";
    echo "</br>";
    $count++;
}
?>
</body>
</html>
