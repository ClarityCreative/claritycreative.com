<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'siteUrl' => 'http://claritycreative.com/',
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array()
    ),

    'local.clarity' => array(
        // 'devMode' => true,
        'siteUrl' => 'http://local.clarity/',
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array()
    ),

     'staging.claritycreative.com' => array(
        // 'devMode' => true,
        'siteUrl' => 'http://staging.claritycreative.com/',
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array()
    ),
);
