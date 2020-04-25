<?php
    $text1 = $_POST["email"];
    $text2 = $_POST["time"];
    $text3 = $_POST["attempt"];
    $text4 = $_POST["attemptDetail"];
    
    $text5 = $_POST["Ans1"];
    $text6 = $_POST["Ans2"];
    $text7 = $_POST["Ans3"];
    $text8 = $_POST["Ans4"];
    $text9 = $_POST["Ans5"];
    $text10 = $_POST["Point"];
    
    if($text1 != ""){
        echo("Message sent successfully! ");
        echo("Email" . $text1 . " / ");
        echo("Time: " . $text2 . " / ");
        echo("Attempt: " . $text3 . " / ");
        
        $file = fopen("FunnyData.text", "a");
        fwrite($file, "Email: " . $text1 . " / ");
        fwrite($file, "Time: " . $text2 . " / ");
        fwrite($file, "Attempt: " . $text3 . " / ");
        fwrite($file, "Attempt Detail: " . $text4 . " / ");
        
        
        fwrite($file, "Ans1: " . $text5 . " / ");
        fwrite($file, "Ans2: " . $text6 . " / ");
        fwrite($file, "Ans3: " . $text7 . " / ");
        fwrite($file, "Ans4: " . $text8 . " / ");
        fwrite($file, "Ans5: " . $text9 . " / ");
        fwrite($file, "Point: " . $text10 . " \n ");
        
        $csvfp = fopen("FunnyData.csv", "a");
        $data = array(
            'Email' => $text1,
            'Time' => $text2,
            'Attempt' => $text3,
            'Attempt Records' => $text4,
            'Ans1' => $text5,
            'Ans2' => $text6,
            'Ans3' => $text7,
            'Ans4' => $text8,
            'Ans5' => $text9,
            'Point' => $text10
        );
        //fputcsv($csvfp, array($text1, $text2, $text3, $text4, $text5, $text6, $text7, $text8, $text9, $text10));
        fputcsv($csvfp, "\n");
        fputcsv($csvfp, $data);
        fclose($csvfp);
        
    }else{
        echo("Message sending failed...");
    }
?>