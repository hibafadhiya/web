<!DOCTYPE html>
<html>
<?php
$names = array("hiba","swathi","anu","jijy","aleena","neha");
asort($names);
echo"<h3>ascending order(asort):</h3>";
foreach($names as $n){ 
echo $n."<br>";
}
arsort($names);
echo"<h3>descending order(asort):</h3>";
foreach($names as $n){
 echo $n."<br>";
 }

?>
</html>
