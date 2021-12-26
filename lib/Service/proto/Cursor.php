<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/core.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Cursor</code>
 */
class Cursor extends \Google\Protobuf\Internal\Message
{
    /**
     *msgClass.CURSOR
     *
     * Generated from protobuf field <code>.msgClass classId = 1;</code>
     */
    protected $classId = 0;
    /**
     * Generated from protobuf field <code>int64 handle = 2;</code>
     */
    protected $handle = 0;
    /**
     * Generated from protobuf field <code>.CursorCmd cmd = 3;</code>
     */
    protected $cmd = 0;
    /**
     * Generated from protobuf field <code>string error = 4;</code>
     */
    protected $error = '';
    /**
     *present only in reply
     *
     * Generated from protobuf field <code>repeated string columnName = 5;</code>
     */
    private $columnName;
    /**
     *present only in reply
     *
     * Generated from protobuf field <code>repeated bytes columnData = 6;</code>
     */
    private $columnData;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $classId
     *          msgClass.CURSOR
     *     @type int|string $handle
     *     @type int $cmd
     *     @type string $error
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $columnName
     *          present only in reply
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $columnData
     *          present only in reply
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Core::initOnce();
        parent::__construct($data);
    }

    /**
     *msgClass.CURSOR
     *
     * Generated from protobuf field <code>.msgClass classId = 1;</code>
     * @return int
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     *msgClass.CURSOR
     *
     * Generated from protobuf field <code>.msgClass classId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setClassId($var)
    {
        GPBUtil::checkEnum($var, \msgClass::class);
        $this->classId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 handle = 2;</code>
     * @return int|string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * Generated from protobuf field <code>int64 handle = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHandle($var)
    {
        GPBUtil::checkInt64($var);
        $this->handle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CursorCmd cmd = 3;</code>
     * @return int
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     * Generated from protobuf field <code>.CursorCmd cmd = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCmd($var)
    {
        GPBUtil::checkEnum($var, \CursorCmd::class);
        $this->cmd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 4;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     *present only in reply
     *
     * Generated from protobuf field <code>repeated string columnName = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumnName()
    {
        return $this->columnName;
    }

    /**
     *present only in reply
     *
     * Generated from protobuf field <code>repeated string columnName = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumnName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->columnName = $arr;

        return $this;
    }

    /**
     *present only in reply
     *
     * Generated from protobuf field <code>repeated bytes columnData = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumnData()
    {
        return $this->columnData;
    }

    /**
     *present only in reply
     *
     * Generated from protobuf field <code>repeated bytes columnData = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumnData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->columnData = $arr;

        return $this;
    }

}

