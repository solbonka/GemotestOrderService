<?php

namespace App\Service\Gemotest;

use Phpro\SoapClient\Caller\Caller;
use App\Service\Gemotest\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\MultiArgumentRequest;

class GemotestClientClient
{
    /**
     * @var Caller
     */
    private Caller $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|Type\Order $params
     * @return ResultInterface|Type\ResponseCreateOrder
     * @throws SoapException
     */
    public function create_order(\App\Service\Gemotest\Type\Order $params) : \App\Service\Gemotest\Type\ResponseCreateOrder
    {
        return ($this->caller)('create_order', $params);
    }

    /**
     * @param RequestInterface|Type\OrderRequest $params
     * @return ResultInterface|Type\ResponseStatusRequest
     * @throws SoapException
     */
    public function status_request(\App\Service\Gemotest\Type\OrderRequest $params) : \App\Service\Gemotest\Type\ResponseStatusRequest
    {
        return ($this->caller)('status_request', $params);
    }

    /**
     * @param RequestInterface|Type\CancelOrder $params
     * @return ResultInterface|Type\ResponseCancelOrder
     * @throws SoapException
     */
    public function cancel_order(\App\Service\Gemotest\Type\CancelOrder $params) : \App\Service\Gemotest\Type\ResponseCancelOrder
    {
        return ($this->caller)('cancel_order', $params);
    }

    /**
     * @param RequestInterface|Type\Service $params
     * @return ResultInterface|Type\ResponseGetDirectory
     * @throws SoapException
     */
    public function get_directory(\App\Service\Gemotest\Type\Service $params) : \App\Service\Gemotest\Type\ResponseGetDirectory
    {
        return ($this->caller)('get_directory', $params);
    }

    /**
     * @param RequestInterface|Type\RequestGetAnalysisResult $params
     * @return ResultInterface|Type\ResponseGetAnalysisResult
     * @throws SoapException
     */
    public function get_analysis_result(\App\Service\Gemotest\Type\RequestGetAnalysisResult $params) : \App\Service\Gemotest\Type\ResponseGetAnalysisResult
    {
        return ($this->caller)('get_analysis_result', $params);
    }

    /**
     * @return ResultInterface|Type\ResponseGetBiomaterials
     * @throws SoapException
     */
    public function get_biomaterials() : \App\Service\Gemotest\Type\ResponseGetBiomaterials
    {
        return ($this->caller)('get_biomaterials', new MultiArgumentRequest([]));
    }

    /**
     * @return ResultInterface|Type\ResponseGetTransport
     * @throws SoapException
     */
    public function get_transport() : \App\Service\Gemotest\Type\ResponseGetTransport
    {
        return ($this->caller)('get_transport', new MultiArgumentRequest([]));
    }

    /**
     * @return ResultInterface|Type\SampleProcessingRule
     * @throws SoapException
     */
    public function get_processing_rules() : \App\Service\Gemotest\Type\SampleProcessingRule
    {
        return ($this->caller)('get_processing_rules', new MultiArgumentRequest([]));
    }

    /**
     * @return ResultInterface|Type\SampleV2
     * @throws SoapException
     */
    public function get_samples() : \App\Service\Gemotest\Type\SampleV2
    {
        return ($this->caller)('get_samples', new MultiArgumentRequest([]));
    }

    /**
     * @return ResultInterface|Type\ServiceParameterV2
     * @throws SoapException
     */
    public function get_samples_services() : \App\Service\Gemotest\Type\ServiceParameterV2
    {
        return ($this->caller)('get_samples_services', new MultiArgumentRequest([]));
    }

    /**
     * @return ResultInterface|Type\ResponseGetLocalization
     * @throws SoapException
     */
    public function get_localization() : \App\Service\Gemotest\Type\ResponseGetLocalization
    {
        return ($this->caller)('get_localization', new MultiArgumentRequest([]));
    }

    /**
     * @return ResultInterface|Type\ResponseGetServiceGroup
     * @throws SoapException
     */
    public function get_service_group() : \App\Service\Gemotest\Type\ResponseGetServiceGroup
    {
        return ($this->caller)('get_service_group', new MultiArgumentRequest([]));
    }

