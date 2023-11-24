<html>
<body>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <input type="text" name="fname">
  <input type="submit" value="send">
</form>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="password" name="pass">
<input type="submit" value="ok">
</form>    

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="number" name="no">
<input type="submit" value="yes">
</form>
<?php

$age=10;
include "ind.php";
$x=0;
while (count($names)>$x)
{
    echo $names[$x]."<br>";
    $x++;
}
include_once "ind.php";
echo "My fav subject is $subject.<br>";

require "ind.php";
echo $names[3]."<br>";

require_once "ind.php";
echo $subject."<br>";
echo $age."<br>";

if (isset($_GET ['fname'])) {
    echo $_GET ['fname'];
  }
  if (isset($_post ['pass'])) {
    echo $_post ['pass'];
  }
  if (isset($_request ['no'])) {
    echo $_request ['no'];
  }
?>

</body>
</html>
