<?php
/**
 * ParticipantTest
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
 * Please update the test case below to test the model.
 */

namespace MongooseIM\Client;

/**
 * ParticipantTest Class Doc Comment
 *
 * @category    Class */
// * @description Participant
/**
 * @package     MongooseIM\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ParticipantTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "Participant"
     */
    public function testParticipant()
    {

    }

    /**
     * Test attribute "user"
     */
    public function testPropertyUser()
    {

    }

    /**
     * Test attribute "role"
     */
    public function testPropertyRole()
    {

    }

}
