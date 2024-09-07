<?php
$base=$_GET['base'];
$resultado=0;
?>
<html>
<head>
<meta charset= "utf-8">
<body>
    
<?php

for($i=1; $i<=10;$i++)
{
    $resultado=$i*$base;
    echo $i."X". $base ."=".$resultado."<br>";
    
}
?>


</body>



</head>


</html>






