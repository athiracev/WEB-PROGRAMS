<?php
echo"<h3>Sorted array</h3>";
$stud = array("Sree","Riya","Athu","Sona","Achu");
echo"displayind array print_r()";
print_r($stud);


echo "acending array <br>";
asort($stud);
print_r($stud);


echo "decending array <br>";
arsort($stud);
print_r($stud);
?>