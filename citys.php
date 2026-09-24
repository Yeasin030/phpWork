<?php 
$city = array("narayangonj","Dhaka","Chittagonj","Rajsahi");
echo "<pre>";
print_r($city);
array_push($city,"Cox Bazar");
print_r($city);
array_shift($city);
print_r($city);
array_pop($city);
print_r($city); 
for ($i = 0; $i < count($city); $i++) {
    echo $city[$i] ,"<br>";
};
?>