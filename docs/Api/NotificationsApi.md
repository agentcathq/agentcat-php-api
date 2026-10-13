# AgentCat\Api\NotificationsApi

All URIs are relative to https://api.agentcat.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**unsubscribeNotification()**](NotificationsApi.md#unsubscribeNotification) | **POST** /v1/public/notifications/unsubscribe | Disable an email notification type for the token&#39;s user |
| [**verifyEmailChannel()**](NotificationsApi.md#verifyEmailChannel) | **POST** /v1/public/notifications/channels/verify | Activate an email channel from its verification link |


## `unsubscribeNotification()`

```php
unsubscribeNotification($token, $unsubscribe_request_request): string
```

Disable an email notification type for the token's user

Anonymous endpoint reached from email unsubscribe links and the List-Unsubscribe header POST. The token encodes the user and the notification type to disable. Response bodies are plain text.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AgentCat\Api\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | Signed unsubscribe token. May also be passed in the request body.
$unsubscribe_request_request = new \AgentCat\Api\Model\UnsubscribeRequestRequest(); // \AgentCat\Api\Model\UnsubscribeRequestRequest

try {
    $result = $apiInstance->unsubscribeNotification($token, $unsubscribe_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->unsubscribeNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| Signed unsubscribe token. May also be passed in the request body. | [optional] |
| **unsubscribe_request_request** | [**\AgentCat\Api\Model\UnsubscribeRequestRequest**](../Model/UnsubscribeRequestRequest.md)|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyEmailChannel()`

```php
verifyEmailChannel($token, $email_channel_verify_request): \AgentCat\Api\Model\EmailChannelVerifyResponse
```

Activate an email channel from its verification link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AgentCat\Api\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string
$email_channel_verify_request = new \AgentCat\Api\Model\EmailChannelVerifyRequest(); // \AgentCat\Api\Model\EmailChannelVerifyRequest

try {
    $result = $apiInstance->verifyEmailChannel($token, $email_channel_verify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->verifyEmailChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | [optional] |
| **email_channel_verify_request** | [**\AgentCat\Api\Model\EmailChannelVerifyRequest**](../Model/EmailChannelVerifyRequest.md)|  | [optional] |

### Return type

[**\AgentCat\Api\Model\EmailChannelVerifyResponse**](../Model/EmailChannelVerifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
