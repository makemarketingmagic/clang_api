<?php

require('vendor/autoload.php');

use ClangApi\ClangAPI;
use ClangSdk\group_getAll;

// load up uuid's
$config = (is_file('config_local.php')) ? require 'config_local.php' : require 'config.php';

//if (is_file('config_local.php')) {
//    $config = require 'config_local.php';
//} else {
//    $config = require 'config.php';
//}

// Define your error listener
$errorListener = function (SoapFault $error, $request, $response) {
    echo "===================================>" . $error->getMessage() . "\n\n";
    echo $request . "\n\n";
    echo $response . "\n\n";
};

// Pass into ClangApi as an option
try {
    $api = new ClangAPI(['errorListener' => $errorListener]);
} catch (SoapFault $yourFault) {
    die("You passed in something silly, stop that!");
}

// Call some api with an invalid token, $errorListener should be called
$errorThrown = false;
try {
    $groupsResponse = $api->group_getAll(new group_getAll($config['invalidUuid']));
    $groups = $groupsResponse->getMsg()->getGroup();
    foreach ($groups as $group) {
        echo $group->getName() . "\n";
    }
} catch (SoapFault $exception) {
    echo "Error was thrown \n";
}