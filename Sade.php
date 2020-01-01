<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="materialize.css">
    <script src="materialize.js"></script>
    <meta charset="UTF-8">
    <title>Sade</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">Noon</a href="#">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="khash.php">Khash khash</a></li>
            <li class="active"><a href="Sade.php">Sade</a></li>
        </ul>
    </div>
</nav>
<?php
$sade = 1000;
define('TEDAD', 10);
define('RULE', 3);
$count = 1;

echo '</div>';
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
