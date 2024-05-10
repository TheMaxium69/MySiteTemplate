<?php

$files = scandir($SYSTEM_COMPOSANT);

foreach ($files as $oneFile) {

    if ($oneFile !== "." && $oneFile !== ".." && $oneFile !== "meta.phtml" && substr($oneFile, -6) === ".phtml"){

        $functionName = "cp_" . substr($oneFile, 0, -6);

        $$functionName = function() use ($functionName, $oneFile, $page_id) {
            require "app/env.php";
            require $SYSTEM_COMPOSANT . $oneFile;
        };

    }

}


/*GENERATE JS*/


$filesJS = scandir($SYSTEM_JAVASCRIPT);

foreach ($filesJS as $oneFileJS) {

    if ($oneFileJS !== "." && $oneFileJS !== ".." && substr($oneFileJS, -3) === ".js"){

        $functionNameJS = "js_" . substr($oneFileJS, 0, -3);
        $$functionNameJS = function() use ($functionNameJS, $SYSTEM_JAVASCRIPT, $oneFileJS) {
            echo "<script src='" . $SYSTEM_JAVASCRIPT . $oneFileJS . "'></script>";
        };

    }

}