<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for GlobalNetworkEndpointGroups.AttachNetworkEndpoints. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AttachNetworkEndpointsGlobalNetworkEndpointGroupRequest</code>
 */
class AttachNetworkEndpointsGlobalNetworkEndpointGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GlobalNetworkEndpointGroupsAttachEndpointsRequest global_network_endpoint_groups_attach_endpoints_request_resource = 30691563 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $global_network_endpoint_groups_attach_endpoints_request_resource = null;
    /**
     * The name of the network endpoint group where you are attaching network endpoints to. It should comply with RFC1035.
     *
     * Generated from protobuf field <code>string network_endpoint_group = 165471622 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $network_endpoint_group = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\GlobalNetworkEndpointGroupsAttachEndpointsRequest $global_network_endpoint_groups_attach_endpoints_request_resource
     *           The body resource for this request
     *     @type string $network_endpoint_group
     *           The name of the network endpoint group where you are attaching network endpoints to. It should comply with RFC1035.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     *           For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GlobalNetworkEndpointGroupsAttachEndpointsRequest global_network_endpoint_groups_attach_endpoints_request_resource = 30691563 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\GlobalNetworkEndpointGroupsAttachEndpointsRequest
     */
    public function getGlobalNetworkEndpointGroupsAttachEndpointsRequestResource()
    {
        return isset($this->global_network_endpoint_groups_attach_endpoints_request_resource) ? $this->global_network_endpoint_groups_attach_endpoints_request_resource : null;
    }

    public function hasGlobalNetworkEndpointGroupsAttachEndpointsRequestResource()
    {
        return isset($this->global_network_endpoint_groups_attach_endpoints_request_resource);
    }

    public function clearGlobalNetworkEndpointGroupsAttachEndpointsRequestResource()
    {
        unset($this->global_network_endpoint_groups_attach_endpoints_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GlobalNetworkEndpointGroupsAttachEndpointsRequest global_network_endpoint_groups_attach_endpoints_request_resource = 30691563 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\GlobalNetworkEndpointGroupsAttachEndpointsRequest $var
     * @return $this
     */
    public function setGlobalNetworkEndpointGroupsAttachEndpointsRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\GlobalNetworkEndpointGroupsAttachEndpointsRequest::class);
        $this->global_network_endpoint_groups_attach_endpoints_request_resource = $var;

        return $this;
    }

    /**
     * The name of the network endpoint group where you are attaching network endpoints to. It should comply with RFC1035.
     *
     * Generated from protobuf field <code>string network_endpoint_group = 165471622 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNetworkEndpointGroup()
    {
        return $this->network_endpoint_group;
    }

    /**
     * The name of the network endpoint group where you are attaching network endpoints to. It should comply with RFC1035.
     *
     * Generated from protobuf field <code>string network_endpoint_group = 165471622 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkEndpointGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_endpoint_group = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     * For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}
