# SayWhenTimeSlotCaps\FilterApi

All URIs are relative to *https://link.saywhen.nl/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filterTimeSlotCaps**](FilterApi.md#filterTimeSlotCaps) | **POST** /time-slot-caps/filter | Filter TimeSlots for Caps


# **filterTimeSlotCaps**
> \SayWhenTimeSlotCaps\Model\ApiResponse filterTimeSlotCaps($body)

Filter TimeSlots for Caps

Filter TimeSlots for Caps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenTimeSlotCaps\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenTimeSlotCaps\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenTimeSlotCaps\Api\FilterApi();
$body = new \SayWhenTimeSlotCaps\Model\CapsFilterPostModel(); // \SayWhenTimeSlotCaps\Model\CapsFilterPostModel | CapsFilterPostModel

try {
    $result = $api_instance->filterTimeSlotCaps($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->filterTimeSlotCaps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SayWhenTimeSlotCaps\Model\CapsFilterPostModel**](../Model/CapsFilterPostModel.md)| CapsFilterPostModel |

### Return type

[**\SayWhenTimeSlotCaps\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

