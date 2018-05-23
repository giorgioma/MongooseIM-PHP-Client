<?php
/**
 * RecvRoomMessage
 *
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

namespace MongooseIM\Client\Models;

use \ArrayAccess;

/**
 * RecvRoomMessage Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MongooseIM\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecvRoomMessage implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RecvRoomMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'type' => 'string',
        'from' => 'string',
        'id' => 'string',
        'timestamp' => 'int',
        'body' => 'string',
        'user' => 'string',
        'affiliation' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'type' => 'type',
        'from' => 'from',
        'id' => 'id',
        'timestamp' => 'timestamp',
        'body' => 'body',
        'user' => 'user',
        'affiliation' => 'affiliation'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'type' => 'setType',
        'from' => 'setFrom',
        'id' => 'setId',
        'timestamp' => 'setTimestamp',
        'body' => 'setBody',
        'user' => 'setUser',
        'affiliation' => 'setAffiliation'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'type' => 'getType',
        'from' => 'getFrom',
        'id' => 'getId',
        'timestamp' => 'getTimestamp',
        'body' => 'getBody',
        'user' => 'getUser',
        'affiliation' => 'getAffiliation'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_MESSAGE = 'message';
    const TYPE_AFFILIATION = 'affiliation';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MESSAGE,
            self::TYPE_AFFILIATION,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['affiliation'] = isset($data['affiliation']) ? $data['affiliation'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("message", "affiliation");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("message", "affiliation");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of a message, possible values are: \"message\" for regular message \"affiliation\" for affiliation changes.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('message', 'affiliation');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'message', 'affiliation'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets from
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     * @param string $from The JID of message sender. In case of a regular message sent by room's participant the JID will be a full JID with the sender's bare JID as a resource part of room's JID.
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The ID of a message.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets timestamp
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param int $timestamp Unix timestamp in miliseconds.
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     * @param string $body The message body. Present only if the type is \"message\".
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets user
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param string $user JID of a user, whom affiliation changed. Present only if the type is \"affiliation\".
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets affiliation
     * @return string
     */
    public function getAffiliation()
    {
        return $this->container['affiliation'];
    }

    /**
     * Sets affiliation
     * @param string $affiliation The new affiliation of a user in the room. Present only if the type is \"affiliation\".
     * @return $this
     */
    public function setAffiliation($affiliation)
    {
        $this->container['affiliation'] = $affiliation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\MongooseIM\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\MongooseIM\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

