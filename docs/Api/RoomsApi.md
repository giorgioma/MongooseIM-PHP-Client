# MongooseIM\Client\RoomsApi

All URIs are relative to *http://localhost:8089/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**roomsGet**](RoomsApi.md#roomsGet) | **GET** /rooms | 
[**roomsIdGet**](RoomsApi.md#roomsIdGet) | **GET** /rooms/{id} | 
[**roomsIdMessagesGet**](RoomsApi.md#roomsIdMessagesGet) | **GET** /rooms/{id}/messages | 
[**roomsIdMessagesPost**](RoomsApi.md#roomsIdMessagesPost) | **POST** /rooms/{id}/messages | 
[**roomsIdPut**](RoomsApi.md#roomsIdPut) | **PUT** /rooms/{id} | 
[**roomsIdUsersPost**](RoomsApi.md#roomsIdUsersPost) | **POST** /rooms/{id}/users | 
[**roomsIdUsersUserDelete**](RoomsApi.md#roomsIdUsersUserDelete) | **DELETE** /rooms/{id}/users/{user} | 
[**roomsPost**](RoomsApi.md#roomsPost) | **POST** /rooms | 


# **roomsGet**
> \MongooseIM\Client\Models\RoomShortDetails[] roomsGet()



Returns a list of rooms to which the user has subscribed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\RoomsApi();

try {
    $result = $api_instance->roomsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->roomsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MongooseIM\Client\Models\RoomShortDetails[]**](../Model/RoomShortDetails.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roomsIdGet**
> \MongooseIM\Client\Models\RoomDetails roomsIdGet($id)



Returns room's details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\RoomsApi();
$id = "id_example"; // string | The ID of a room

try {
    $result = $api_instance->roomsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->roomsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of a room |

### Return type

[**\MongooseIM\Client\Models\RoomDetails**](../Model/RoomDetails.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roomsIdMessagesGet**
> \MongooseIM\Client\Models\RecvRoomMessage roomsIdMessagesGet($id, $limit, $before)



Gets room's messages from the archive.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\RoomsApi();
$id = "id_example"; // string | The ID of a room
$limit = 56; // int | Specifies the maximum number of messages to be returned. Default value is 50.
$before = 789; // int | The timestamp in milliseconds. If set, only messages before this date will be returned.

try {
    $result = $api_instance->roomsIdMessagesGet($id, $limit, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->roomsIdMessagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of a room |
 **limit** | **int**| Specifies the maximum number of messages to be returned. Default value is 50. | [optional]
 **before** | **int**| The timestamp in milliseconds. If set, only messages before this date will be returned. | [optional]

### Return type

[**\MongooseIM\Client\Models\RecvRoomMessage**](../Model/RecvRoomMessage.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roomsIdMessagesPost**
> \MongooseIM\Client\Models\ResourceID roomsIdMessagesPost($id, $message)



Send a message to a room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\RoomsApi();
$id = "id_example"; // string | The ID of a room
$message = new \MongooseIM\Client\Models\SendRoomMessage(); // \MongooseIM\Client\Models\SendRoomMessage | 

try {
    $result = $api_instance->roomsIdMessagesPost($id, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->roomsIdMessagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of a room |
 **message** | [**\MongooseIM\Client\Models\SendRoomMessage**](../Model/\MongooseIM\Client\Models\SendRoomMessage.md)|  |

### Return type

[**\MongooseIM\Client\Models\ResourceID**](../Model/ResourceID.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roomsIdPut**
> \MongooseIM\Client\Models\ResourceID roomsIdPut($id, $room)



Creates a room with the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\RoomsApi();
$id = "id_example"; // string | The ID of a room
$room = new \MongooseIM\Client\Models\CreateRoomBody(); // \MongooseIM\Client\Models\CreateRoomBody | 

try {
    $result = $api_instance->roomsIdPut($id, $room);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->roomsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of a room |
 **room** | [**\MongooseIM\Client\Models\CreateRoomBody**](../Model/\MongooseIM\Client\Models\CreateRoomBody.md)|  |

### Return type

[**\MongooseIM\Client\Models\ResourceID**](../Model/ResourceID.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roomsIdUsersPost**
> roomsIdUsersPost($id, $participant)



Adds a user to a room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\RoomsApi();
$id = "id_example"; // string | The ID of a room
$participant = new \MongooseIM\Client\Models\Invitee(); // \MongooseIM\Client\Models\Invitee | 

try {
    $api_instance->roomsIdUsersPost($id, $participant);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->roomsIdUsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of a room |
 **participant** | [**\MongooseIM\Client\Models\Invitee**](../Model/\MongooseIM\Client\Models\Invitee.md)|  |

### Return type

void (empty response body)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roomsIdUsersUserDelete**
> roomsIdUsersUserDelete($id, $user)



Removes a user from the room. The owner can remove any user. The occupant can also use this method, but can only remove themself.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\RoomsApi();
$id = "id_example"; // string | The ID of a room
$user = "user_example"; // string | The JID (ex: alice@wonderalnd.com) of user to remove

try {
    $api_instance->roomsIdUsersUserDelete($id, $user);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->roomsIdUsersUserDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of a room |
 **user** | **string**| The JID (ex: alice@wonderalnd.com) of user to remove |

### Return type

void (empty response body)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **roomsPost**
> \MongooseIM\Client\Models\ResourceID roomsPost($room)



Creates a room.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\RoomsApi();
$room = new \MongooseIM\Client\Models\CreateRoomBody(); // \MongooseIM\Client\Models\CreateRoomBody | 

try {
    $result = $api_instance->roomsPost($room);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->roomsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **room** | [**\MongooseIM\Client\Models\CreateRoomBody**](../Model/\MongooseIM\Client\Models\CreateRoomBody.md)|  |

### Return type

[**\MongooseIM\Client\Models\ResourceID**](../Model/ResourceID.md)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

