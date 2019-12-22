<html>
<body>
<h1>My first PHP code :)</h1>
<?php
$myname = "Khosro";
echo "Hello World my name is";
echo "</br>";
echo $myname;

$age = 25;
function birthday()
{
    $GLOBALS['age']++;
}

birthday();
echo "Happy birh day Khosro:" . $age;

function myFunction()
{
    static $num = 0;
    echo $num;
    $num++;
}

myFunction();
myFunction();
myFunction();
?>

</body>
</html>
