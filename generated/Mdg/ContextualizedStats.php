<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: reports.proto

namespace Mdg;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>mdg.engine.proto.ContextualizedStats</code>
 */
class ContextualizedStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.mdg.engine.proto.StatsContext context = 1;</code>
     */
    protected $context = null;
    /**
     * Generated from protobuf field <code>.mdg.engine.proto.QueryLatencyStats query_latency_stats = 2;</code>
     */
    protected $query_latency_stats = null;
    /**
     * Key is type name.
     *
     * Generated from protobuf field <code>map<string, .mdg.engine.proto.TypeStat> per_type_stat = 3;</code>
     */
    private $per_type_stat;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Mdg\StatsContext $context
     *     @type \Mdg\QueryLatencyStats $query_latency_stats
     *     @type array|\Google\Protobuf\Internal\MapField $per_type_stat
     *           Key is type name.
     * }
     */
    public function __construct($data = NULL) {
        \Metadata\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.mdg.engine.proto.StatsContext context = 1;</code>
     * @return \Mdg\StatsContext|null
     */
    public function getContext()
    {
        return $this->context;
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * Generated from protobuf field <code>.mdg.engine.proto.StatsContext context = 1;</code>
     * @param \Mdg\StatsContext $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Mdg\StatsContext::class);
        $this->context = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.mdg.engine.proto.QueryLatencyStats query_latency_stats = 2;</code>
     * @return \Mdg\QueryLatencyStats|null
     */
    public function getQueryLatencyStats()
    {
        return $this->query_latency_stats;
    }

    public function hasQueryLatencyStats()
    {
        return isset($this->query_latency_stats);
    }

    public function clearQueryLatencyStats()
    {
        unset($this->query_latency_stats);
    }

    /**
     * Generated from protobuf field <code>.mdg.engine.proto.QueryLatencyStats query_latency_stats = 2;</code>
     * @param \Mdg\QueryLatencyStats $var
     * @return $this
     */
    public function setQueryLatencyStats($var)
    {
        GPBUtil::checkMessage($var, \Mdg\QueryLatencyStats::class);
        $this->query_latency_stats = $var;

        return $this;
    }

    /**
     * Key is type name.
     *
     * Generated from protobuf field <code>map<string, .mdg.engine.proto.TypeStat> per_type_stat = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPerTypeStat()
    {
        return $this->per_type_stat;
    }

    /**
     * Key is type name.
     *
     * Generated from protobuf field <code>map<string, .mdg.engine.proto.TypeStat> per_type_stat = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPerTypeStat($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Mdg\TypeStat::class);
        $this->per_type_stat = $arr;

        return $this;
    }

}

