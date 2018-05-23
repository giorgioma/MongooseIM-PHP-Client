# MongooseIM\Client\ServerSentEventsApi

All URIs are relative to *http://localhost:8089/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sseGet**](ServerSentEventsApi.md#sseGet) | **GET** /sse | WARNING: Do not try to use this endpoint from this page. Swagger does not understand SSE.


# **sseGet**
> sseGet()

WARNING: Do not try to use this endpoint from this page. Swagger does not understand SSE.

Opens an SSE (https://www.html5rocks.com/en/tutorials/eventsource/basics/) connection to retrieve updates from the server. The simplest way to test this endpoint is a `curl` command.  We recommend the following libraries to consume the events: * iOS - https://github.com/inaka/EventSource * Erlang/Elixir - https://github.com/inaka/shotgun  Currently there are two different types of events the server can send to the client: * message - regular one-to-one message     ```JSON     {\"to\":\"alice@wonderland.lit\",      \"timestamp\":1477550892082343,      \"id\":\"36891c7f-cd3d-4e90-9295-5f450d66ae09\",      \"from\":\"rabbit@wonderland.lit\",      \"body\":\"Test message over SSE\"}      ``` * room.message - this type cover 2 different kinds of messages from room:    * messages - a message sent from participant to the room      ```JSON      {\"type\":\"message\",       \"timestamp\":1483609513435964,       \"room\":\"1483-609513-293487\",       \"id\":\"9746c6d5-e014-4391-b559-b5581ee8e43b\",       \"from\":\"alice@wonderland.lit\",       \"body\":\"Hi all!\"}      ```    * notifications - an event sent by the room when a new participant subscribes or leaves the room      ```JSON      {\"user\":\"rabbit@wonderland.lit\",       \"type\":\"affiliation\",       \"timestamp\":1483609513429864,       \"room\":\"1483-609513-295321\",       \"id\":\"e3e110a6-44ae-45ab-97e3-7ace25f52e53\",       \"from\":\"1483-609513-295321@muclight.wonderland.lit\",       \"affiliation\":\"member\"}      ``` For more details please refer to the [rooms API specifications](#/Rooms)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: mongoose_basic_auth
MongooseIM\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
MongooseIM\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new MongooseIM\Client\Api\ServerSentEventsApi();

try {
    $api_instance->sseGet();
} catch (Exception $e) {
    echo 'Exception when calling ServerSentEventsApi->sseGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[mongoose_basic_auth](../../README.md#mongoose_basic_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/event-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

