<?php

namespace App\Service\Gemotest;

use App\Service\Gemotest\GemotestClientClassmap;
use App\Service\Gemotest\GemotestClientClient;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class GemotestClientClientFactory
{
    public static function factory(string $wsdl) : \App\Service\Gemotest\GemotestClientClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(GemotestClientClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);
        return new GemotestClientClient($caller);
    }
}

