<?php
    $text1 = $_POST["time"];
    $text2 = $_POST["attempt"];
    
    if($text1 != ""){
        echo("Message sent successfully! ");
        echo("Field 1: " . $text1);
        echo("Field 2: " . $text2);
        
        $file = fopen("data.text", "a");
        fwrite($file, $text1);
        fwrite($file, $text2);
        
    }else{
        echo("Message sending failed...");
    }
?>