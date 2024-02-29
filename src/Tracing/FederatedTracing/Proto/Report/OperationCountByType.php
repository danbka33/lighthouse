<?php declare(strict_types=1);
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: src/Tracing/FederatedTracing/reports.proto

namespace Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Report;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Report.OperationCountByType</code>.
 */
class OperationCountByType extends \Google\Protobuf\Internal\Message
{
    /** Generated from protobuf field <code>string type = 1 [json_name = "type"];</code> */
    protected $type = '';

    /** Generated from protobuf field <code>string subtype = 2 [json_name = "subtype"];</code> */
    protected $subtype = '';

    /** Generated from protobuf field <code>uint64 operation_count = 3 [json_name = "operationCount"];</code> */
    protected $operation_count = 0;

    /**
     * Constructor.
     *
     * @param  array  $data {
     *     Optional. Data for populating the Message object.
     *
     *     @var string $type
     *     @var string $subtype
     *     @var int|string $operation_count
     * }
     */
    public function __construct($data = null)
    {
        \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Metadata\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type = 1 [json_name = "type"];</code>.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 1 [json_name = "type"];</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, true);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subtype = 2 [json_name = "subtype"];</code>.
     *
     * @return string
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Generated from protobuf field <code>string subtype = 2 [json_name = "subtype"];</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setSubtype($var)
    {
        GPBUtil::checkString($var, true);
        $this->subtype = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 operation_count = 3 [json_name = "operationCount"];</code>.
     *
     * @return int|string
     */
    public function getOperationCount()
    {
        return $this->operation_count;
    }

    /**
     * Generated from protobuf field <code>uint64 operation_count = 3 [json_name = "operationCount"];</code>.
     *
     * @param  int|string  $var
     *
     * @return $this
     */
    public function setOperationCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->operation_count = $var;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OperationCountByType::class, \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Report_OperationCountByType::class);
