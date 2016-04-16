<?php
/**
 * Created by PhpStorm.
 * User: webster
 * Date: 04-08-16
 * Time: 12:54 AM
 */

require __DIR__.'/vendor/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'Ae4wMzL6fGdgLMa-xgGrIqlYLyGFezCylW9jkRsSAmPyHgJcDr2Lr7kUfO7z98FupG9CQrjkHRESSmUA',     // ClientID
        'EOwvnfdqulegNki5o6rAaGpW2U1ySC7PqugdghP2ciuF45h7IowWtrjJwPOYOn8B3rcoMapuHKMIXL5T'      // ClientSecret
    )
);

$apiContext->setConfig(
    [
        'log.LogEnabled' => true,
        'log.FileName' => 'PayPal.log',
        'log.LogLevel' => 'FINE'
    ]
);

$creditCard = new \PayPal\Api\CreditCard();

$creditCard->setType('visa')
    ->setNumber("4417119669820331")
    ->setExpireMonth("11")
    ->setExpireYear("2019")
    ->setCvv2("012")
    ->setFirstName("Joe")
    ->setLastName("Shopper");

try {
    $creditCard->create($apiContext);
    echo $creditCard;
} catch (\PayPal\Exception\PayPalConnectionException $ex){
    echo $ex->getData();
}
