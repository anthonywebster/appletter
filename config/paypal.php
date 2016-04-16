<?php
/**
 * Created by PhpStorm.
 * User: webster
 * Date: 04-08-16
 * Time: 01:31 AM
 */

return [
    // set your paypal credential
    'client_id' => 'Ae4wMzL6fGdgLMa-xgGrIqlYLyGFezCylW9jkRsSAmPyHgJcDr2Lr7kUfO7z98FupG9CQrjkHRESSmUA',
    'secret' => 'EOwvnfdqulegNki5o6rAaGpW2U1ySC7PqugdghP2ciuF45h7IowWtrjJwPOYOn8B3rcoMapuHKMIXL5T',

    /**
     * SDK Configuration
     */

    'settings' => [
        /**
         * Available option 'sanBox' or 'live'
         */

        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */

        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */

        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ]
];