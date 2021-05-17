<?php
    $json_txt = file_get_contents("structure_without_courses.json");
    $json_txt = utf8_encode($json_txt);
    $result = json_decode($json_txt, true);
    echo "<br><br><br>";
    foreach($result['cicles'] as $cicle) {
        echo $cicle;
    }
?>