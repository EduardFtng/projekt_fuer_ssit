<?php

// Für debugging → true, Fehler werden auf der Webseite direkt angezeigt
ini_set( "disply_errors", true );
// Einstellungen für die Zeitzone:
date_default_timezone_set( "Europe/Berlin" ); 
// Hier wird Datenbank verbunden
// host=db kommt von docker-compose.yml, Zeile 13
/*
define( "DB_DSN", "psql:host=db;port=5432;dbname=blog" );
define( "DB_USERNAME", "postgres" );
define( "DB_PASSWORD", "123" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWoRD", "topsecret" );
*/
define( "TEMPLATE_PATH", "templates" );
define( "CLASS_PATH", "classes" );
require( CLASS_PATH . "/article.php" );


function handleException( $exception ) {
    echo "Sorry, etwas ist schief gelaufen. Probiere es später nochmal.";
    error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );

?>