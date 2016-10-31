<?php
/**
 * Created by PhpStorm.
 * User: webster
 * Date: 04-08-16
 * Time: 02:14 PM
 */

namespace App\Http\Controllers;


use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

class PaypalController extends Controller {

    private $_api_context;

    /**
     * PaypalController constructor.
     */
    public function __construct()
    {
        $paypal_conf = \Config::get('paypal');

        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'],$paypal_conf['secret']));

        $this->_api_context->setConfig($paypal_conf['settings']);
    }
}