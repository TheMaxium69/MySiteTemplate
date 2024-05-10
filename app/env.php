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

// Data
$DATABASE = "app/database." . $APP_ENV . ".php";
$SALT = "app/salt." . $APP_ENV . ".php";


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
        "title" => "Accueil | " . $env_name,
        "name" => "Accueil",
        "url" => "./",
        "css" => "index",
    ),
    /*...*/
);

/*************************
 *
 *     YOUR VARIABLE
 *
 ************************/

$env_titre = "HelloWorld";