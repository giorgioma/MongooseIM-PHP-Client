<?php
/**
 * RoomsApi
 * PHP version 5
 *
 * @category Class
 * @package  MongooseIM\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MongooseIM's client REST API
 *
 * Explore MongooseIM features using our REST API.  Please keep in mind that: * All users are represented by **bare JIDs** (Jabber Identifiers such as **alice@wonderland.com**).  This is to ensure integration between the **REST API** users and regular **XMPP** users. * All requests requiring a room ID (i.e. most of the requests fired at `/room` endpoint) accept either  a bare room ID (e.g. `656c6f656c6f`) or a room JID (e.g. `656c6f656c6f@muclight.somedomain.com`).  The host part of the room JID must be the host name of a MUC light service running in user's domain. * All requests require authentication. This is to make sure the server can identify who sent the request and if it comes from an authorized user. Currently the only supported method is **Basic Auth**.
 *
 * OpenAPI spec version: 0.1.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MongooseIM\Client\Api;

use \MongooseIM\Client\Configuration;
use \MongooseIM\Client\ApiClient;
use \MongooseIM\Client\ApiException;
use \MongooseIM\Client\ObjectSerializer;

/**
 * RoomsApi Class Doc Comment
 *
 * @category Class
 * @package  MongooseIM\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoomsApi
{

    /**
     * API Client
     *
     * @var \MongooseIM\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \MongooseIM\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\MongooseIM\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://localhost:8089/api');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \MongooseIM\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \MongooseIM\Client\ApiClient $apiClient set the API client
     *
     * @return RoomsApi
     */
    public function setApiClient(\MongooseIM\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation roomsGet
     *
     * 
     *
     * @return \MongooseIM\Client\Models\RoomShortDetails[]
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsGet()
    {
        list($response) = $this->roomsGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation roomsGetWithHttpInfo
     *
     * 
     *
     * @return Array of \MongooseIM\Client\Models\RoomShortDetails[], HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/rooms";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MongooseIM\Client\Models\RoomShortDetails[]',
                '/rooms'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MongooseIM\Client\Models\RoomShortDetails[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MongooseIM\Client\Models\RoomShortDetails[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation roomsIdGet
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @return \MongooseIM\Client\Models\RoomDetails
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdGet($id)
    {
        list($response) = $this->roomsIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation roomsIdGetWithHttpInfo
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @return Array of \MongooseIM\Client\Models\RoomDetails, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling roomsIdGet');
        }
        // parse inputs
        $resourcePath = "/rooms/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MongooseIM\Client\Models\RoomDetails',
                '/rooms/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MongooseIM\Client\Models\RoomDetails', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MongooseIM\Client\Models\RoomDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation roomsIdMessagesGet
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @param int $limit Specifies the maximum number of messages to be returned. Default value is 50. (optional)
     * @param int $before The timestamp in milliseconds. If set, only messages before this date will be returned. (optional)
     * @return \MongooseIM\Client\Models\RecvRoomMessage
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdMessagesGet($id, $limit = null, $before = null)
    {
        list($response) = $this->roomsIdMessagesGetWithHttpInfo($id, $limit, $before);
        return $response;
    }

    /**
     * Operation roomsIdMessagesGetWithHttpInfo
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @param int $limit Specifies the maximum number of messages to be returned. Default value is 50. (optional)
     * @param int $before The timestamp in milliseconds. If set, only messages before this date will be returned. (optional)
     * @return Array of \MongooseIM\Client\Models\RecvRoomMessage, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdMessagesGetWithHttpInfo($id, $limit = null, $before = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling roomsIdMessagesGet');
        }
        // parse inputs
        $resourcePath = "/rooms/{id}/messages";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($before !== null) {
            $queryParams['before'] = $this->apiClient->getSerializer()->toQueryValue($before);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MongooseIM\Client\Models\RecvRoomMessage',
                '/rooms/{id}/messages'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MongooseIM\Client\Models\RecvRoomMessage', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MongooseIM\Client\Models\RecvRoomMessage', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation roomsIdMessagesPost
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @param \MongooseIM\Client\Models\SendRoomMessage $message  (required)
     * @return \MongooseIM\Client\Models\ResourceID
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdMessagesPost($id, $message)
    {
        list($response) = $this->roomsIdMessagesPostWithHttpInfo($id, $message);
        return $response;
    }

    /**
     * Operation roomsIdMessagesPostWithHttpInfo
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @param \MongooseIM\Client\Models\SendRoomMessage $message  (required)
     * @return Array of \MongooseIM\Client\Models\ResourceID, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdMessagesPostWithHttpInfo($id, $message)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling roomsIdMessagesPost');
        }
        // verify the required parameter 'message' is set
        if ($message === null) {
            throw new \InvalidArgumentException('Missing the required parameter $message when calling roomsIdMessagesPost');
        }
        // parse inputs
        $resourcePath = "/rooms/{id}/messages";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($message)) {
            $_tempBody = $message;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MongooseIM\Client\Models\ResourceID',
                '/rooms/{id}/messages'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MongooseIM\Client\Models\ResourceID', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MongooseIM\Client\Models\ResourceID', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation roomsIdPut
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @param \MongooseIM\Client\Models\CreateRoomBody $room  (required)
     * @return \MongooseIM\Client\Models\ResourceID
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdPut($id, $room)
    {
        list($response) = $this->roomsIdPutWithHttpInfo($id, $room);
        return $response;
    }

    /**
     * Operation roomsIdPutWithHttpInfo
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @param \MongooseIM\Client\Models\CreateRoomBody $room  (required)
     * @return Array of \MongooseIM\Client\Models\ResourceID, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdPutWithHttpInfo($id, $room)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling roomsIdPut');
        }
        // verify the required parameter 'room' is set
        if ($room === null) {
            throw new \InvalidArgumentException('Missing the required parameter $room when calling roomsIdPut');
        }
        // parse inputs
        $resourcePath = "/rooms/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($room)) {
            $_tempBody = $room;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MongooseIM\Client\Models\ResourceID',
                '/rooms/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MongooseIM\Client\Models\ResourceID', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MongooseIM\Client\Models\ResourceID', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation roomsIdUsersPost
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @param \MongooseIM\Client\Models\Invitee $participant  (required)
     * @return void
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdUsersPost($id, $participant)
    {
        list($response) = $this->roomsIdUsersPostWithHttpInfo($id, $participant);
        return $response;
    }

    /**
     * Operation roomsIdUsersPostWithHttpInfo
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @param \MongooseIM\Client\Models\Invitee $participant  (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdUsersPostWithHttpInfo($id, $participant)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling roomsIdUsersPost');
        }
        // verify the required parameter 'participant' is set
        if ($participant === null) {
            throw new \InvalidArgumentException('Missing the required parameter $participant when calling roomsIdUsersPost');
        }
        // parse inputs
        $resourcePath = "/rooms/{id}/users";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($participant)) {
            $_tempBody = $participant;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/rooms/{id}/users'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation roomsIdUsersUserDelete
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @param string $user The JID (ex: alice@wonderalnd.com) of user to remove (required)
     * @return void
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdUsersUserDelete($id, $user)
    {
        list($response) = $this->roomsIdUsersUserDeleteWithHttpInfo($id, $user);
        return $response;
    }

    /**
     * Operation roomsIdUsersUserDeleteWithHttpInfo
     *
     * 
     *
     * @param string $id The ID of a room (required)
     * @param string $user The JID (ex: alice@wonderalnd.com) of user to remove (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsIdUsersUserDeleteWithHttpInfo($id, $user)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling roomsIdUsersUserDelete');
        }
        // verify the required parameter 'user' is set
        if ($user === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling roomsIdUsersUserDelete');
        }
        // parse inputs
        $resourcePath = "/rooms/{id}/users/{user}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($user !== null) {
            $resourcePath = str_replace(
                "{" . "user" . "}",
                $this->apiClient->getSerializer()->toPathValue($user),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/rooms/{id}/users/{user}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation roomsPost
     *
     * 
     *
     * @param \MongooseIM\Client\Models\CreateRoomBody $room  (required)
     * @return \MongooseIM\Client\Models\ResourceID
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsPost($room)
    {
        list($response) = $this->roomsPostWithHttpInfo($room);
        return $response;
    }

    /**
     * Operation roomsPostWithHttpInfo
     *
     * 
     *
     * @param \MongooseIM\Client\Models\CreateRoomBody $room  (required)
     * @return Array of \MongooseIM\Client\Models\ResourceID, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function roomsPostWithHttpInfo($room)
    {
        // verify the required parameter 'room' is set
        if ($room === null) {
            throw new \InvalidArgumentException('Missing the required parameter $room when calling roomsPost');
        }
        // parse inputs
        $resourcePath = "/rooms";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($room)) {
            $_tempBody = $room;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MongooseIM\Client\Models\ResourceID',
                '/rooms'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MongooseIM\Client\Models\ResourceID', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MongooseIM\Client\Models\ResourceID', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
