<?php declare(strict_types=1);
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: src/Tracing/FederatedTracing/reports.proto

namespace Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Trace.HTTP</code>.
 */
class HTTP extends \Google\Protobuf\Internal\Message
{
    /** Generated from protobuf field <code>.Trace.HTTP.Method method = 1 [json_name = "method"];</code> */
    protected $method = 0;

    /**
     * Should exclude manual blacklist ("Auth" by default).
     *
     * Generated from protobuf field <code>map<string, .Trace.HTTP.Values> request_headers = 4 [json_name = "requestHeaders"];</code>
     */
    private $request_headers;

    /** Generated from protobuf field <code>map<string, .Trace.HTTP.Values> response_headers = 5 [json_name = "responseHeaders"];</code> */
    private $response_headers;

    /** Generated from protobuf field <code>uint32 status_code = 6 [json_name = "statusCode"];</code> */
    protected $status_code = 0;

    /**
     * Constructor.
     *
     * @param  array  $data {
     *     Optional. Data for populating the Message object.
     *
     *     @var int $method
     *     @var array|\Google\Protobuf\Internal\MapField $request_headers
     *           Should exclude manual blacklist ("Auth" by default)
     *     @var array|\Google\Protobuf\Internal\MapField $response_headers
     *     @var int $status_code
     * }
     */
    public function __construct($data = null)
    {
        \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Metadata\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Trace.HTTP.Method method = 1 [json_name = "method"];</code>.
     *
     * @return int
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>.Trace.HTTP.Method method = 1 [json_name = "method"];</code>.
     *
     * @param  int  $var
     *
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkEnum($var, HTTP\Method::class);
        $this->method = $var;

        return $this;
    }

    /**
     * Should exclude manual blacklist ("Auth" by default).
     *
     * Generated from protobuf field <code>map<string, .Trace.HTTP.Values> request_headers = 4 [json_name = "requestHeaders"];</code>
     *
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getRequestHeaders()
    {
        return $this->request_headers;
    }

    /**
     * Should exclude manual blacklist ("Auth" by default).
     *
     * Generated from protobuf field <code>map<string, .Trace.HTTP.Values> request_headers = 4 [json_name = "requestHeaders"];</code>
     *
     * @param  array|\Google\Protobuf\Internal\MapField  $var
     *
     * @return $this
     */
    public function setRequestHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, HTTP\Values::class);
        $this->request_headers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .Trace.HTTP.Values> response_headers = 5 [json_name = "responseHeaders"];</code>.
     *
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResponseHeaders()
    {
        return $this->response_headers;
    }

    /**
     * Generated from protobuf field <code>map<string, .Trace.HTTP.Values> response_headers = 5 [json_name = "responseHeaders"];</code>.
     *
     * @param  array|\Google\Protobuf\Internal\MapField  $var
     *
     * @return $this
     */
    public function setResponseHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, HTTP\Values::class);
        $this->response_headers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 status_code = 6 [json_name = "statusCode"];</code>.
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * Generated from protobuf field <code>uint32 status_code = 6 [json_name = "statusCode"];</code>.
     *
     * @param  int  $var
     *
     * @return $this
     */
    public function setStatusCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->status_code = $var;

        return $this;
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HTTP::class, \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\Trace_HTTP::class);
