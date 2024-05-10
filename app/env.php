<?php

/*************************
 *
 *     SYSTEME VARIABLE
 *
 ************************/

//prod OR dev
$APP_ENV = "prod";

// Link Variable
$SYSTEM_FRAMEWORK = ".tyrositeframework/";
$SYSTEM_EXTENSION = "file_extension/";
$SYSTEM_CSS = "file_css/";
$SYSTEM_JAVASCRIPT = "file_javascript/";
$SYSTEM_ASSETS = "file_assets/";
$SYSTEM_COMPOSANT = "composant/";

// DataBase
$DATABASE = "app/database." . $APP_ENV . ".php";


/*************************
 *
 *     INIT VARIABLE
 *
 ************************/

//Variable GLOBAL
$env_name = "TyroExemple";
$env_logo = $SYSTEM_ASSETS . "logo.png";
$env_url = "https://tyroexemple.fr"; /* for <meta> */
$env_desc = "My First Site"; /* for <meta> */
$env_lang = "fr"; /* for <html lang=""> */

// PAGE MANAGEMENT
$env_page = array(
    //404
    0 => "404 | " . $env_name,
    //Page
    1 => array(
        "title" => "Home | " . $env_name,
        "name" => "Home",
        "url" => "./",
    ),
    /*...*/
);

/*************************
 *
 *     YOUR VARIABLE
 *
 ************************/

$env_titre = "HelloWorld";