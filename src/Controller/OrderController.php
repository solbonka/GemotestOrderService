<?php

namespace App\Controller;

use App\Service\Gemotest\GemotestClient;
use App\Service\Gemotest\GemotestClientClient;
use App\Service\Gemotest\Type\AdditionalInformation;
use App\Service\Gemotest\Type\AdditionalTests;
use App\Service\Gemotest\Type\Informing;
use App\Service\Gemotest\Type\Order;
use App\Service\Gemotest\Type\Patient;
use App\Service\Gemotest\Type\Representative;
use App\Service\Gemotest\Type\ResponseCreateOrder;
use App\Service\Gemotest\Type\Services;
use App\Service\Gemotest\Type\ServicesSupplementals;
use DateTime;
use SoapClient;
use SoapFault;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function VeeWee\Xml\Encoding\xml_encode;

class OrderController extends AbstractController
{
    public function __construct(private GemotestClient $client)
    {
    }


    #[Route('/cancel-order', name: 'app_cancel-order')]
    public function testCancel(Request $request){
        $params = json_decode($request->getContent());
            //
            //

        $salt = 'b4f6d7d2fe94123c03c86412a0b649494017463f';
        $hash = sha1("$params->ext_num$params->order_num$params->contractor$salt");
        $order = new Order($params->ext_num, $params->order_num, $params->contractor, $hash);
        $response = $this->client->cancelOrder($order);

        return new Response(json_encode($response->toArray()));
    }
    #[Route('/create-order', name: 'app_create-order')]
    public function create(Request $request): Response
    {
        $params = json_decode($request->getContent());
        $patient = new Patient();
        $patient->setSurname($params->patient->surname);
        $patient->setFirstname($params->patient->firstname ?? '');
        $patient->setMiddlename($params->patient->middlename ?? '');
        $patient->setBirthdate($params->patient->birthdate);
        $patient->setGender($params->patient->gender ?? '');

// $representative = new Representative();
// $representative = $representative->withSurname('Тестовая')
//     ->withFirstname('Представительница')
//     ->withMiddlename('Пациентовна');
//
// $informing = new Informing();
// $informing = $informing->withEmail('test@pochta.ru')
//     ->withMobile_phone('79998887766')
//     ->withHome_phone('74991112233');
//
// $additionalInformation = new AdditionalInformation();
// $additionalInformation = $additionalInformation->withPregnant_week(2)
//     ->withCycle_day(0)
//     ->withRegion('Ставропольский край')
//     ->withCity('Невинномысск')
//     ->withAddress('ул. Мира д.1 кв. 5')
//     ->withPassport('0715 123654')
//     ->withPassport_issued(date_create_from_format('Y-m-d', '2000-01-01'))
//     ->withSnils('123-654-987 45')
//     ->withOms('26514125468751')
//     ->withDms('ДМС/54-25')
//     ->withDmc_companyname('ингосстрах');
//
// $additionalTests = new AdditionalTests();
// $additionalTests = $additionalTests->withId('MIC_chuv');
//
// $service = new Services();
// $services[] = $service->withId('NM_Candida&amp;Candida')
//     ->withBiomaterial_id('Mazok')
//     ->withLocalization_id('L_drugoe')
//     ->withTransport_id('00025');
//
// $servicesSupplementals = new ServicesSupplementals();
// $servicesSupplementals = $servicesSupplementals->withId('Tarif2')
//     ->withName('Взятие биоматериала (мазок)')
//     ->withValue('Мазок');
//
        $salt = 'b4f6d7d2fe94123c03c86412a0b649494017463f';
        $hash = sha1("$params->ext_num$params->order_num$params->contractor{$params->patient->surname}{$params->patient->birthdate}$salt");
        $order = new Order($params->ext_num, $params->order_num, $params->contractor, $hash);
        $order->addService($params->service);
        $order->setPatient($patient);
        $order->setComment($params->comment);
        $response = $this->client->createOrder($order);
        return new Response(json_encode($response->toArray()));
    }
}
