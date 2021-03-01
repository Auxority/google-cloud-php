<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Machine Type resource.
 * You can use specific machine types for your VM instances based on performance and pricing requirements. For more information, read Machine Types. (== resource_for {$api_version}.machineTypes ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.MachineType</code>
 */
class MachineType extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] A list of accelerator configurations assigned to this machine type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Accelerators accelerators = 1141608;</code>
     */
    private $accelerators;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = '';
    /**
     * [Output Only] The deprecation status associated with this machine type. Only applicable if the machine type is unavailable.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 246703539;</code>
     */
    private $deprecated = null;
    /**
     * [Output Only] An optional textual description of the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     */
    private $description = '';
    /**
     * [Output Only] The number of virtual CPUs that are available to the instance.
     *
     * Generated from protobuf field <code>int32 guest_cpus = 124921298;</code>
     */
    private $guest_cpus = 0;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     */
    private $id = '';
    /**
     * [Deprecated] This property is deprecated and will never be populated with any relevant values.
     *
     * Generated from protobuf field <code>int32 image_space_gb = 75331864;</code>
     */
    private $image_space_gb = 0;
    /**
     * [Output Only] Whether this machine type has a shared CPU. See Shared-core machine types for more information.
     *
     * Generated from protobuf field <code>bool is_shared_cpu = 252964099;</code>
     */
    private $is_shared_cpu = false;
    /**
     * [Output Only] The type of the resource. Always compute#machineType for machine types.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = '';
    /**
     * [Output Only] Maximum persistent disks allowed.
     *
     * Generated from protobuf field <code>int32 maximum_persistent_disks = 227785485;</code>
     */
    private $maximum_persistent_disks = 0;
    /**
     * [Output Only] Maximum total persistent disks size (GB) allowed.
     *
     * Generated from protobuf field <code>string maximum_persistent_disks_size_gb = 154274471;</code>
     */
    private $maximum_persistent_disks_size_gb = '';
    /**
     * [Output Only] The amount of physical memory available to the instance, defined in MB.
     *
     * Generated from protobuf field <code>int32 memory_mb = 116001171;</code>
     */
    private $memory_mb = 0;
    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * [Output Only] A list of extended scratch disks assigned to the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ScratchDisks scratch_disks = 212343025;</code>
     */
    private $scratch_disks;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     */
    private $self_link = '';
    /**
     * [Output Only] The name of the zone where the machine type resides, such as us-central1-a.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     */
    private $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\Accelerators[]|\Google\Protobuf\Internal\RepeatedField $accelerators
     *           [Output Only] A list of accelerator configurations assigned to this machine type.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type \Google\Cloud\Compute\V1\DeprecationStatus $deprecated
     *           [Output Only] The deprecation status associated with this machine type. Only applicable if the machine type is unavailable.
     *     @type string $description
     *           [Output Only] An optional textual description of the resource.
     *     @type int $guest_cpus
     *           [Output Only] The number of virtual CPUs that are available to the instance.
     *     @type string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type int $image_space_gb
     *           [Deprecated] This property is deprecated and will never be populated with any relevant values.
     *     @type bool $is_shared_cpu
     *           [Output Only] Whether this machine type has a shared CPU. See Shared-core machine types for more information.
     *     @type string $kind
     *           [Output Only] The type of the resource. Always compute#machineType for machine types.
     *     @type int $maximum_persistent_disks
     *           [Output Only] Maximum persistent disks allowed.
     *     @type string $maximum_persistent_disks_size_gb
     *           [Output Only] Maximum total persistent disks size (GB) allowed.
     *     @type int $memory_mb
     *           [Output Only] The amount of physical memory available to the instance, defined in MB.
     *     @type string $name
     *           [Output Only] Name of the resource.
     *     @type \Google\Cloud\Compute\V1\ScratchDisks[]|\Google\Protobuf\Internal\RepeatedField $scratch_disks
     *           [Output Only] A list of extended scratch disks assigned to the instance.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $zone
     *           [Output Only] The name of the zone where the machine type resides, such as us-central1-a.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] A list of accelerator configurations assigned to this machine type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Accelerators accelerators = 1141608;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccelerators()
    {
        return $this->accelerators;
    }

    /**
     * [Output Only] A list of accelerator configurations assigned to this machine type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Accelerators accelerators = 1141608;</code>
     * @param \Google\Cloud\Compute\V1\Accelerators[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccelerators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Accelerators::class);
        $this->accelerators = $arr;

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
     * [Output Only] The deprecation status associated with this machine type. Only applicable if the machine type is unavailable.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 246703539;</code>
     * @return \Google\Cloud\Compute\V1\DeprecationStatus
     */
    public function getDeprecated()
    {
        return isset($this->deprecated) ? $this->deprecated : null;
    }

    public function hasDeprecated()
    {
        return isset($this->deprecated);
    }

    public function clearDeprecated()
    {
        unset($this->deprecated);
    }

    /**
     * [Output Only] The deprecation status associated with this machine type. Only applicable if the machine type is unavailable.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.DeprecationStatus deprecated = 246703539;</code>
     * @param \Google\Cloud\Compute\V1\DeprecationStatus $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\DeprecationStatus::class);
        $this->deprecated = $var;

        return $this;
    }

    /**
     * [Output Only] An optional textual description of the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * [Output Only] An optional textual description of the resource.
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
     * [Output Only] The number of virtual CPUs that are available to the instance.
     *
     * Generated from protobuf field <code>int32 guest_cpus = 124921298;</code>
     * @return int
     */
    public function getGuestCpus()
    {
        return $this->guest_cpus;
    }

    /**
     * [Output Only] The number of virtual CPUs that are available to the instance.
     *
     * Generated from protobuf field <code>int32 guest_cpus = 124921298;</code>
     * @param int $var
     * @return $this
     */
    public function setGuestCpus($var)
    {
        GPBUtil::checkInt32($var);
        $this->guest_cpus = $var;

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
     * [Deprecated] This property is deprecated and will never be populated with any relevant values.
     *
     * Generated from protobuf field <code>int32 image_space_gb = 75331864;</code>
     * @return int
     */
    public function getImageSpaceGb()
    {
        return $this->image_space_gb;
    }

    /**
     * [Deprecated] This property is deprecated and will never be populated with any relevant values.
     *
     * Generated from protobuf field <code>int32 image_space_gb = 75331864;</code>
     * @param int $var
     * @return $this
     */
    public function setImageSpaceGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->image_space_gb = $var;

        return $this;
    }

    /**
     * [Output Only] Whether this machine type has a shared CPU. See Shared-core machine types for more information.
     *
     * Generated from protobuf field <code>bool is_shared_cpu = 252964099;</code>
     * @return bool
     */
    public function getIsSharedCpu()
    {
        return $this->is_shared_cpu;
    }

    /**
     * [Output Only] Whether this machine type has a shared CPU. See Shared-core machine types for more information.
     *
     * Generated from protobuf field <code>bool is_shared_cpu = 252964099;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSharedCpu($var)
    {
        GPBUtil::checkBool($var);
        $this->is_shared_cpu = $var;

        return $this;
    }

    /**
     * [Output Only] The type of the resource. Always compute#machineType for machine types.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * [Output Only] The type of the resource. Always compute#machineType for machine types.
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
     * [Output Only] Maximum persistent disks allowed.
     *
     * Generated from protobuf field <code>int32 maximum_persistent_disks = 227785485;</code>
     * @return int
     */
    public function getMaximumPersistentDisks()
    {
        return $this->maximum_persistent_disks;
    }

    /**
     * [Output Only] Maximum persistent disks allowed.
     *
     * Generated from protobuf field <code>int32 maximum_persistent_disks = 227785485;</code>
     * @param int $var
     * @return $this
     */
    public function setMaximumPersistentDisks($var)
    {
        GPBUtil::checkInt32($var);
        $this->maximum_persistent_disks = $var;

        return $this;
    }

    /**
     * [Output Only] Maximum total persistent disks size (GB) allowed.
     *
     * Generated from protobuf field <code>string maximum_persistent_disks_size_gb = 154274471;</code>
     * @return string
     */
    public function getMaximumPersistentDisksSizeGb()
    {
        return $this->maximum_persistent_disks_size_gb;
    }

    /**
     * [Output Only] Maximum total persistent disks size (GB) allowed.
     *
     * Generated from protobuf field <code>string maximum_persistent_disks_size_gb = 154274471;</code>
     * @param string $var
     * @return $this
     */
    public function setMaximumPersistentDisksSizeGb($var)
    {
        GPBUtil::checkString($var, True);
        $this->maximum_persistent_disks_size_gb = $var;

        return $this;
    }

    /**
     * [Output Only] The amount of physical memory available to the instance, defined in MB.
     *
     * Generated from protobuf field <code>int32 memory_mb = 116001171;</code>
     * @return int
     */
    public function getMemoryMb()
    {
        return $this->memory_mb;
    }

    /**
     * [Output Only] The amount of physical memory available to the instance, defined in MB.
     *
     * Generated from protobuf field <code>int32 memory_mb = 116001171;</code>
     * @param int $var
     * @return $this
     */
    public function setMemoryMb($var)
    {
        GPBUtil::checkInt32($var);
        $this->memory_mb = $var;

        return $this;
    }

    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * [Output Only] Name of the resource.
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
     * [Output Only] A list of extended scratch disks assigned to the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ScratchDisks scratch_disks = 212343025;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScratchDisks()
    {
        return $this->scratch_disks;
    }

    /**
     * [Output Only] A list of extended scratch disks assigned to the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ScratchDisks scratch_disks = 212343025;</code>
     * @param \Google\Cloud\Compute\V1\ScratchDisks[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScratchDisks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ScratchDisks::class);
        $this->scratch_disks = $arr;

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
     * [Output Only] The name of the zone where the machine type resides, such as us-central1-a.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * [Output Only] The name of the zone where the machine type resides, such as us-central1-a.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}
