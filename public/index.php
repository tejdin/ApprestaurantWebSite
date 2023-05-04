<?php

session_start();
// Activez l'affichage des erreurs pour le développement
// Vous pouvez le désactiver en production
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Incluez les fichiers de configuration et de routage
require_once '../DBConfig/db.php';
require_once 'C:/xampp/htdocs/Projet/routes.php';


// Autoloader pour charger les classes
spl_autoload_register(function ($class_name) {
    $file = 'C:/xampp/htdocs/Projet/model' . str_replace('\\', '/', $class_name) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});


