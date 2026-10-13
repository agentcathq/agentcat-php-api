# AgentCat\Api\EventsApi

All URIs are relative to https://api.agentcat.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**publishEvent()**](EventsApi.md#publishEvent) | **POST** /v1/public/events/ | Publish analytics event |


## `publishEvent()`

```php
publishEvent($publish_event_request): \AgentCat\Api\Model\EventAcceptedResponse
```

Publish analytics event

Submit analytics events for a project. Returns immediately with 202 Accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = AgentCat\Api\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = AgentCat\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new AgentCat\Api\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$publish_event_request = new \AgentCat\Api\Model\PublishEventRequest(); // \AgentCat\Api\Model\PublishEventRequest

try {
    $result = $apiInstance->publishEvent($publish_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->publishEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **publish_event_request** | [**\AgentCat\Api\Model\PublishEventRequest**](../Model/PublishEventRequest.md)|  | [optional] |

### Return type

[**\AgentCat\Api\Model\EventAcceptedResponse**](../Model/EventAcceptedResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
