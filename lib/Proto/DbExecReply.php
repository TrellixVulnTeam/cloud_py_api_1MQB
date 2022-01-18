<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: db.proto

namespace OCA\Cloud_Py_API\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OCA.Cloud_Py_API.Proto.DbExecReply</code>
 */
class DbExecReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 nAffectedRows = 1;</code>
     */
    protected $nAffectedRows = 0;
    /**
     * Generated from protobuf field <code>int64 lastInsertId = 2;</code>
     */
    protected $lastInsertId = 0;
    /**
     * Generated from protobuf field <code>string error = 3;</code>
     */
    protected $error = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $nAffectedRows
     *     @type int|string $lastInsertId
     *     @type string $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Db::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 nAffectedRows = 1;</code>
     * @return int|string
     */
    public function getNAffectedRows()
    {
        return $this->nAffectedRows;
    }

    /**
     * Generated from protobuf field <code>int64 nAffectedRows = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNAffectedRows($var)
    {
        GPBUtil::checkInt64($var);
        $this->nAffectedRows = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 lastInsertId = 2;</code>
     * @return int|string
     */
    public function getLastInsertId()
    {
        return $this->lastInsertId;
    }

    /**
     * Generated from protobuf field <code>int64 lastInsertId = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastInsertId($var)
    {
        GPBUtil::checkInt64($var);
        $this->lastInsertId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 3;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}

