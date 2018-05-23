# MongooseIM\Client\ContactsApi

All URIs are relative to *http://localhost:8089/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactsContactDelete**](ContactsApi.md#contactsContactDelete) | **DELETE** /contacts/{contact} | 
[**contactsContactPut**](ContactsApi.md#contactsContactPut) | **PUT** /contacts/{contact} | 
[**contactsDelete**](ContactsApi.md#contactsDelete) | **DELETE** /contacts | 
[**contactsGet**](ContactsApi.md#contactsGet) | **GET** /contacts | 
[**contactsPost**](ContactsApi.md#contactsPost) | **POST** /contacts | 


# **contactsContactDelete**
> contactsContactDelete($contact)



Removes contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\ContactsApi();
$contact = "contact_example"; // string | 

try {
    $api_instance->contactsContactDelete($contact);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsContactDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact** | **string**|  |

### Return type

void (empty response body)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsContactPut**
> contactsContactPut($contact, $action)



Manage subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\ContactsApi();
$contact = "contact_example"; // string | 
$action = "action_example"; // string | 

try {
    $api_instance->contactsContactPut($contact, $action);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsContactPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact** | **string**|  |
 **action** | **string**|  |

### Return type

void (empty response body)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsDelete**
> \MongooseIM\Client\Models\InlineResponse200 contactsDelete($contacts)



Removes a list of users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\ContactsApi();
$contacts = new \MongooseIM\Client\Models\Contacts(); // \MongooseIM\Client\Models\Contacts | 

try {
    $result = $api_instance->contactsDelete($contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contacts** | [**\MongooseIM\Client\Models\Contacts**](../Model/\MongooseIM\Client\Models\Contacts.md)|  | [optional]

### Return type

[**\MongooseIM\Client\Models\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsGet**
> \MongooseIM\Client\Models\ContactDetails[] contactsGet()



Returns all contacts from the user's roster

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\ContactsApi();

try {
    $result = $api_instance->contactsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MongooseIM\Client\Models\ContactDetails[]**](../Model/ContactDetails.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactsPost**
> contactsPost($contact)



Adds a user to a contact list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\ContactsApi();
$contact = new \MongooseIM\Client\Models\Contact(); // \MongooseIM\Client\Models\Contact | 

try {
    $api_instance->contactsPost($contact);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact** | [**\MongooseIM\Client\Models\Contact**](../Model/\MongooseIM\Client\Models\Contact.md)|  |

### Return type

void (empty response body)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

