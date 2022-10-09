<?php
        $my_height = 150;

        function assessHeight($height_in_cm) {
            if ($height_in_cm > 180) {
                return 'tall';
            } elseif ($height_in_cm >= 160 && $height_in_cm <= 180) {
                return 'average';
            } else {
                return 'small';
            }
        }
    
        echo assessHeight($my_height);
        echo "<hr>";
        //---------------------------------------------------------Switch-------------------------------------------------------------
        function getLanguageUsage($programming_language) {
            $programming_language = strtolower($programming_language);
            switch($programming_language) {
                case 'php';
                case 'python';
                case 'ruby';
                    echo 'serverside';
                    break;
                case 'javascript';
                    echo 'clientside';
                    break; 
                default;
                    echo "I don't know";
            }
        }
    
    getLanguageUsage('PyThon');
    echo "<hr>";
    //---------------------------------------------------------While Loop--------------------------------------------------------------
    $time_served = 0;
    while ($time_served < 10) {
        echo 'The prisoner has served: ' . $time_served . "<br>";
        $time_served++;
    }
    
    echo "<hr>";
    //---------------------------------------------------------Do...While Loop---------------------------------------------------------
    $time_served = 0;
    do{
        echo 'The prisoner has served: ' . $time_served . "<br>";
        $time_served++;
    }
    while ($time_served < 10);
    
    echo "<hr>";
    //---------------------------------------------------------For Loop----------------------------------------------------------------
    for($time_served = 1; $time_served < 6; $time_served++) {
        echo 'The prisoner has served: ' . $time_served . "<br>";
    }
    
    echo "<hr>";
?>
