<?php 

try {

    include __DIR__ . './includes/connection/DatabaseConnect.php';
    include __DIR__ . './includes/connection/DatabaseFunctions.php';

    
    include __DIR__ . './includes/templates/teacher_schedule.html.php';
    
} catch (PDOException $e) {
    include __DIR__ . './includes/connection/displayError.php';
}

include __DIR__ . './includes/templates/layout.html.php';

function convertTime($time) {

    if($time % 100 == 0) {  //if it has no 30 minute time
        $time = $time/100;
        $stringTime;

        if($time > 12)   //if it is an afternoon class
            $stringTime = ($time - 12) . ':00';
        else
            $stringTime = $time . ':00';

        return $stringTime;
        
    } else { //if it has a 30 minute or 45 minute time

        $stringTime;

        if($time % 50 == 0) {    //it is a 30 minute
            $time = $time/100;

            $time = $time - 0.5;
            if($time > 12)
                $stringTime = ($time - 12) . ':30';
            else
                $stringTime = $time . ':30';
            
        } else {    //if it is a 45 minute
            $time = $time/100;
            $time = $time - 0.75;
            
            if($time > 12)
                $stringTime = ($time - 12) . ':45';
            else
                $stringTime = $time . ':45';
        }
        
        return $stringTime;
    }
}
?>

