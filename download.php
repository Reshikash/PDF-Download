<?php

    $file = $_GET['file'] . ".pdf";

    header("content-disposition: attachment; filename=" . urlencode($file));

    $fb = fopen($file, "r");

    while(!feof($fb)){
        echo fread($fb, 2651);
        flush();
    }

    fclose($fb);

?>