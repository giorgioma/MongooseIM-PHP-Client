# RecvRoomMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of a message, possible values are: \&quot;message\&quot; for regular message \&quot;affiliation\&quot; for affiliation changes. | [optional] 
**from** | **string** | The JID of message sender. In case of a regular message sent by room&#39;s participant the JID will be a full JID with the sender&#39;s bare JID as a resource part of room&#39;s JID. | [optional] 
**id** | **string** | The ID of a message. | [optional] 
**timestamp** | **int** | Unix timestamp in miliseconds. | [optional] 
**body** | **string** | The message body. Present only if the type is \&quot;message\&quot;. | [optional] 
**user** | **string** | JID of a user, whom affiliation changed. Present only if the type is \&quot;affiliation\&quot;. | [optional] 
**affiliation** | **string** | The new affiliation of a user in the room. Present only if the type is \&quot;affiliation\&quot;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


