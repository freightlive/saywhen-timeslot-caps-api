# 
SayWhen TimeSlot Caps for Nachon API Documentation

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/bumbal/saywhen-timeslot-caps-api.git"
    }
  ],
  "require": {
    "bumbal/saywhen-timeslot-caps-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://link.saywhen.nl/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppointmentApi* | [**registerAppointment**](docs/Api/AppointmentApi.md#registerappointment) | **POST** /nachon/time-slot-caps/register-appointment | Register Appointment
*FilterApi* | [**filterTimeSlotCaps**](docs/Api/FilterApi.md#filtertimeslotcaps) | **POST** /nachon/time-slot-caps/filter | Filter TimeSlots for Caps


## Documentation For Models

 - [ApiResponse](docs/Model/ApiResponse.md)
 - [CapsFilterPostModel](docs/Model/CapsFilterPostModel.md)
 - [RegisterAppointmentPostModel](docs/Model/RegisterAppointmentPostModel.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: ApiKey
- **Location**: HTTP header


## Author

gerb@bumbal.eu


