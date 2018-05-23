<?php
/**
 * ContactDetails
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
 * ContactDetails Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     MongooseIM\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContactDetails implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ContactDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'jid' => 'string',
        'subscription' => 'string',
        'ask' => 'string'
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
        'jid' => 'jid',
        'subscription' => 'subscription',
        'ask' => 'ask'
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
        'jid' => 'setJid',
        'subscription' => 'setSubscription',
        'ask' => 'setAsk'
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
        'jid' => 'getJid',
        'subscription' => 'getSubscription',
        'ask' => 'getAsk'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const SUBSCRIPTION_NONE = 'none';
    const SUBSCRIPTION_TO = 'to';
    const SUBSCRIPTION_FROM = 'from';
    const SUBSCRIPTION_BOTH = 'both';
    const ASK_NONE = 'none';
    const ASK_IN = 'in';
    const ASK_OUT = 'out';
    const ASK_BOTH = 'both';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSubscriptionAllowableValues()
    {
        return [
            self::SUBSCRIPTION_NONE,
            self::SUBSCRIPTION_TO,
            self::SUBSCRIPTION_FROM,
            self::SUBSCRIPTION_BOTH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAskAllowableValues()
    {
        return [
            self::ASK_NONE,
            self::ASK_IN,
            self::ASK_OUT,
            self::ASK_BOTH,
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
        $this->container['jid'] = isset($data['jid']) ? $data['jid'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['ask'] = isset($data['ask']) ? $data['ask'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("none", "to", "from", "both");
        if (!in_array($this->container['subscription'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'subscription', must be one of #{allowed_values}.";
        }

        $allowed_values = array("none", "in", "out", "both");
        if (!in_array($this->container['ask'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'ask', must be one of #{allowed_values}.";
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
        $allowed_values = array("none", "to", "from", "both");
        if (!in_array($this->container['subscription'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("none", "in", "out", "both");
        if (!in_array($this->container['ask'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets jid
     * @return string
     */
    public function getJid()
    {
        return $this->container['jid'];
    }

    /**
     * Sets jid
     * @param string $jid The message recipient's bare JID.
     * @return $this
     */
    public function setJid($jid)
    {
        $this->container['jid'] = $jid;

        return $this;
    }

    /**
     * Gets subscription
     * @return string
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     * @param string $subscription Subscription state of me vs contact; there are four possible state: * none * to - I receive updates about the contact's presence * from - the contact receives updates about my presence * both
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $allowed_values = array('none', 'to', 'from', 'both');
        if (!in_array($subscription, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'subscription', must be one of 'none', 'to', 'from', 'both'");
        }
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets ask
     * @return string
     */
    public function getAsk()
    {
        return $this->container['ask'];
    }

    /**
     * Sets ask
     * @param string $ask Tells whether one of us has asked the other for subscription to presence info and is waiting for approval. Possible states: * none * out - I asked the contact and am waiting for his approval * in - my contact asked me, it is up to me to decide * both
     * @return $this
     */
    public function setAsk($ask)
    {
        $allowed_values = array('none', 'in', 'out', 'both');
        if (!in_array($ask, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ask', must be one of 'none', 'in', 'out', 'both'");
        }
        $this->container['ask'] = $ask;

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


