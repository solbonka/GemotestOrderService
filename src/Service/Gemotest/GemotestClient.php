<?php

namespace App\Service\Gemotest;

use App\Service\Gemotest\Type\Order;
use SoapClient;

class GemotestClient
{
    private SoapClient $client;
    private string $salt;

    public function __construct(SoapClient $client, string $salt)
    {
        $this->client = $client;
        $this->salt = $salt;
    }

    public function createOrder(Order $order)
    {
        $hash = sha1("{$order->getExtNum()}{$order->getOrderNum()}{$order->getContractor()}{$order->getPatient()->getSurname()}{$order->getPatient()->getBirthdate()}$this->salt");
        $order->setHash($hash);
        $response = $this->client->create_order($order->toArray());
        $order->setOrderNum($response->order->order_num);
        $order->setOrderStatus($response->order->order_status);
        $order->getPatient()->setId($response->order->patient->id);
        $order->getPatient()->setAnonymous($response->order->patient->anonymous);
        return $order;
    }

    public function cancelOrder(Order $order)
    {
        $hash = sha1("{$order->getExtNum()}{$order->getOrderNum()}{$order->getContractor()}$this->salt");
        $order->setHash($hash);
        $response = $this->client->cancel_order($order->toArray());
        $order->setOrderStatus($response->cancel_order->order_status ?? 9);
        return $order;
    }
}