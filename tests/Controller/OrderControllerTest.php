<?php

namespace App\Tests\Controller;

use Helmich\JsonAssert\JsonAssertions;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OrderControllerTest extends WebTestCase
{
    use JsonAssertions;

    public function testCreate(): void
    {
        $client = static::createClient();
        $client->request('GET', '/create-order', [], [], array('CONTENT_TYPE' => 'application/json'), '{
            "ext_num": "my-order-13",
            "order_num": "",
            "contractor": "10003",
            "comment": "донесет справки завтра",
            "patient": {
                "surname": "Тестовый",
                "firstname": "Пациент",
                "birthdate": "2015-01-01",
                "gender": 0
            },
            "services": [
                {
                    "id": "NM_Candida&Candida",
                    "biomaterial_id": "Mazok",
                    "localization_id": "L_drugoe",
                    "transport_id": "00025"
                }
            ]
        }');
        $this->assertResponseIsSuccessful();
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJson('{
            "ext_num": "my-order-13",
            "order_num": "124362148",
            "contractor": "10003",
            "hash": "f7e6d356eb796adb8ad228a8a4c0a77636c279e8",
            "comment": "донесет справки завтра",
            "order_status": 0,
            "patient": {
                "id": "36115746",
                "surname": "Тестовый",
                "firstname": "Пациент",
                "middlename": "",
                "birthdate": "2015-01-01",
                "gender": 0,
                "anonymous": false
            },
            "services": [
                {
                    "id": "NM_Candida&Candida",
                    "biomaterial_id": "Mazok",
                    "localization_id": "L_drugoe",
                    "transport_id": "00025"
                }
            ]
        }');
    }

    public function testCancel(): void
    {
        $client = static::createClient();
        $client->request('GET', '/cancel-order', [], [], array('CONTENT_TYPE' => 'application/json'), '{    
            "ext_num": "my-order-1",
            "order_num": "124309404",
            "contractor": "10003"
        }');
        $this->assertResponseIsSuccessful();
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJson('{
        "ext_num":"my-order-1",
        "order_num":"124309404",
        "contractor":"10003",
        "hash":"7425c7a1905de9a29a5820d2a824a588aaab0320",
        "order_status":9
        }');
    }

    public function testUpdate(): void
    {
        $client = static::createClient();
        $client->request('GET', '/create-order', [], [], array('CONTENT_TYPE' => 'application/json'), '{
            "ext_num": "my-order-13",
            "order_num": "",
            "contractor": "10003",
            "comment": "донесет справки через 3 дня",
            "patient": {
                "surname": "Тестовый",
                "firstname": "Пациент",
                "birthdate": "2015-01-01",
                "gender": 0
            },
            "services": [
                {
                    "id": "NM_Candida&Candida",
                    "biomaterial_id": "Mazok",
                    "localization_id": "L_drugoe",
                    "transport_id": "00025"
                }
            ]
        }');
        $this->assertResponseIsSuccessful();
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJson('{
            "ext_num": "my-order-13",
            "order_num": "124362148",
            "contractor": "10003",
            "hash": "f7e6d356eb796adb8ad228a8a4c0a77636c279e8",
            "comment": "донесет справки через 3 дня",
            "order_status": 0,
            "patient": {
                "id": "36115746",
                "surname": "Тестовый",
                "firstname": "Пациент",
                "middlename": "",
                "birthdate": "2015-01-01",
                "gender": 0,
                "anonymous": false
            },
            "services": [
                {
                    "id": "NM_Candida&Candida",
                    "biomaterial_id": "Mazok",
                    "localization_id": "L_drugoe",
                    "transport_id": "00025"
                }
            ]
        }');
    }
}