<?php
function head($page)
{

    require "app/env.php";

    if (!empty($env_page[$page])) {
        $title = $env_page[$page]["title"];
    } else {
        $title = $env_page[0]["title"];
    }


    echo '<!doctype html> <html lang="' . $env_lang . '"> <head>';
    meta();
    echo '<title>' . $title . '</title>';
    echo '<link href="' . $env_logo . '" rel="shortcut icon">';
    extension($page);
    echo '</head>';

}

function meta()
{
    require "app/env.php";
    require $SYSTEM_COMPOSANT."/meta.phtml";

}

function extension()
{
    require "app/env.php";

    /* GENERATE EXENTION*/

    $files_exention = scandir($SYSTEM_EXTENSION);

    foreach ($files_exention as $oneFileExention) {

        var_dump($oneFileExention);

        if ($oneFileExention !== "." && $oneFileExention !== ".." && substr($oneFile, -6) === ".phtml"){



        }

    }

    /* GENERATE CSS*/
    $files_css = scandir($SYSTEM_CSS);


    foreach ($files_css as $oneFileCss) {


        var_dump($oneFileCss);








//<link rel="stylesheet" type="text/css" media="screen" href="css/all.css">
//<link rel="stylesheet" type="text/css" media="screen" href="css/index.css">


    }



}