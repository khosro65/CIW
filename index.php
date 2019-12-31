<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$name = "Khosro";
$sade = 1000;
$konjedi = 1500;
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
$count = 1;
echo "<hr/>";
echo "<h1>Konjedi</h1>";
while ($count <= TEDAD) {
    echo "$count = " . $konjedi * $count;
    if ($count % RULE == 0)
        echo "hob";
    echo "</br>";
    $count++;
}
switch (strtolower($name)) {

    case "khosro":
        echo "Hi student.";
        break;
    case "khahani":
        echo "Hi Teacher";
        break;
    default:
        echo "Hi friend";
}
?>
</body>
</html>
