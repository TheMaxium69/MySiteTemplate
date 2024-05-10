<?php

/*************************
 *
 *     SYSTEME VARIABLE
 *
 ************************/

//prod OR dev
$APP_ENV = "prod";

// Link Variable
$SYSTEM_FRAMEWORK = "@tyrositeframework/";
$SYSTEM_COMPOSANT = "composant/";
$SYSTEM_EXTENSION = "file_extension/";
$SYSTEM_ASSETS = "file_assets/";
$SYSTEM_JAVASCRIPT = "file_javascript/";
$SYSTEM_CSS = "file_css/";

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
        "css" => "index.css",
    ),
    2 => array(
        "title" => "Exemple | " . $env_name,
        "name" => "Exemple",
        "url" => "./exemple.php",
        "css" => "exemple.css",
    ),
    /*...*/
);

// FILE CSS GLOBAL
$env_css_global = array(
    "all.css",
);

// FILE JS GLOBAL
$env_js_global = array(
    "start.js"
);

/*************************
 *
 *     YOUR VARIABLE
 *
 ************************/

$env_titre = "HelloWorld";