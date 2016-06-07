<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
      'preserveImageColorProfiles' => true,
    ),

    '.dev' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'baseUrl'  => 'http://readbuzz.dev/prod/',
        )
    ),

    '.us' => array(
      'allowAutoUpdates' => false,
      'environmentVariables' => array(
          'baseUrl'  => 'http://readingbuzz.us/prod/',
      )
    )
);
