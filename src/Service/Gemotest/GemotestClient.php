<?php

namespace App\Service\Gemotest;

use App\Service\Gemotest\Type\Order;
use SoapClient;

class GemotestClient
{
    private SoapClient $client;
    public function __construct(SoapClient $client)
    {
        $this->client = $client;
    }
    public function createOrder(Order $order)
    {
        $response = $this->client->create_order($order->toArray());
        $order->setOrderNum($response->order->order_num);
        $order->setOrderStatus($response->order->order_status);
        $order->setHash('?');
        $order->getPatient()->setId($response->order->patient->id);
        $order->getPatient()->setAnonymous($response->order->patient->anonymous);
        return $order;
    }

    public function cancelOrder(Order $order)
    {
        $response = $this->client->cancel_order($order->toArray());
        $order->setHash('?');
        $order->setOrderStatus($response->cancel_order->order_status ?? 9);
        return $order;
    }
}