# SayWhenTimeSlotCaps\AppointmentApi

All URIs are relative to *https://link.saywhen.nl/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registerAppointment**](AppointmentApi.md#registerAppointment) | **POST** /nachon/time-slot-caps/register-appointment | Register Appointment


# **registerAppointment**
> \SayWhenTimeSlotCaps\Model\ApiResponse registerAppointment($body)

Register Appointment

Register Appointment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
SayWhenTimeSlotCaps\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SayWhenTimeSlotCaps\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new SayWhenTimeSlotCaps\Api\AppointmentApi();
$body = new \SayWhenTimeSlotCaps\Model\RegisterAppointmentPostModel(); // \SayWhenTimeSlotCaps\Model\RegisterAppointmentPostModel | RegisterAppointmentPostModel

try {
    $result = $api_instance->registerAppointment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->registerAppointment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SayWhenTimeSlotCaps\Model\RegisterAppointmentPostModel**](../Model/RegisterAppointmentPostModel.md)| RegisterAppointmentPostModel |

### Return type

[**\SayWhenTimeSlotCaps\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

