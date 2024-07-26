<?php
        # <=> spaceship operator
        # $a<=>$b
        # returns -1 if a a < b
        # returns 0 if a = b
        # returns 1 if a > b
        $a=30;
        $b=20;
        echo $a<=>$b . "<br>";

        echo "<br><br>";


        $res1 = ($a==30 and $b==10);
        var_dump($res1);

        echo "<br><br>";

        $res2 = ($a==30 or $b==20);
        var_dump($res2);

        echo "<br><br>";

        $x = "Hello";
        $y = "PHP";
        $x .= $y;
        echo $x;

        echo "<br><br>";

        $age = 16;
        if($age >= 18){
            echo "You are eligible to vote";
        }else{
            echo "You are not eligible to vote";
        }
?>