<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta3/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for list processors.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta3.ListProcessorsResponse</code>
 */
class ListProcessorsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of processors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Processor processors = 1;</code>
     */
    private $processors;
    /**
     * Points to the next processor, otherwise empty.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1beta3\Processor[]|\Google\Protobuf\Internal\RepeatedField $processors
     *           The list of processors.
     *     @type string $next_page_token
     *           Points to the next processor, otherwise empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta3\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of processors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Processor processors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProcessors()
    {
        return $this->processors;
    }

    /**
     * The list of processors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1beta3.Processor processors = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1beta3\Processor[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProcessors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1beta3\Processor::class);
        $this->processors = $arr;

        return $this;
    }

    /**
     * Points to the next processor, otherwise empty.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Points to the next processor, otherwise empty.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

