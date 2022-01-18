<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core.proto

namespace OCA\Cloud_Py_API\Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>OCA.Cloud_Py_API.Proto.taskStatus</code>
 */
class taskStatus
{
    /**
     * Generated from protobuf enum <code>ST_SUCCESS = 0;</code>
     */
    const ST_SUCCESS = 0;
    /**
     * pyfrm init done, running target app
     *
     * Generated from protobuf enum <code>ST_IN_PROGRESS = 1;</code>
     */
    const ST_IN_PROGRESS = 1;
    /**
     * pyfrm cannot init target app
     *
     * Generated from protobuf enum <code>ST_INIT_ERROR = 2;</code>
     */
    const ST_INIT_ERROR = 2;
    /**
     * Unexpected exception occurred
     *
     * Generated from protobuf enum <code>ST_EXCEPTION = 3;</code>
     */
    const ST_EXCEPTION = 3;
    /**
     * Target app return error status
     *
     * Generated from protobuf enum <code>ST_ERROR = 4;</code>
     */
    const ST_ERROR = 4;
    /**
     * Default task state at start
     *
     * Generated from protobuf enum <code>ST_UNKNOWN = 5;</code>
     */
    const ST_UNKNOWN = 5;

    private static $valueToName = [
        self::ST_SUCCESS => 'ST_SUCCESS',
        self::ST_IN_PROGRESS => 'ST_IN_PROGRESS',
        self::ST_INIT_ERROR => 'ST_INIT_ERROR',
        self::ST_EXCEPTION => 'ST_EXCEPTION',
        self::ST_ERROR => 'ST_ERROR',
        self::ST_UNKNOWN => 'ST_UNKNOWN',
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

