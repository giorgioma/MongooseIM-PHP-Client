<?php
/**
 * ContactsApi
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
 * ContactsApi Class Doc Comment
 *
 * @category Class
 * @package  MongooseIM\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactsApi
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
     * @return ContactsApi
     */
    public function setApiClient(\MongooseIM\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation contactsContactDelete
     *
     * 
     *
     * @param string $contact  (required)
     * @return void
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function contactsContactDelete($contact)
    {
        list($response) = $this->contactsContactDeleteWithHttpInfo($contact);
        return $response;
    }

    /**
     * Operation contactsContactDeleteWithHttpInfo
     *
     * 
     *
     * @param string $contact  (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function contactsContactDeleteWithHttpInfo($contact)
    {
        // verify the required parameter 'contact' is set
        if ($contact === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact when calling contactsContactDelete');
        }
        // parse inputs
        $resourcePath = "/contacts/{contact}";
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
        if ($contact !== null) {
            $resourcePath = str_replace(
                "{" . "contact" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact),
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
                '/contacts/{contact}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation contactsContactPut
     *
     * 
     *
     * @param string $contact  (required)
     * @param string $action  (required)
     * @return void
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function contactsContactPut($contact, $action)
    {
        list($response) = $this->contactsContactPutWithHttpInfo($contact, $action);
        return $response;
    }

    /**
     * Operation contactsContactPutWithHttpInfo
     *
     * 
     *
     * @param string $contact  (required)
     * @param string $action  (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function contactsContactPutWithHttpInfo($contact, $action)
    {
        // verify the required parameter 'contact' is set
        if ($contact === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact when calling contactsContactPut');
        }
        // verify the required parameter 'action' is set
        if ($action === null) {
            throw new \InvalidArgumentException('Missing the required parameter $action when calling contactsContactPut');
        }
        // parse inputs
        $resourcePath = "/contacts/{contact}";
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
        if ($contact !== null) {
            $resourcePath = str_replace(
                "{" . "contact" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($action)) {
            $_tempBody = $action;
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
                null,
                '/contacts/{contact}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation contactsDelete
     *
     * 
     *
     * @param \MongooseIM\Client\Models\Contacts $contacts  (optional)
     * @return \MongooseIM\Client\Models\InlineResponse200
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function contactsDelete($contacts = null)
    {
        list($response) = $this->contactsDeleteWithHttpInfo($contacts);
        return $response;
    }

    /**
     * Operation contactsDeleteWithHttpInfo
     *
     * 
     *
     * @param \MongooseIM\Client\Models\Contacts $contacts  (optional)
     * @return Array of \MongooseIM\Client\Models\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function contactsDeleteWithHttpInfo($contacts = null)
    {
        // parse inputs
        $resourcePath = "/contacts";
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
        if (isset($contacts)) {
            $_tempBody = $contacts;
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MongooseIM\Client\Models\InlineResponse200',
                '/contacts'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MongooseIM\Client\Models\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MongooseIM\Client\Models\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contactsGet
     *
     * 
     *
     * @return \MongooseIM\Client\Models\ContactDetails[]
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function contactsGet()
    {
        list($response) = $this->contactsGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation contactsGetWithHttpInfo
     *
     * 
     *
     * @return Array of \MongooseIM\Client\Models\ContactDetails[], HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function contactsGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/contacts";
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
                '\MongooseIM\Client\Models\ContactDetails[]',
                '/contacts'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\MongooseIM\Client\Models\ContactDetails[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MongooseIM\Client\Models\ContactDetails[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contactsPost
     *
     * 
     *
     * @param \MongooseIM\Client\Models\Contact $contact  (required)
     * @return void
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function contactsPost($contact)
    {
        list($response) = $this->contactsPostWithHttpInfo($contact);
        return $response;
    }

    /**
     * Operation contactsPostWithHttpInfo
     *
     * 
     *
     * @param \MongooseIM\Client\Models\Contact $contact  (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \MongooseIM\Client\ApiException on non-2xx response
     */
    public function contactsPostWithHttpInfo($contact)
    {
        // verify the required parameter 'contact' is set
        if ($contact === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact when calling contactsPost');
        }
        // parse inputs
        $resourcePath = "/contacts";
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
        if (isset($contact)) {
            $_tempBody = $contact;
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
                '/contacts'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}
