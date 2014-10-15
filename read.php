<?php
    $json=file_get_contents('./data.json');
    print $json;
    $json=file_get_contents('./write.php');
    print $json;
    print "Hello World from read.php";
?>
