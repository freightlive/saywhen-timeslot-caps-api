<?php
/**
 * FilterApi
 * PHP version 5
 *
 * @category Class
 * @package  SayWhenTimeSlotCaps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SayWhen TimeSlot Caps for Nachon
 *
 * SayWhen TimeSlot Caps for Nachon API Documentation
 *
 * OpenAPI spec version: 1.1
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SayWhenTimeSlotCaps\API;

use \SayWhenTimeSlotCaps\ApiClient;
use \SayWhenTimeSlotCaps\ApiException;
use \SayWhenTimeSlotCaps\Configuration;
use \SayWhenTimeSlotCaps\ObjectSerializer;

/**
 * FilterApi Class Doc Comment
 *
 * @category Class
 * @package  SayWhenTimeSlotCaps
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilterApi
{
    /**
     * API Client
     *
     * @var \SayWhenTimeSlotCaps\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SayWhenTimeSlotCaps\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SayWhenTimeSlotCaps\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SayWhenTimeSlotCaps\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SayWhenTimeSlotCaps\ApiClient $apiClient set the API client
     *
     * @return FilterApi
     */
    public function setApiClient(\SayWhenTimeSlotCaps\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation filterTimeSlotCaps
     *
     * Filter TimeSlots for Caps
     *
     * @param \SayWhenTimeSlotCaps\Model\CapsFilterPostModel $body CapsFilterPostModel (required)
     * @throws \SayWhenTimeSlotCaps\ApiException on non-2xx response
     * @return \SayWhenTimeSlotCaps\Model\ApiResponse
     */
    public function filterTimeSlotCaps($body)
    {
        list($response) = $this->filterTimeSlotCapsWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation filterTimeSlotCapsWithHttpInfo
     *
     * Filter TimeSlots for Caps
     *
     * @param \SayWhenTimeSlotCaps\Model\CapsFilterPostModel $body CapsFilterPostModel (required)
     * @throws \SayWhenTimeSlotCaps\ApiException on non-2xx response
     * @return array of \SayWhenTimeSlotCaps\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function filterTimeSlotCapsWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling filterTimeSlotCaps');
        }
        // parse inputs
        $resourcePath = "/nachon/time-slot-caps/filter";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SayWhenTimeSlotCaps\Model\ApiResponse',
                '/nachon/time-slot-caps/filter'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SayWhenTimeSlotCaps\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SayWhenTimeSlotCaps\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
