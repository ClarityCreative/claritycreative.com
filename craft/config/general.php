<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'environmentVariables' => array(
            'baseUrl'  => 'http://claritycreative.com/',
        )
    ),

    'local.clarity' => array(
        // 'devMode' => true,
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array(
            'baseUrl'  => 'http://local.clarity/',
            'localdev' => 'true',
        )
    ),
);
