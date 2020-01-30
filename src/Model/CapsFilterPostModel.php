<?php
/**
 * CapsFilterPostModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  SayWhenTimeSlotCaps
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SayWhen TimeSlot Caps for Nachon
 *
 * SayWhen TimeSlot Caps for Nachon API Documentation
 *
 * OpenAPI spec version: 1.1
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SayWhenTimeSlotCaps\Model;

use \ArrayAccess;

/**
 * CapsFilterPostModel Class Doc Comment
 *
 * @category    Class
 * @package     SayWhenTimeSlotCaps
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CapsFilterPostModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CapsFilterPostModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fop_id' => 'string',
        'time_slots' => 'string',
        'visit_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fop_id' => null,
        'time_slots' => null,
        'visit_type' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'fop_id' => 'fopId',
        'time_slots' => 'timeSlots',
        'visit_type' => 'visitType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'fop_id' => 'setFopId',
        'time_slots' => 'setTimeSlots',
        'visit_type' => 'setVisitType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'fop_id' => 'getFopId',
        'time_slots' => 'getTimeSlots',
        'visit_type' => 'getVisitType'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['fop_id'] = isset($data['fop_id']) ? $data['fop_id'] : null;
        $this->container['time_slots'] = isset($data['time_slots']) ? $data['time_slots'] : null;
        $this->container['visit_type'] = isset($data['visit_type']) ? $data['visit_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets fop_id
     * @return string
     */
    public function getFopId()
    {
        return $this->container['fop_id'];
    }

    /**
     * Sets fop_id
     * @param string $fop_id FrontOffice Partner ID
     * @return $this
     */
    public function setFopId($fop_id)
    {
        $this->container['fop_id'] = $fop_id;

        return $this;
    }

    /**
     * Gets time_slots
     * @return string
     */
    public function getTimeSlots()
    {
        return $this->container['time_slots'];
    }

    /**
     * Sets time_slots
     * @param string $time_slots Time Slots in JSON format
     * @return $this
     */
    public function setTimeSlots($time_slots)
    {
        $this->container['time_slots'] = $time_slots;

        return $this;
    }

    /**
     * Gets visit_type
     * @return string
     */
    public function getVisitType()
    {
        return $this->container['visit_type'];
    }

    /**
     * Sets visit_type
     * @param string $visit_type VisitType of the visit in question
     * @return $this
     */
    public function setVisitType($visit_type)
    {
        $this->container['visit_type'] = $visit_type;

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
            return json_encode(\SayWhenTimeSlotCaps\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SayWhenTimeSlotCaps\ObjectSerializer::sanitizeForSerialization($this));
    }
}


