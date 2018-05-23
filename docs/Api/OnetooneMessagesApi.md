# MongooseIM\Client\OnetooneMessagesApi

All URIs are relative to *http://localhost:8089/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messagesGet**](OnetooneMessagesApi.md#messagesGet) | **GET** /messages | 
[**messagesPost**](OnetooneMessagesApi.md#messagesPost) | **POST** /messages | 
[**messagesWithGet**](OnetooneMessagesApi.md#messagesWithGet) | **GET** /messages/{with} | 


# **messagesGet**
> \MongooseIM\Client\Models\RecvMessage[] messagesGet($limit, $before)



Returns all recent messages sent to and received from other users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\OnetooneMessagesApi();
$limit = 56; // int | Specifies the maximum number of messages to be returned. Default value is 50.
$before = 789; // int | The timestamp in milliseconds. If set, only messages before this date will be returned.

try {
    $result = $api_instance->messagesGet($limit, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnetooneMessagesApi->messagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Specifies the maximum number of messages to be returned. Default value is 50. | [optional]
 **before** | **int**| The timestamp in milliseconds. If set, only messages before this date will be returned. | [optional]

### Return type

[**\MongooseIM\Client\Models\RecvMessage[]**](../Model/RecvMessage.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messagesPost**
> \MongooseIM\Client\Models\ResourceID messagesPost($message)



Sends a message to a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\OnetooneMessagesApi();
$message = new \MongooseIM\Client\Models\SendMessage(); // \MongooseIM\Client\Models\SendMessage | The message to be sent.

try {
    $result = $api_instance->messagesPost($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnetooneMessagesApi->messagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\MongooseIM\Client\Models\SendMessage**](../Model/\MongooseIM\Client\Models\SendMessage.md)| The message to be sent. |

### Return type

[**\MongooseIM\Client\Models\ResourceID**](../Model/ResourceID.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messagesWithGet**
> \MongooseIM\Client\Models\RecvMessage[] messagesWithGet($with, $limit, $before)



Returns all recent messages sent to and received from a specific user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\OnetooneMessagesApi();
$with = "with_example"; // string | JID of the user with whom the messages were exchanged. Example: **alice@wonderland.com**.
$limit = 56; // int | Specifies the maximum number of messages to be returned. Default value is 50.
$before = 789; // int | The timestamp in milliseconds. If set, only messages before this date will be returned.

try {
    $result = $api_instance->messagesWithGet($with, $limit, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnetooneMessagesApi->messagesWithGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with** | **string**| JID of the user with whom the messages were exchanged. Example: **alice@wonderland.com**. |
 **limit** | **int**| Specifies the maximum number of messages to be returned. Default value is 50. | [optional]
 **before** | **int**| The timestamp in milliseconds. If set, only messages before this date will be returned. | [optional]

### Return type

[**\MongooseIM\Client\Models\RecvMessage[]**](../Model/RecvMessage.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

