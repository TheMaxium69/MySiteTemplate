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

function extension($page_id)
{
    require "app/env.php";

    /* GENERATE EXENTION*/

    $files_exention = scandir($SYSTEM_EXTENSION);

    foreach ($files_exention as $oneFileExention) {


        if ($oneFileExention !== "." && $oneFileExention !== ".." && substr($oneFileExention, -6) === ".phtml"){

            require $SYSTEM_EXTENSION . $oneFileExention;

        }

    }

    /* GENERATE CSS*/
    $files_css = scandir($SYSTEM_CSS);

    foreach ($files_css as $oneFileCss) {

        if ($oneFileCss !== "." && $oneFileCss !== ".." && $oneFileCss !== "all.css" && substr($oneFileCss, -4) === ".css"){


            foreach ($env_css_global as $oneAllFileGlobalCSS){
                echo '<link rel="stylesheet" type="text/css" media="screen" href="'. $SYSTEM_CSS . $oneAllFileGlobalCSS .'">';

            }


            if ($oneFileCss === $env_page[$page_id]['css']){
                echo '<link rel="stylesheet" type="text/css" media="screen" href="'. $SYSTEM_CSS . $oneFileCss .'">';
            }


        }

    }

}