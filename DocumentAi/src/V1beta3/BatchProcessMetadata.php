<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta3/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The long running operation metadata for batch process method.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta3.BatchProcessMetadata</code>
 */
class BatchProcessMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The state of the current batch processing.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.BatchProcessMetadata.State state = 1;</code>
     */
    private $state = 0;
    /**
     * A message providing more details about the current state of processing.
     * For example, the error message if the operation is failed.
     *
     * Generated from protobuf field <code>string state_message = 2;</code>
     */
    private $state_message = '';
    /**
     * The creation time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     */
    private $create_time = null;
    /**
     * The last update time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     */
    private $update_time = null;
    /**
     * The list of response details of each document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.BatchProcessMetadata.IndividualProcessStatus individual_process_statuses = 5;</code>
     */
    private $individual_process_statuses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           The state of the current batch processing.
     *     @type string $state_message
     *           A message providing more details about the current state of processing.
     *           For example, the error message if the operation is failed.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The creation time of the operation.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The last update time of the operation.
     *     @type \Google\Cloud\DocumentAI\V1beta3\BatchProcessMetadata\IndividualProcessStatus[]|\Google\Protobuf\Internal\RepeatedField $individual_process_statuses
     *           The list of response details of each document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta3\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * The state of the current batch processing.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.BatchProcessMetadata.State state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state of the current batch processing.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1beta3.BatchProcessMetadata.State state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1beta3\BatchProcessMetadata\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * A message providing more details about the current state of processing.
     * For example, the error message if the operation is failed.
     *
     * Generated from protobuf field <code>string state_message = 2;</code>
     * @return string
     */
    public function getStateMessage()
    {
        return $this->state_message;
    }

    /**
     * A message providing more details about the current state of processing.
     * For example, the error message if the operation is failed.
     *
     * Generated from protobuf field <code>string state_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStateMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_message = $var;

        return $this;
    }

    /**
     * The creation time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The creation time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The last update time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * The last update time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The list of response details of each document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.BatchProcessMetadata.IndividualProcessStatus individual_process_statuses = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndividualProcessStatuses()
    {
        return $this->individual_process_statuses;
    }

    /**
     * The list of response details of each document.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.BatchProcessMetadata.IndividualProcessStatus individual_process_statuses = 5;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\BatchProcessMetadata\IndividualProcessStatus[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndividualProcessStatuses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\BatchProcessMetadata\IndividualProcessStatus::class);
        $this->individual_process_statuses = $arr;

        return $this;
    }

}

