<?php
    
    $ch='A';
    
    if($ch=='a' || $ch=='e' || $ch=='i' || $ch=='o' || $ch=='u' || $ch=='A' || $ch=='E' || $ch=='I' || $ch=='O' || $ch=='U' ){
        echo "<h3 style='color:red'>Vowel</h3>";
    }
    else if(($ch>='a' && $ch<='z') || ($ch>='A' && $ch<='z')){
        echo "<h3 style='color:blue'>Consonant</h3>";
    }
    else{
        echo "Neither vowel nor consonant";
    }
?>