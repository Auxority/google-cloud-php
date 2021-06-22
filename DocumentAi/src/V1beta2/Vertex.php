<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta2/geometry.proto

namespace Google\Cloud\DocumentAI\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A vertex represents a 2D point in the image.
 * NOTE: the vertex coordinates are in the same scale as the original image.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta2.Vertex</code>
 */
class Vertex extends \Google\Protobuf\Internal\Message
{
    /**
     * X coordinate.
     *
     * Generated from protobuf field <code>int32 x = 1;</code>
     */
    private $x = 0;
    /**
     * Y coordinate.
     *
     * Generated from protobuf field <code>int32 y = 2;</code>
     */
    private $y = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $x
     *           X coordinate.
     *     @type int $y
     *           Y coordinate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta2\Geometry::initOnce();
        parent::__construct($data);
    }

    /**
     * X coordinate.
     *
     * Generated from protobuf field <code>int32 x = 1;</code>
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * X coordinate.
     *
     * Generated from protobuf field <code>int32 x = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setX($var)
    {
        GPBUtil::checkInt32($var);
        $this->x = $var;

        return $this;
    }

    /**
     * Y coordinate.
     *
     * Generated from protobuf field <code>int32 y = 2;</code>
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Y coordinate.
     *
     * Generated from protobuf field <code>int32 y = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setY($var)
    {
        GPBUtil::checkInt32($var);
        $this->y = $var;

        return $this;
    }

}

