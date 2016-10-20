<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

 		'*' => array(
        'tablePrefix' => 'craft',
    ),
    'local.clarity' => array(
        'server' => 'localhost',
        'user' => 'root',
        'password' => 'root',
        'database' => 'clarity',
    ),
    'claritycreative.com' => array(
        'server' => 'localhost',
        'user' => 'clarity',
        'password' => 'inthegrain',
        'database' => 'clarity_production',
    ),
    'staging.claritycreative.com' => array(
        'server' => 'localhost',
        'user' => 'clarity',
        'password' => 'inthegrain',
        'database' => 'clarity_staging',
    ),
	
);
