<?php
    $num = 27;
    for($i=1;$i<=10;$i++){
        echo $num."x".$i."=".$num*$i."<br>";
    }

    echo "<br><br>";

    $names = array('Aman', 'Rahul', 'Shivam', 'Ayan');

    foreach ($names as $x) {
        echo $x . "<br>";
    }

    echo "<br><br>";

    $num = 33;

    $i = 1;
    while($i <= 10){
        echo $num."x".$i."=".$num*$i."<br>";
        $i++;
    }

    $x=1;
    do{
        echo $x."<br>";
        $x++;
    }while($x<=5);

    echo "<br><br>";

    $y = array(23,23,12,5,23,3,25,2,43,54,46,46,56,64,3,4);
    for($a=0;$a<count($y);$a++){
        echo $y[$a]." ";
    }
    echo "<br><br>";
    foreach($y as $num){
        echo $num." ";
    }
    echo "<br><br>";
    $q=0;
    while($q<count($y)){
        echo $y[$q]." ";
        $q++;
    }
?>