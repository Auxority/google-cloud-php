<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Quota;

use UnexpectedValueException;

/**
 * [Output Only] Name of the quota metric.
 *
 * Protobuf type <code>google.cloud.compute.v1.Quota.Metric</code>
 */
class Metric
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_METRIC = 0;</code>
     */
    const UNDEFINED_METRIC = 0;
    /**
     * Generated from protobuf enum <code>A2_CPUS = 153206585;</code>
     */
    const A2_CPUS = 153206585;
    /**
     * Generated from protobuf enum <code>AFFINITY_GROUPS = 108303563;</code>
     */
    const AFFINITY_GROUPS = 108303563;
    /**
     * Generated from protobuf enum <code>AUTOSCALERS = 202813532;</code>
     */
    const AUTOSCALERS = 202813532;
    /**
     * Generated from protobuf enum <code>BACKEND_BUCKETS = 137626846;</code>
     */
    const BACKEND_BUCKETS = 137626846;
    /**
     * Generated from protobuf enum <code>BACKEND_SERVICES = 1188297;</code>
     */
    const BACKEND_SERVICES = 1188297;
    /**
     * Generated from protobuf enum <code>C2_CPUS = 49165755;</code>
     */
    const C2_CPUS = 49165755;
    /**
     * Generated from protobuf enum <code>COMMITMENTS = 187706334;</code>
     */
    const COMMITMENTS = 187706334;
    /**
     * Generated from protobuf enum <code>COMMITTED_A2_CPUS = 59330902;</code>
     */
    const COMMITTED_A2_CPUS = 59330902;
    /**
     * Generated from protobuf enum <code>COMMITTED_C2_CPUS = 223725528;</code>
     */
    const COMMITTED_C2_CPUS = 223725528;
    /**
     * Generated from protobuf enum <code>COMMITTED_CPUS = 23959246;</code>
     */
    const COMMITTED_CPUS = 23959246;
    /**
     * Generated from protobuf enum <code>COMMITTED_LICENSES = 89171413;</code>
     */
    const COMMITTED_LICENSES = 89171413;
    /**
     * Generated from protobuf enum <code>COMMITTED_LOCAL_SSD_TOTAL_GB = 39958024;</code>
     */
    const COMMITTED_LOCAL_SSD_TOTAL_GB = 39958024;
    /**
     * Generated from protobuf enum <code>COMMITTED_MEMORY_OPTIMIZED_CPUS = 220622430;</code>
     */
    const COMMITTED_MEMORY_OPTIMIZED_CPUS = 220622430;
    /**
     * Generated from protobuf enum <code>COMMITTED_N2D_CPUS = 125951757;</code>
     */
    const COMMITTED_N2D_CPUS = 125951757;
    /**
     * Generated from protobuf enum <code>COMMITTED_N2_CPUS = 54154147;</code>
     */
    const COMMITTED_N2_CPUS = 54154147;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_A100_GPUS = 107363989;</code>
     */
    const COMMITTED_NVIDIA_A100_GPUS = 107363989;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_K80_GPUS = 3857188;</code>
     */
    const COMMITTED_NVIDIA_K80_GPUS = 3857188;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_P100_GPUS = 107528100;</code>
     */
    const COMMITTED_NVIDIA_P100_GPUS = 107528100;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_P4_GPUS = 79517441;</code>
     */
    const COMMITTED_NVIDIA_P4_GPUS = 79517441;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_T4_GPUS = 139871237;</code>
     */
    const COMMITTED_NVIDIA_T4_GPUS = 139871237;
    /**
     * Generated from protobuf enum <code>COMMITTED_NVIDIA_V100_GPUS = 219562;</code>
     */
    const COMMITTED_NVIDIA_V100_GPUS = 219562;
    /**
     * Generated from protobuf enum <code>CPUS = 2075595;</code>
     */
    const CPUS = 2075595;
    /**
     * Generated from protobuf enum <code>CPUS_ALL_REGIONS = 202475693;</code>
     */
    const CPUS_ALL_REGIONS = 202475693;
    /**
     * Generated from protobuf enum <code>DISKS_TOTAL_GB = 85085087;</code>
     */
    const DISKS_TOTAL_GB = 85085087;
    /**
     * Generated from protobuf enum <code>EXTERNAL_NETWORK_LB_FORWARDING_RULES = 105862809;</code>
     */
    const EXTERNAL_NETWORK_LB_FORWARDING_RULES = 105862809;
    /**
     * Generated from protobuf enum <code>EXTERNAL_PROTOCOL_FORWARDING_RULES = 63478888;</code>
     */
    const EXTERNAL_PROTOCOL_FORWARDING_RULES = 63478888;
    /**
     * Generated from protobuf enum <code>EXTERNAL_VPN_GATEWAYS = 4021678;</code>
     */
    const EXTERNAL_VPN_GATEWAYS = 4021678;
    /**
     * Generated from protobuf enum <code>FIREWALLS = 106050387;</code>
     */
    const FIREWALLS = 106050387;
    /**
     * Generated from protobuf enum <code>FORWARDING_RULES = 164233493;</code>
     */
    const FORWARDING_RULES = 164233493;
    /**
     * Generated from protobuf enum <code>GLOBAL_INTERNAL_ADDRESSES = 42738332;</code>
     */
    const GLOBAL_INTERNAL_ADDRESSES = 42738332;
    /**
     * Generated from protobuf enum <code>GPUS_ALL_REGIONS = 39387177;</code>
     */
    const GPUS_ALL_REGIONS = 39387177;
    /**
     * Generated from protobuf enum <code>HEALTH_CHECKS = 20912046;</code>
     */
    const HEALTH_CHECKS = 20912046;
    /**
     * Generated from protobuf enum <code>IMAGES = 15562360;</code>
     */
    const IMAGES = 15562360;
    /**
     * Generated from protobuf enum <code>INSTANCES = 131337822;</code>
     */
    const INSTANCES = 131337822;
    /**
     * Generated from protobuf enum <code>INSTANCE_GROUPS = 87483582;</code>
     */
    const INSTANCE_GROUPS = 87483582;
    /**
     * Generated from protobuf enum <code>INSTANCE_GROUP_MANAGERS = 101798192;</code>
     */
    const INSTANCE_GROUP_MANAGERS = 101798192;
    /**
     * Generated from protobuf enum <code>INSTANCE_TEMPLATES = 226188271;</code>
     */
    const INSTANCE_TEMPLATES = 226188271;
    /**
     * Generated from protobuf enum <code>INTERCONNECTS = 146769285;</code>
     */
    const INTERCONNECTS = 146769285;
    /**
     * Generated from protobuf enum <code>INTERCONNECT_ATTACHMENTS_PER_REGION = 159968086;</code>
     */
    const INTERCONNECT_ATTACHMENTS_PER_REGION = 159968086;
    /**
     * Generated from protobuf enum <code>INTERCONNECT_ATTACHMENTS_TOTAL_MBPS = 156654963;</code>
     */
    const INTERCONNECT_ATTACHMENTS_TOTAL_MBPS = 156654963;
    /**
     * Generated from protobuf enum <code>INTERCONNECT_TOTAL_GBPS = 16906410;</code>
     */
    const INTERCONNECT_TOTAL_GBPS = 16906410;
    /**
     * Generated from protobuf enum <code>INTERNAL_ADDRESSES = 197899392;</code>
     */
    const INTERNAL_ADDRESSES = 197899392;
    /**
     * Generated from protobuf enum <code>INTERNAL_TRAFFIC_DIRECTOR_FORWARDING_RULES = 266433668;</code>
     */
    const INTERNAL_TRAFFIC_DIRECTOR_FORWARDING_RULES = 266433668;
    /**
     * Generated from protobuf enum <code>IN_PLACE_SNAPSHOTS = 151359133;</code>
     */
    const IN_PLACE_SNAPSHOTS = 151359133;
    /**
     * Generated from protobuf enum <code>IN_USE_ADDRESSES = 133689616;</code>
     */
    const IN_USE_ADDRESSES = 133689616;
    /**
     * Generated from protobuf enum <code>IN_USE_BACKUP_SCHEDULES = 32786705;</code>
     */
    const IN_USE_BACKUP_SCHEDULES = 32786705;
    /**
     * Generated from protobuf enum <code>IN_USE_SNAPSHOT_SCHEDULES = 193668627;</code>
     */
    const IN_USE_SNAPSHOT_SCHEDULES = 193668627;
    /**
     * Generated from protobuf enum <code>LOCAL_SSD_TOTAL_GB = 62442565;</code>
     */
    const LOCAL_SSD_TOTAL_GB = 62442565;
    /**
     * Generated from protobuf enum <code>M1_CPUS = 37203366;</code>
     */
    const M1_CPUS = 37203366;
    /**
     * Generated from protobuf enum <code>M2_CPUS = 65832517;</code>
     */
    const M2_CPUS = 65832517;
    /**
     * Generated from protobuf enum <code>MACHINE_IMAGES = 178551184;</code>
     */
    const MACHINE_IMAGES = 178551184;
    /**
     * Generated from protobuf enum <code>N2D_CPUS = 83307914;</code>
     */
    const N2D_CPUS = 83307914;
    /**
     * Generated from protobuf enum <code>N2_CPUS = 148029830;</code>
     */
    const N2_CPUS = 148029830;
    /**
     * Generated from protobuf enum <code>NETWORKS = 217046021;</code>
     */
    const NETWORKS = 217046021;
    /**
     * Generated from protobuf enum <code>NETWORK_ENDPOINT_GROUPS = 102144909;</code>
     */
    const NETWORK_ENDPOINT_GROUPS = 102144909;
    /**
     * Generated from protobuf enum <code>NETWORK_FIREWALL_POLICIES = 101117374;</code>
     */
    const NETWORK_FIREWALL_POLICIES = 101117374;
    /**
     * Generated from protobuf enum <code>NODE_GROUPS = 24624817;</code>
     */
    const NODE_GROUPS = 24624817;
    /**
     * Generated from protobuf enum <code>NODE_TEMPLATES = 206461212;</code>
     */
    const NODE_TEMPLATES = 206461212;
    /**
     * Generated from protobuf enum <code>NVIDIA_A100_GPUS = 236437522;</code>
     */
    const NVIDIA_A100_GPUS = 236437522;
    /**
     * Generated from protobuf enum <code>NVIDIA_K80_GPUS = 163886599;</code>
     */
    const NVIDIA_K80_GPUS = 163886599;
    /**
     * Generated from protobuf enum <code>NVIDIA_P100_GPUS = 236601633;</code>
     */
    const NVIDIA_P100_GPUS = 236601633;
    /**
     * Generated from protobuf enum <code>NVIDIA_P100_VWS_GPUS = 213970574;</code>
     */
    const NVIDIA_P100_VWS_GPUS = 213970574;
    /**
     * Generated from protobuf enum <code>NVIDIA_P4_GPUS = 15406014;</code>
     */
    const NVIDIA_P4_GPUS = 15406014;
    /**
     * Generated from protobuf enum <code>NVIDIA_P4_VWS_GPUS = 259861163;</code>
     */
    const NVIDIA_P4_VWS_GPUS = 259861163;
    /**
     * Generated from protobuf enum <code>NVIDIA_T4_GPUS = 75759810;</code>
     */
    const NVIDIA_T4_GPUS = 75759810;
    /**
     * Generated from protobuf enum <code>NVIDIA_T4_VWS_GPUS = 51377583;</code>
     */
    const NVIDIA_T4_VWS_GPUS = 51377583;
    /**
     * Generated from protobuf enum <code>NVIDIA_V100_GPUS = 129293095;</code>
     */
    const NVIDIA_V100_GPUS = 129293095;
    /**
     * Generated from protobuf enum <code>PACKET_MIRRORINGS = 15578407;</code>
     */
    const PACKET_MIRRORINGS = 15578407;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_CPUS = 251184841;</code>
     */
    const PREEMPTIBLE_CPUS = 251184841;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_LOCAL_SSD_GB = 260819336;</code>
     */
    const PREEMPTIBLE_LOCAL_SSD_GB = 260819336;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_A100_GPUS = 68832784;</code>
     */
    const PREEMPTIBLE_NVIDIA_A100_GPUS = 68832784;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_K80_GPUS = 106524745;</code>
     */
    const PREEMPTIBLE_NVIDIA_K80_GPUS = 106524745;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_P100_GPUS = 68996895;</code>
     */
    const PREEMPTIBLE_NVIDIA_P100_GPUS = 68996895;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_P100_VWS_GPUS = 45108620;</code>
     */
    const PREEMPTIBLE_NVIDIA_P100_VWS_GPUS = 45108620;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_P4_GPUS = 160762172;</code>
     */
    const PREEMPTIBLE_NVIDIA_P4_GPUS = 160762172;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_P4_VWS_GPUS = 252981545;</code>
     */
    const PREEMPTIBLE_NVIDIA_P4_VWS_GPUS = 252981545;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_T4_GPUS = 221115968;</code>
     */
    const PREEMPTIBLE_NVIDIA_T4_GPUS = 221115968;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_T4_VWS_GPUS = 44497965;</code>
     */
    const PREEMPTIBLE_NVIDIA_T4_VWS_GPUS = 44497965;
    /**
     * Generated from protobuf enum <code>PREEMPTIBLE_NVIDIA_V100_GPUS = 230123813;</code>
     */
    const PREEMPTIBLE_NVIDIA_V100_GPUS = 230123813;
    /**
     * Generated from protobuf enum <code>PSC_ILB_CONSUMER_FORWARDING_RULES_PER_PRODUCER_NETWORK = 231164291;</code>
     */
    const PSC_ILB_CONSUMER_FORWARDING_RULES_PER_PRODUCER_NETWORK = 231164291;
    /**
     * Generated from protobuf enum <code>PUBLIC_ADVERTISED_PREFIXES = 202936524;</code>
     */
    const PUBLIC_ADVERTISED_PREFIXES = 202936524;
    /**
     * Generated from protobuf enum <code>PUBLIC_DELEGATED_PREFIXES = 264030518;</code>
     */
    const PUBLIC_DELEGATED_PREFIXES = 264030518;
    /**
     * Generated from protobuf enum <code>REGIONAL_AUTOSCALERS = 29363772;</code>
     */
    const REGIONAL_AUTOSCALERS = 29363772;
    /**
     * Generated from protobuf enum <code>REGIONAL_INSTANCE_GROUP_MANAGERS = 37543696;</code>
     */
    const REGIONAL_INSTANCE_GROUP_MANAGERS = 37543696;
    /**
     * Generated from protobuf enum <code>RESERVATIONS = 32644647;</code>
     */
    const RESERVATIONS = 32644647;
    /**
     * Generated from protobuf enum <code>RESOURCE_POLICIES = 83955297;</code>
     */
    const RESOURCE_POLICIES = 83955297;
    /**
     * Generated from protobuf enum <code>ROUTERS = 224583210;</code>
     */
    const ROUTERS = 224583210;
    /**
     * Generated from protobuf enum <code>ROUTES = 7244618;</code>
     */
    const ROUTES = 7244618;
    /**
     * Generated from protobuf enum <code>SECURITY_POLICIES = 189518703;</code>
     */
    const SECURITY_POLICIES = 189518703;
    /**
     * Generated from protobuf enum <code>SECURITY_POLICY_CEVAL_RULES = 202380233;</code>
     */
    const SECURITY_POLICY_CEVAL_RULES = 202380233;
    /**
     * Generated from protobuf enum <code>SECURITY_POLICY_RULES = 203549225;</code>
     */
    const SECURITY_POLICY_RULES = 203549225;
    /**
     * Generated from protobuf enum <code>SNAPSHOTS = 74969871;</code>
     */
    const SNAPSHOTS = 74969871;
    /**
     * Generated from protobuf enum <code>SSD_TOTAL_GB = 161732561;</code>
     */
    const SSD_TOTAL_GB = 161732561;
    /**
     * Generated from protobuf enum <code>SSL_CERTIFICATES = 109936943;</code>
     */
    const SSL_CERTIFICATES = 109936943;
    /**
     * Generated from protobuf enum <code>STATIC_ADDRESSES = 93624049;</code>
     */
    const STATIC_ADDRESSES = 93624049;
    /**
     * Generated from protobuf enum <code>STATIC_BYOIP_ADDRESSES = 7374193;</code>
     */
    const STATIC_BYOIP_ADDRESSES = 7374193;
    /**
     * Generated from protobuf enum <code>SUBNETWORKS = 152895013;</code>
     */
    const SUBNETWORKS = 152895013;
    /**
     * Generated from protobuf enum <code>TARGET_HTTPS_PROXIES = 219522506;</code>
     */
    const TARGET_HTTPS_PROXIES = 219522506;
    /**
     * Generated from protobuf enum <code>TARGET_HTTP_PROXIES = 164117155;</code>
     */
    const TARGET_HTTP_PROXIES = 164117155;
    /**
     * Generated from protobuf enum <code>TARGET_INSTANCES = 16084272;</code>
     */
    const TARGET_INSTANCES = 16084272;
    /**
     * Generated from protobuf enum <code>TARGET_POOLS = 79825801;</code>
     */
    const TARGET_POOLS = 79825801;
    /**
     * Generated from protobuf enum <code>TARGET_SSL_PROXIES = 159216235;</code>
     */
    const TARGET_SSL_PROXIES = 159216235;
    /**
     * Generated from protobuf enum <code>TARGET_TCP_PROXIES = 182243136;</code>
     */
    const TARGET_TCP_PROXIES = 182243136;
    /**
     * Generated from protobuf enum <code>TARGET_VPN_GATEWAYS = 75029928;</code>
     */
    const TARGET_VPN_GATEWAYS = 75029928;
    /**
     * Generated from protobuf enum <code>URL_MAPS = 110225287;</code>
     */
    const URL_MAPS = 110225287;
    /**
     * Generated from protobuf enum <code>VPN_GATEWAYS = 35620282;</code>
     */
    const VPN_GATEWAYS = 35620282;
    /**
     * Generated from protobuf enum <code>VPN_TUNNELS = 104327296;</code>
     */
    const VPN_TUNNELS = 104327296;
    /**
     * Generated from protobuf enum <code>XPN_SERVICE_PROJECTS = 95191981;</code>
     */
    const XPN_SERVICE_PROJECTS = 95191981;

    private static $valueToName = [
        self::UNDEFINED_METRIC => 'UNDEFINED_METRIC',
        self::A2_CPUS => 'A2_CPUS',
        self::AFFINITY_GROUPS => 'AFFINITY_GROUPS',
        self::AUTOSCALERS => 'AUTOSCALERS',
        self::BACKEND_BUCKETS => 'BACKEND_BUCKETS',
        self::BACKEND_SERVICES => 'BACKEND_SERVICES',
        self::C2_CPUS => 'C2_CPUS',
        self::COMMITMENTS => 'COMMITMENTS',
        self::COMMITTED_A2_CPUS => 'COMMITTED_A2_CPUS',
        self::COMMITTED_C2_CPUS => 'COMMITTED_C2_CPUS',
        self::COMMITTED_CPUS => 'COMMITTED_CPUS',
        self::COMMITTED_LICENSES => 'COMMITTED_LICENSES',
        self::COMMITTED_LOCAL_SSD_TOTAL_GB => 'COMMITTED_LOCAL_SSD_TOTAL_GB',
        self::COMMITTED_MEMORY_OPTIMIZED_CPUS => 'COMMITTED_MEMORY_OPTIMIZED_CPUS',
        self::COMMITTED_N2D_CPUS => 'COMMITTED_N2D_CPUS',
        self::COMMITTED_N2_CPUS => 'COMMITTED_N2_CPUS',
        self::COMMITTED_NVIDIA_A100_GPUS => 'COMMITTED_NVIDIA_A100_GPUS',
        self::COMMITTED_NVIDIA_K80_GPUS => 'COMMITTED_NVIDIA_K80_GPUS',
        self::COMMITTED_NVIDIA_P100_GPUS => 'COMMITTED_NVIDIA_P100_GPUS',
        self::COMMITTED_NVIDIA_P4_GPUS => 'COMMITTED_NVIDIA_P4_GPUS',
        self::COMMITTED_NVIDIA_T4_GPUS => 'COMMITTED_NVIDIA_T4_GPUS',
        self::COMMITTED_NVIDIA_V100_GPUS => 'COMMITTED_NVIDIA_V100_GPUS',
        self::CPUS => 'CPUS',
        self::CPUS_ALL_REGIONS => 'CPUS_ALL_REGIONS',
        self::DISKS_TOTAL_GB => 'DISKS_TOTAL_GB',
        self::EXTERNAL_NETWORK_LB_FORWARDING_RULES => 'EXTERNAL_NETWORK_LB_FORWARDING_RULES',
        self::EXTERNAL_PROTOCOL_FORWARDING_RULES => 'EXTERNAL_PROTOCOL_FORWARDING_RULES',
        self::EXTERNAL_VPN_GATEWAYS => 'EXTERNAL_VPN_GATEWAYS',
        self::FIREWALLS => 'FIREWALLS',
        self::FORWARDING_RULES => 'FORWARDING_RULES',
        self::GLOBAL_INTERNAL_ADDRESSES => 'GLOBAL_INTERNAL_ADDRESSES',
        self::GPUS_ALL_REGIONS => 'GPUS_ALL_REGIONS',
        self::HEALTH_CHECKS => 'HEALTH_CHECKS',
        self::IMAGES => 'IMAGES',
        self::INSTANCES => 'INSTANCES',
        self::INSTANCE_GROUPS => 'INSTANCE_GROUPS',
        self::INSTANCE_GROUP_MANAGERS => 'INSTANCE_GROUP_MANAGERS',
        self::INSTANCE_TEMPLATES => 'INSTANCE_TEMPLATES',
        self::INTERCONNECTS => 'INTERCONNECTS',
        self::INTERCONNECT_ATTACHMENTS_PER_REGION => 'INTERCONNECT_ATTACHMENTS_PER_REGION',
        self::INTERCONNECT_ATTACHMENTS_TOTAL_MBPS => 'INTERCONNECT_ATTACHMENTS_TOTAL_MBPS',
        self::INTERCONNECT_TOTAL_GBPS => 'INTERCONNECT_TOTAL_GBPS',
        self::INTERNAL_ADDRESSES => 'INTERNAL_ADDRESSES',
        self::INTERNAL_TRAFFIC_DIRECTOR_FORWARDING_RULES => 'INTERNAL_TRAFFIC_DIRECTOR_FORWARDING_RULES',
        self::IN_PLACE_SNAPSHOTS => 'IN_PLACE_SNAPSHOTS',
        self::IN_USE_ADDRESSES => 'IN_USE_ADDRESSES',
        self::IN_USE_BACKUP_SCHEDULES => 'IN_USE_BACKUP_SCHEDULES',
        self::IN_USE_SNAPSHOT_SCHEDULES => 'IN_USE_SNAPSHOT_SCHEDULES',
        self::LOCAL_SSD_TOTAL_GB => 'LOCAL_SSD_TOTAL_GB',
        self::M1_CPUS => 'M1_CPUS',
        self::M2_CPUS => 'M2_CPUS',
        self::MACHINE_IMAGES => 'MACHINE_IMAGES',
        self::N2D_CPUS => 'N2D_CPUS',
        self::N2_CPUS => 'N2_CPUS',
        self::NETWORKS => 'NETWORKS',
        self::NETWORK_ENDPOINT_GROUPS => 'NETWORK_ENDPOINT_GROUPS',
        self::NETWORK_FIREWALL_POLICIES => 'NETWORK_FIREWALL_POLICIES',
        self::NODE_GROUPS => 'NODE_GROUPS',
        self::NODE_TEMPLATES => 'NODE_TEMPLATES',
        self::NVIDIA_A100_GPUS => 'NVIDIA_A100_GPUS',
        self::NVIDIA_K80_GPUS => 'NVIDIA_K80_GPUS',
        self::NVIDIA_P100_GPUS => 'NVIDIA_P100_GPUS',
        self::NVIDIA_P100_VWS_GPUS => 'NVIDIA_P100_VWS_GPUS',
        self::NVIDIA_P4_GPUS => 'NVIDIA_P4_GPUS',
        self::NVIDIA_P4_VWS_GPUS => 'NVIDIA_P4_VWS_GPUS',
        self::NVIDIA_T4_GPUS => 'NVIDIA_T4_GPUS',
        self::NVIDIA_T4_VWS_GPUS => 'NVIDIA_T4_VWS_GPUS',
        self::NVIDIA_V100_GPUS => 'NVIDIA_V100_GPUS',
        self::PACKET_MIRRORINGS => 'PACKET_MIRRORINGS',
        self::PREEMPTIBLE_CPUS => 'PREEMPTIBLE_CPUS',
        self::PREEMPTIBLE_LOCAL_SSD_GB => 'PREEMPTIBLE_LOCAL_SSD_GB',
        self::PREEMPTIBLE_NVIDIA_A100_GPUS => 'PREEMPTIBLE_NVIDIA_A100_GPUS',
        self::PREEMPTIBLE_NVIDIA_K80_GPUS => 'PREEMPTIBLE_NVIDIA_K80_GPUS',
        self::PREEMPTIBLE_NVIDIA_P100_GPUS => 'PREEMPTIBLE_NVIDIA_P100_GPUS',
        self::PREEMPTIBLE_NVIDIA_P100_VWS_GPUS => 'PREEMPTIBLE_NVIDIA_P100_VWS_GPUS',
        self::PREEMPTIBLE_NVIDIA_P4_GPUS => 'PREEMPTIBLE_NVIDIA_P4_GPUS',
        self::PREEMPTIBLE_NVIDIA_P4_VWS_GPUS => 'PREEMPTIBLE_NVIDIA_P4_VWS_GPUS',
        self::PREEMPTIBLE_NVIDIA_T4_GPUS => 'PREEMPTIBLE_NVIDIA_T4_GPUS',
        self::PREEMPTIBLE_NVIDIA_T4_VWS_GPUS => 'PREEMPTIBLE_NVIDIA_T4_VWS_GPUS',
        self::PREEMPTIBLE_NVIDIA_V100_GPUS => 'PREEMPTIBLE_NVIDIA_V100_GPUS',
        self::PSC_ILB_CONSUMER_FORWARDING_RULES_PER_PRODUCER_NETWORK => 'PSC_ILB_CONSUMER_FORWARDING_RULES_PER_PRODUCER_NETWORK',
        self::PUBLIC_ADVERTISED_PREFIXES => 'PUBLIC_ADVERTISED_PREFIXES',
        self::PUBLIC_DELEGATED_PREFIXES => 'PUBLIC_DELEGATED_PREFIXES',
        self::REGIONAL_AUTOSCALERS => 'REGIONAL_AUTOSCALERS',
        self::REGIONAL_INSTANCE_GROUP_MANAGERS => 'REGIONAL_INSTANCE_GROUP_MANAGERS',
        self::RESERVATIONS => 'RESERVATIONS',
        self::RESOURCE_POLICIES => 'RESOURCE_POLICIES',
        self::ROUTERS => 'ROUTERS',
        self::ROUTES => 'ROUTES',
        self::SECURITY_POLICIES => 'SECURITY_POLICIES',
        self::SECURITY_POLICY_CEVAL_RULES => 'SECURITY_POLICY_CEVAL_RULES',
        self::SECURITY_POLICY_RULES => 'SECURITY_POLICY_RULES',
        self::SNAPSHOTS => 'SNAPSHOTS',
        self::SSD_TOTAL_GB => 'SSD_TOTAL_GB',
        self::SSL_CERTIFICATES => 'SSL_CERTIFICATES',
        self::STATIC_ADDRESSES => 'STATIC_ADDRESSES',
        self::STATIC_BYOIP_ADDRESSES => 'STATIC_BYOIP_ADDRESSES',
        self::SUBNETWORKS => 'SUBNETWORKS',
        self::TARGET_HTTPS_PROXIES => 'TARGET_HTTPS_PROXIES',
        self::TARGET_HTTP_PROXIES => 'TARGET_HTTP_PROXIES',
        self::TARGET_INSTANCES => 'TARGET_INSTANCES',
        self::TARGET_POOLS => 'TARGET_POOLS',
        self::TARGET_SSL_PROXIES => 'TARGET_SSL_PROXIES',
        self::TARGET_TCP_PROXIES => 'TARGET_TCP_PROXIES',
        self::TARGET_VPN_GATEWAYS => 'TARGET_VPN_GATEWAYS',
        self::URL_MAPS => 'URL_MAPS',
        self::VPN_GATEWAYS => 'VPN_GATEWAYS',
        self::VPN_TUNNELS => 'VPN_TUNNELS',
        self::XPN_SERVICE_PROJECTS => 'XPN_SERVICE_PROJECTS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

