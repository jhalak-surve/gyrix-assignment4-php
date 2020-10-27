<?php
    $n=25;
    for($i=1; $i<=$n; $i++){
        if($i%3==0){
             if($i%5==0){
                echo "<h3 style='color:blue'>Hello World</h3><hr>";
            }
            echo "<h3 style='color:green'>Hello World</h3><hr>";
        }
        
        else if($i%5==0){
            echo "<h3 style='color:red'>Hello World</h3><hr>";
        }
        else
            echo "<h3 style='color:yellow'>Hello World</h3><hr>";
    }


?>