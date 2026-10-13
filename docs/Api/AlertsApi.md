# AgentCat\Api\AlertsApi

All URIs are relative to https://api.agentcat.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**unsubscribeAlertGet()**](AlertsApi.md#unsubscribeAlertGet) | **GET** /v1/public/alerts/unsubscribe | Show the confirmation page for removing an email address from one alert rule |
| [**unsubscribeAlertPost()**](AlertsApi.md#unsubscribeAlertPost) | **POST** /v1/public/alerts/unsubscribe | Remove an email address from one alert rule (List-Unsubscribe-Post and the confirmation form) |


## `unsubscribeAlertGet()`

```php
unsubscribeAlertGet($token): string
```

Show the confirmation page for removing an email address from one alert rule

GET, the link in the email, shows a confirmation page and changes nothing, because mail scanners fetch links. POST removes the address from the rule; the page's form and the List-Unsubscribe-Post header both send it. POST is idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AgentCat\Api\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->unsubscribeAlertGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->unsubscribeAlertGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`, `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unsubscribeAlertPost()`

```php
unsubscribeAlertPost($token): string
```

Remove an email address from one alert rule (List-Unsubscribe-Post and the confirmation form)

GET, the link in the email, shows a confirmation page and changes nothing, because mail scanners fetch links. POST removes the address from the rule; the page's form and the List-Unsubscribe-Post header both send it. POST is idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AgentCat\Api\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->unsubscribeAlertPost($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->unsubscribeAlertPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
