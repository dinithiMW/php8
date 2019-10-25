<html>
<title>php</title>
<body>
<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    $GLOBALS['Z']=$GLOBALS['y']-$GOBALS['x'];
      $GLOBALS['A']=$GLOBALS['y']/$GOBALS['x'];
      $GLOBALS['B']=$GLOBALS['y']*$GOBALS['x'];
} 

myTest();
    echo $y; 
    echo "<br>";
    echo $Z;
    echo "<br>";
    echo $A;
    echo "<br>";
    echo $B;
?>
</body>
</html>
