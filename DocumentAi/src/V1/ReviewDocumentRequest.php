<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for review document method.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ReviewDocumentRequest</code>
 */
class ReviewDocumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the HumanReviewConfig that the document will be
     * reviewed with.
     *
     * Generated from protobuf field <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $human_review_config = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\Document $inline_document
     *           An inline document proto.
     *     @type string $human_review_config
     *           Required. The resource name of the HumanReviewConfig that the document will be
     *           reviewed with.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * An inline document proto.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     * @return \Google\Cloud\DocumentAI\V1\Document|null
     */
    public function getInlineDocument()
    {
        return $this->readOneof(4);
    }

    public function hasInlineDocument()
    {
        return $this->hasOneof(4);
    }

    /**
     * An inline document proto.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     * @param \Google\Cloud\DocumentAI\V1\Document $var
     * @return $this
     */
    public function setInlineDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\Document::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Required. The resource name of the HumanReviewConfig that the document will be
     * reviewed with.
     *
     * Generated from protobuf field <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getHumanReviewConfig()
    {
        return $this->human_review_config;
    }

    /**
     * Required. The resource name of the HumanReviewConfig that the document will be
     * reviewed with.
     *
     * Generated from protobuf field <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setHumanReviewConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->human_review_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

