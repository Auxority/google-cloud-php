<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the request passed to DeleteAgentPool.
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.DeleteAgentPoolRequest</code>
 */
class DeleteAgentPoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the agent pool to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the agent pool to delete.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\Transfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the agent pool to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the agent pool to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