    /**
     * @return ResultInterface|Type\ResponseGetServiceParameters
     * @throws SoapException
     */
    public function get_service_parameters() : \App\Service\Gemotest\Type\ResponseGetServiceParameters
    {
        return ($this->caller)('get_service_parameters', new MultiArgumentRequest([]));
    }

    /**
     * @param RequestInterface|Type\RequestGetMarketingComplexComposition $params
     * @return ResultInterface|Type\ResponseGetMarketingComplexComposition
     * @throws SoapException
     */
    public function get_marketing_complex_composition(\App\Service\Gemotest\Type\RequestGetMarketingComplexComposition $params) : \App\Service\Gemotest\Type\ResponseGetMarketingComplexComposition
    {
        return ($this->caller)('get_marketing_complex_composition', $params);
    }

    /**
     * @param RequestInterface|Type\RequestGetServicesSupplementals $params
     * @return ResultInterface|Type\ResponseGetServicesSupplementals
     * @throws SoapException
     */
    public function get_services_supplementals(\App\Service\Gemotest\Type\RequestGetServicesSupplementals $params) : \App\Service\Gemotest\Type\ResponseGetServicesSupplementals
    {
        return ($this->caller)('get_services_supplementals', $params);
    }

    /**
     * @return ResultInterface|Type\ResponseServiceAutoInsert
     * @throws SoapException
     */
    public function get_service_auto_insert() : \App\Service\Gemotest\Type\ResponseServiceAutoInsert
    {
        return ($this->caller)('get_service_auto_insert', new MultiArgumentRequest([]));
    }

    /**
     * @return ResultInterface|Type\GetServicesAllInterlocks
     * @throws SoapException
     */
    public function get_services_all_interlocks() : \App\Service\Gemotest\Type\GetServicesAllInterlocks
    {
        return ($this->caller)('get_services_all_interlocks', new MultiArgumentRequest([]));
    }

    /**
     * @return ResultInterface|Type\GetServicesGroupAnalogs
     * @throws SoapException
     */
    public function get_services_group_analogs() : \App\Service\Gemotest\Type\GetServicesGroupAnalogs
    {
        return ($this->caller)('get_services_group_analogs', new MultiArgumentRequest([]));
    }

    /**
     * @param RequestInterface|Type\RequestGetOrderNumbers $params
     * @return ResultInterface|Type\ResponseGetOrderNumbers
     * @throws SoapException
     */
    public function get_order_numbers(\App\Service\Gemotest\Type\RequestGetOrderNumbers $params) : \App\Service\Gemotest\Type\ResponseGetOrderNumbers
    {
        return ($this->caller)('get_order_numbers', $params);
    }

    /**
     * @param RequestInterface|Type\RequestGetOrdersResults $params
     * @return ResultInterface|Type\ResponseGetOrdersResults
     * @throws SoapException
     */
    public function get_orders_results(\App\Service\Gemotest\Type\RequestGetOrdersResults $params) : \App\Service\Gemotest\Type\ResponseGetOrdersResults
    {
        return ($this->caller)('get_orders_results', $params);
    }

    /**
     * @param RequestInterface|Type\RequestGetSampleIdentifiers $params
     * @return ResultInterface|Type\SampleIdentifiersRange
     * @throws SoapException
     */
    public function get_sample_identifiers(\App\Service\Gemotest\Type\RequestGetSampleIdentifiers $params) : \App\Service\Gemotest\Type\SampleIdentifiersRange
    {
        return ($this->caller)('get_sample_identifiers', $params);
    }

    /**
     * @param RequestInterface|Type\RequestGetOrderStatus $params
     * @return ResultInterface|Type\ResponseGetOrderStatus
     * @throws SoapException
     */
    public function get_order_status(\App\Service\Gemotest\Type\RequestGetOrderStatus $params) : \App\Service\Gemotest\Type\ResponseGetOrderStatus
    {
        return ($this->caller)('get_order_status', $params);
    }

    /**
     * @return ResultInterface|Type\ResponseGetTests
     * @throws SoapException
     */
    public function get_tests() : \App\Service\Gemotest\Type\ResponseGetTests
    {
        return ($this->caller)('get_tests', new MultiArgumentRequest([]));
    }
}

