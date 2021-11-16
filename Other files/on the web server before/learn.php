<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
  $y = 75;
  echo "\ny = $y";
  $x = 5; // global scope

function myTest() {
  global $x, $y;
  # $x = $x + $y;
  $GLOBALS['x'] = 2 * $GLOBALS['y'] + $GLOBALS['x'];
  echo "<p>Variable x inside function is: $x</p>";
}
  function staticVariable(){
    static $x = 5;
    $x++;
    echo "<p>x= $x.</p>";
    //echo $x;
  }
myTest();
  staticVariable();
staticVariable();
  staticVariable();
echo "<p>Variable x outside function is: $x</p>";
  
echo "<h3>PHP seems to be easy to learn.</h3>";
  echo "This ", "String ", "was made with ", "multiple parameters.";
  print "<h4>This String was made with multiple parameters.</h4>";
  print "This " . $x . " is allowed inside the print statement.";
  var_dump($x);
  $cars = array("BMW", "SUZUKI", "Hyundai");
  var_dump($cars);
 /* $client = new MongoDB\Client(
    'mongodb+srv://m001-student:temporary2@cluster0.d1x63.mongodb.net/test?retryWrites=true&w=majority'
);
$db = $client->test; */
  $sapi_type = php_sapi_name();
  echo $sapi_type;
?>

</body>
</html>