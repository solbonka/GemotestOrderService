<?php

namespace App\Controller;

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
use SoapClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{


    public function __construct(
        private GemotestClientClient $client
    ){
    }
    #[Route('/order', name: 'app_order')]
    public function index(): Response
    {
        return $this->render('order/index.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }
    #[Route('/createOrder', name: 'app_createOrder')]
    public function fetchGemotestInformation()
    {
        $patient = new Patient();
        $patient = $patient->withSurname('Тестовый')
            ->withFirstname('Пациент')
            ->withBirthdate(date_create_from_format('Y-m-d', '2015-01-01'))
            ->withGender(0);

        $representative = new Representative();
        $representative = $representative->withSurname('Тестовая')
            ->withFirstname('Представительница')
            ->withMiddlename('Пациентовна');

        $informing = new Informing();
        $informing = $informing->withEmail('test@pochta.ru')
            ->withMobile_phone('79998887766')
            ->withHome_phone('74991112233');

        $additionalInformation = new AdditionalInformation();
        $additionalInformation = $additionalInformation->withPregnant_week(2)
            ->withCycle_day(0)
            ->withRegion('Ставропольский край')
            ->withCity('Невинномысск')
            ->withAddress('ул. Мира д.1 кв. 5')
            ->withPassport('0715 123654')
            ->withPassport_issued(date_create_from_format('Y-m-d', '2015-01-01'))
            ->withSnils('123-654-987 45')
            ->withOms('26514125468751')
            ->withDms('ДМС/54-25')
            ->withDmc_companyname('ингосстрах');

        $additionalTests = new AdditionalTests();
        $additionalTests = $additionalTests->withId('MIC_chuv');

        $services = new Services();
        $services = $services->withId('NM_Candida&amp;Candida')
            ->withName('Посев на грибы р.Candida')
            ->withBiomaterial_id('Mazok')
            ->withOther_biomaterial('')
            ->withLocalization_id('L_drugoe')
            ->withOther_localization('из влагалища')
            ->withTransport_id('00025')
            ->withAdditional_tests($additionalTests);

        $servicesSupplementals = new ServicesSupplementals();
        $servicesSupplementals = $servicesSupplementals->withId('Tarif2')
            ->withName('Взятие биоматериала (мазок)')
            ->withValue('Мазок');
        $hash = sha1("my-order-124555Тестовый2015-01-014qawxxge9hbo6mxtrpfdw4u2t3kdtjrz");
        $order = new Order(
            'my-order-124',
            '',
            'mom',
            '1000',
            $hash,
            'донесет справки завтра',
            true,
            '',
            1,
            '',
            $patient,
            $representative,
            $informing,
            $additionalInformation,
            $services,
            '',
            $servicesSupplementals,
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
        );
        $newClient = new SoapClient("https://api.gemotest.ru/odoctor.wsdl", []);
        var_dump($order);
        $this->client->create_order($order);
        $response = new Response('test');
        return $response;
    }
}
