<?php

$files = scandir($SYSTEM_COMPOSANT);

foreach ($files as $oneFile) {

    if ($oneFile !== "." && $oneFile !== ".." && $oneFile !== "meta.phtml" && substr($oneFile, -6) === ".phtml"){

        $functionName = "cp_" . substr($oneFile, 0, -6);

        $$functionName = function() use ($functionName, $SYSTEM_COMPOSANT, $oneFile) {
            require $SYSTEM_COMPOSANT . $oneFile;
        };

    }

}


/*GENERATE JS*/

//$files = scandir($SYSTEM_COMPOSANT);
//
//foreach ($files as $oneFile) {
//
//    if ($oneFile !== "." && $oneFile !== ".." && substr($oneFile, -6) === ".phtml"){
//
//        $functionName = "cp_" . substr($oneFile, 0, -6);
//
//        $$functionName = function() use ($functionName, $SYSTEM_COMPOSANT, $oneFile) {
//            require $SYSTEM_COMPOSANT . $oneFile;
//        };
//
//    }
//
//}
