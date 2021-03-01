<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Target Pool resource.
 * Target pools are used for network TCP/UDP load balancing. A target pool references member instances, an associated legacy HttpHealthCheck resource, and, optionally, a backup target pool. For more information, read Using target pools. (== resource_for {$api_version}.targetPools ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetPool</code>
 */
class TargetPool extends \Google\Protobuf\Internal\Message
{
    /**
     * The server-defined URL for the resource. This field is applicable only when the containing target pool is serving a forwarding rule as the primary pool, and its failoverRatio field is properly set to a value between [0, 1].
     * backupPool and failoverRatio together define the fallback behavior of the primary target pool: if the ratio of the healthy instances in the primary pool is at or below failoverRatio, traffic arriving at the load-balanced IP will be directed to the backup pool.
     * In case where failoverRatio and backupPool are not set, or all the instances in the backup pool are unhealthy, the traffic will be directed back to the primary pool in the "force" mode, where traffic will be spread to the healthy instances with the best effort, or to all instances when no instance is healthy.
     *
     * Generated from protobuf field <code>string backup_pool = 45884537;</code>
     */
    private $backup_pool = '';
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = '';
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     */
    private $description = '';
    /**
     * This field is applicable only when the containing target pool is serving a forwarding rule as the primary pool (i.e., not as a backup pool to some other target pool). The value of the field must be in [0, 1].
     * If set, backupPool must also be set. They together define the fallback behavior of the primary target pool: if the ratio of the healthy instances in the primary pool is at or below this number, traffic arriving at the load-balanced IP will be directed to the backup pool.
     * In case where failoverRatio is not set or all the instances in the backup pool are unhealthy, the traffic will be directed back to the primary pool in the "force" mode, where traffic will be spread to the healthy instances with the best effort, or to all instances when no instance is healthy.
     *
     * Generated from protobuf field <code>float failover_ratio = 212667006;</code>
     */
    private $failover_ratio = 0.0;
    /**
     * The URL of the HttpHealthCheck resource. A member instance in this pool is considered healthy if and only if the health checks pass. An empty list means all member instances will be considered healthy at all times. Only legacy HttpHealthChecks are supported. Only one health check may be specified.
     *
     * Generated from protobuf field <code>repeated string health_checks = 179935150;</code>
     */
    private $health_checks;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     */
    private $id = '';
    /**
     * A list of resource URLs to the virtual machine instances serving this pool. They must live in zones contained in the same region as this pool.
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     */
    private $instances;
    /**
     * [Output Only] Type of the resource. Always compute#targetPool for target pools.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = '';
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * [Output Only] URL of the region where the target pool resides.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     */
    private $region = '';
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     */
    private $self_link = '';
    /**
     * Session affinity option, must be one of the following values:
     * NONE: Connections from the same client IP may go to any instance in the pool.
     * CLIENT_IP: Connections from the same client IP will go to the same instance in the pool while that instance remains healthy.
     * CLIENT_IP_PROTO: Connections from the same client IP with the same IP protocol will go to the same instance in the pool while that instance remains healthy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetPool.SessionAffinity session_affinity = 195453105;</code>
     */
    private $session_affinity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backup_pool
     *           The server-defined URL for the resource. This field is applicable only when the containing target pool is serving a forwarding rule as the primary pool, and its failoverRatio field is properly set to a value between [0, 1].
     *           backupPool and failoverRatio together define the fallback behavior of the primary target pool: if the ratio of the healthy instances in the primary pool is at or below failoverRatio, traffic arriving at the load-balanced IP will be directed to the backup pool.
     *           In case where failoverRatio and backupPool are not set, or all the instances in the backup pool are unhealthy, the traffic will be directed back to the primary pool in the "force" mode, where traffic will be spread to the healthy instances with the best effort, or to all instances when no instance is healthy.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type float $failover_ratio
     *           This field is applicable only when the containing target pool is serving a forwarding rule as the primary pool (i.e., not as a backup pool to some other target pool). The value of the field must be in [0, 1].
     *           If set, backupPool must also be set. They together define the fallback behavior of the primary target pool: if the ratio of the healthy instances in the primary pool is at or below this number, traffic arriving at the load-balanced IP will be directed to the backup pool.
     *           In case where failoverRatio is not set or all the instances in the backup pool are unhealthy, the traffic will be directed back to the primary pool in the "force" mode, where traffic will be spread to the healthy instances with the best effort, or to all instances when no instance is healthy.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $health_checks
     *           The URL of the HttpHealthCheck resource. A member instance in this pool is considered healthy if and only if the health checks pass. An empty list means all member instances will be considered healthy at all times. Only legacy HttpHealthChecks are supported. Only one health check may be specified.
     *     @type string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $instances
     *           A list of resource URLs to the virtual machine instances serving this pool. They must live in zones contained in the same region as this pool.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#targetPool for target pools.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $region
     *           [Output Only] URL of the region where the target pool resides.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type int $session_affinity
     *           Session affinity option, must be one of the following values:
     *           NONE: Connections from the same client IP may go to any instance in the pool.
     *           CLIENT_IP: Connections from the same client IP will go to the same instance in the pool while that instance remains healthy.
     *           CLIENT_IP_PROTO: Connections from the same client IP with the same IP protocol will go to the same instance in the pool while that instance remains healthy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The server-defined URL for the resource. This field is applicable only when the containing target pool is serving a forwarding rule as the primary pool, and its failoverRatio field is properly set to a value between [0, 1].
     * backupPool and failoverRatio together define the fallback behavior of the primary target pool: if the ratio of the healthy instances in the primary pool is at or below failoverRatio, traffic arriving at the load-balanced IP will be directed to the backup pool.
     * In case where failoverRatio and backupPool are not set, or all the instances in the backup pool are unhealthy, the traffic will be directed back to the primary pool in the "force" mode, where traffic will be spread to the healthy instances with the best effort, or to all instances when no instance is healthy.
     *
     * Generated from protobuf field <code>string backup_pool = 45884537;</code>
     * @return string
     */
    public function getBackupPool()
    {
        return $this->backup_pool;
    }

    /**
     * The server-defined URL for the resource. This field is applicable only when the containing target pool is serving a forwarding rule as the primary pool, and its failoverRatio field is properly set to a value between [0, 1].
     * backupPool and failoverRatio together define the fallback behavior of the primary target pool: if the ratio of the healthy instances in the primary pool is at or below failoverRatio, traffic arriving at the load-balanced IP will be directed to the backup pool.
     * In case where failoverRatio and backupPool are not set, or all the instances in the backup pool are unhealthy, the traffic will be directed back to the primary pool in the "force" mode, where traffic will be spread to the healthy instances with the best effort, or to all instances when no instance is healthy.
     *
     * Generated from protobuf field <code>string backup_pool = 45884537;</code>
     * @param string $var
     * @return $this
     */
    public function setBackupPool($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_pool = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * This field is applicable only when the containing target pool is serving a forwarding rule as the primary pool (i.e., not as a backup pool to some other target pool). The value of the field must be in [0, 1].
     * If set, backupPool must also be set. They together define the fallback behavior of the primary target pool: if the ratio of the healthy instances in the primary pool is at or below this number, traffic arriving at the load-balanced IP will be directed to the backup pool.
     * In case where failoverRatio is not set or all the instances in the backup pool are unhealthy, the traffic will be directed back to the primary pool in the "force" mode, where traffic will be spread to the healthy instances with the best effort, or to all instances when no instance is healthy.
     *
     * Generated from protobuf field <code>float failover_ratio = 212667006;</code>
     * @return float
     */
    public function getFailoverRatio()
    {
        return $this->failover_ratio;
    }

    /**
     * This field is applicable only when the containing target pool is serving a forwarding rule as the primary pool (i.e., not as a backup pool to some other target pool). The value of the field must be in [0, 1].
     * If set, backupPool must also be set. They together define the fallback behavior of the primary target pool: if the ratio of the healthy instances in the primary pool is at or below this number, traffic arriving at the load-balanced IP will be directed to the backup pool.
     * In case where failoverRatio is not set or all the instances in the backup pool are unhealthy, the traffic will be directed back to the primary pool in the "force" mode, where traffic will be spread to the healthy instances with the best effort, or to all instances when no instance is healthy.
     *
     * Generated from protobuf field <code>float failover_ratio = 212667006;</code>
     * @param float $var
     * @return $this
     */
    public function setFailoverRatio($var)
    {
        GPBUtil::checkFloat($var);
        $this->failover_ratio = $var;

        return $this;
    }

    /**
     * The URL of the HttpHealthCheck resource. A member instance in this pool is considered healthy if and only if the health checks pass. An empty list means all member instances will be considered healthy at all times. Only legacy HttpHealthChecks are supported. Only one health check may be specified.
     *
     * Generated from protobuf field <code>repeated string health_checks = 179935150;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHealthChecks()
    {
        return $this->health_checks;
    }

    /**
     * The URL of the HttpHealthCheck resource. A member instance in this pool is considered healthy if and only if the health checks pass. An empty list means all member instances will be considered healthy at all times. Only legacy HttpHealthChecks are supported. Only one health check may be specified.
     *
     * Generated from protobuf field <code>repeated string health_checks = 179935150;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHealthChecks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->health_checks = $arr;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * A list of resource URLs to the virtual machine instances serving this pool. They must live in zones contained in the same region as this pool.
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * A list of resource URLs to the virtual machine instances serving this pool. They must live in zones contained in the same region as this pool.
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instances = $arr;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#targetPool for target pools.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * [Output Only] Type of the resource. Always compute#targetPool for target pools.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the region where the target pool resides.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * [Output Only] URL of the region where the target pool resides.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Session affinity option, must be one of the following values:
     * NONE: Connections from the same client IP may go to any instance in the pool.
     * CLIENT_IP: Connections from the same client IP will go to the same instance in the pool while that instance remains healthy.
     * CLIENT_IP_PROTO: Connections from the same client IP with the same IP protocol will go to the same instance in the pool while that instance remains healthy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetPool.SessionAffinity session_affinity = 195453105;</code>
     * @return int
     */
    public function getSessionAffinity()
    {
        return $this->session_affinity;
    }

    /**
     * Session affinity option, must be one of the following values:
     * NONE: Connections from the same client IP may go to any instance in the pool.
     * CLIENT_IP: Connections from the same client IP will go to the same instance in the pool while that instance remains healthy.
     * CLIENT_IP_PROTO: Connections from the same client IP with the same IP protocol will go to the same instance in the pool while that instance remains healthy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetPool.SessionAffinity session_affinity = 195453105;</code>
     * @param int $var
     * @return $this
     */
    public function setSessionAffinity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\TargetPool\SessionAffinity::class);
        $this->session_affinity = $var;

        return $this;
    }

}
