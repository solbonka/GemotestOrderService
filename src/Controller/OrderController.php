<?php

namespace App\Controller;

use App\Service\Gemotest\GemotestClient;
use App\Service\Gemotest\Type\Order;
use App\Service\Gemotest\Type\Patient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    public function __construct(private GemotestClient $client)
    {
    }

    #[Route('/cancel-order', name: 'app_cancel-order')]
    public function cancel(Request $request): Response
    {
        $params = json_decode($request->getContent());

        $order = new Order($params->ext_num, $params->order_num, $params->contractor);
        $response = $this->client->cancelOrder($order);

        return new Response(json_encode($response->toArray()));
    }

    #[Route('/create-order', name: 'app_create-order')]
    #[Route('/update-order', name: 'app_update-order')]
    public function create(Request $request): Response
    {
        $params = json_decode($request->getContent());

        $patient = new Patient();
        $patient->setSurname($params->patient->surname);
        $patient->setFirstname($params->patient->firstname ?? '');
        $patient->setMiddlename($params->patient->middlename ?? '');
        $patient->setBirthdate($params->patient->birthdate);
        $patient->setGender($params->patient->gender ?? '');

        $order = new Order($params->ext_num, $params->order_num, $params->contractor);
        foreach ($params->services as $service){
            $order->addService($service);
        }
        $order->setPatient($patient);
        $order->setComment($params->comment);
        $response = $this->client->createOrder($order);

        return new Response(json_encode($response->toArray()));
    }
}
