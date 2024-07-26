<?php
    $arr = array("name"=>"aman", "job"=>"nun lmao");
    foreach ($arr as $key => $value) {
        echo $key."=>".$value."<br>";
    }

    $arr2 = array(array(0, 1, 2), array(3, 4, 5), array(6, 7, 8));
    foreach($arr2 as $x){
        foreach($x as $y){
            echo $y . " ";
        }
        echo "<br>";
    }
?>