<?php

namespace App\Service\Gemotest;

use App\Service\Gemotest\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class GemotestClientClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('order', Type\Order::class),
            new ClassMap('patient', Type\Patient::class),
            new ClassMap('representative', Type\Representative::class),
            new ClassMap('informing', Type\Informing::class),
            new ClassMap('additional_information', Type\AdditionalInformation::class),
            new ClassMap('services', Type\Services::class),
            new ClassMap('additional_tests', Type\AdditionalTests::class),
            new ClassMap('order_sample', Type\OrderSample::class),
            new ClassMap('order_sample_aliquot', Type\OrderSampleAliquot::class),
            new ClassMap('order_sample_service', Type\OrderSampleService::class),
            new ClassMap('services_supplementals', Type\ServicesSupplementals::class),
            new ClassMap('response_create_order', Type\ResponseCreateOrder::class),
            new ClassMap('error_description', Type\ErrorDescription::class),
            new ClassMap('barcode', Type\Barcode::class),
            new ClassMap('order_request', Type\OrderRequest::class),
            new ClassMap('response_status_request', Type\ResponseStatusRequest::class),
            new ClassMap('cancel_order', Type\CancelOrder::class),
            new ClassMap('response_cancel_order', Type\ResponseCancelOrder::class),
            new ClassMap('service', Type\Service::class),
            new ClassMap('response_get_directory', Type\ResponseGetDirectory::class),
            new ClassMap('request_get_analysis_result', Type\RequestGetAnalysisResult::class),
            new ClassMap('response_get_analysis_result', Type\ResponseGetAnalysisResult::class),
            new ClassMap('results_cl', Type\ResultsCl::class),
            new ClassMap('results_mb', Type\ResultsMb::class),
            new ClassMap('service_mb', Type\ServiceMb::class),
            new ClassMap('microbe', Type\Microbe::class),
            new ClassMap('antibiotic', Type\Antibiotic::class),
            new ClassMap('attachments', Type\Attachments::class),
            new ClassMap('response_get_biomaterials', Type\ResponseGetBiomaterials::class),
            new ClassMap('response_get_transport', Type\ResponseGetTransport::class),
            new ClassMap('sample_processing_rule', Type\SampleProcessingRule::class),
            new ClassMap('sample_v2', Type\SampleV2::class),
            new ClassMap('service_parameter_v2', Type\ServiceParameterV2::class),
            new ClassMap('response_get_localization', Type\ResponseGetLocalization::class),
            new ClassMap('response_get_service_group', Type\ResponseGetServiceGroup::class),
            new ClassMap('response_get_service_parameters', Type\ResponseGetServiceParameters::class),
            new ClassMap('request_get_marketing_complex_composition', Type\RequestGetMarketingComplexComposition::class),
            new ClassMap('response_get_marketing_complex_composition', Type\ResponseGetMarketingComplexComposition::class),
            new ClassMap('complex_service', Type\ComplexService::class),
            new ClassMap('request_get_services_supplementals', Type\RequestGetServicesSupplementals::class),
            new ClassMap('response_get_services_supplementals', Type\ResponseGetServicesSupplementals::class),
            new ClassMap('supplemental', Type\Supplemental::class),
            new ClassMap('contingent', Type\Contingent::class),
            new ClassMap('response_service_auto_insert', Type\ResponseServiceAutoInsert::class),
            new ClassMap('response_service_auto_insert_item', Type\ResponseServiceAutoInsertItem::class),
            new ClassMap('get_services_all_interlocks', Type\GetServicesAllInterlocks::class),
            new ClassMap('get_services_group_analogs', Type\GetServicesGroupAnalogs::class),
            new ClassMap('request_get_order_numbers', Type\RequestGetOrderNumbers::class),
            new ClassMap('response_get_order_numbers', Type\ResponseGetOrderNumbers::class),
            new ClassMap('request_get_orders_results', Type\RequestGetOrdersResults::class),
            new ClassMap('response_get_orders_results', Type\ResponseGetOrdersResults::class),
            new ClassMap('order_result', Type\OrderResult::class),
            new ClassMap('request_get_sample_identifiers', Type\RequestGetSampleIdentifiers::class),
            new ClassMap('sample_identifiers_range', Type\SampleIdentifiersRange::class),
            new ClassMap('request_get_order_status', Type\RequestGetOrderStatus::class),
            new ClassMap('response_get_order_status', Type\ResponseGetOrderStatus::class),
            new ClassMap('order_status', Type\OrderStatus::class),
            new ClassMap('response_get_tests', Type\ResponseGetTests::class),
            new ClassMap('response_get_test', Type\ResponseGetTest::class),
        );
    }
}

