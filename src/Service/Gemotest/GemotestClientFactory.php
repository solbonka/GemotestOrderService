<?php

namespace App\Service\Gemotest;

use SoapClient;
use SoapFault;

class GemotestClientFactory
{
    /**
     * @throws SoapFault
     */
    public static function factory(string $wsdl, string $login, string $password, string $salt): GemotestClient
    {
        $options    = [
            'soap_version' => SOAP_1_1,
            'exceptions' => true,
            'trace' => 1,
            'cache_wsdl' => WSDL_CACHE_NONE,
            'login' => $login,
            'password' => $password,
            'use' => SOAP_LITERAL,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS
        ];

        $client = new SoapClient($wsdl, $options);

        return new GemotestClient($client, $salt);
    }
}