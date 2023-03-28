<?php

$cars=[
     ["toyota","honda"],
     ["bmw","hyundai"],
     ["mercerdeds","suzuki"]   

];
foreach($cars as $value){
    foreach($value as $value2)
    {

        echo $value2. "<br>";
    }


}
?>