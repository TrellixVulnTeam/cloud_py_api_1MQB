<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fs.proto

namespace GPBMetadata;

class Fs
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
fs.protoOCA.Cloud_Py_API.Proto"&
fsId
userId (	
fileId ("@
FsGetInfoRequest,
fileId (2.OCA.Cloud_Py_API.Proto.fsId"�

FsNodeInfo,
fileId (2.OCA.Cloud_Py_API.Proto.fsId
is_dir (
is_local (
mimetype (	
name (	
internal_path (	
abs_path (	
size (
permissions	 (
mtime
 (
checksum (	
	encrypted (
etag (	
	ownerName (	
	storageId (	
mountId ("<
FsListRequest+
dirId (2.OCA.Cloud_Py_API.Proto.fsId"@
FsListReply1
nodes (2".OCA.Cloud_Py_API.Proto.FsNodeInfo"d
FsReadRequest,
fileId (2.OCA.Cloud_Py_API.Proto.fsId
offset (
bytes_to_read ("c
FsReadReply5
resCode (2$.OCA.Cloud_Py_API.Proto.fsResultCode
last (
content ("t
FsCreateRequest1
parentDirId (2.OCA.Cloud_Py_API.Proto.fsId
name (	
is_file (
content ("t
FsCreateReply5
resCode (2$.OCA.Cloud_Py_API.Proto.fsResultCode,
fileId (2.OCA.Cloud_Py_API.Proto.fsId"]
FsWriteRequest,
fileId (2.OCA.Cloud_Py_API.Proto.fsId
last (
content ("?
FsDeleteRequest,
fileId (2.OCA.Cloud_Py_API.Proto.fsId"@
FsReply5
resCode (2$.OCA.Cloud_Py_API.Proto.fsResultCode"_
FsMoveRequest,
fileId (2.OCA.Cloud_Py_API.Proto.fsId

targetPath (	
copy ("r
FsMoveReply5
resCode (2$.OCA.Cloud_Py_API.Proto.fsResultCode,
fileId (2.OCA.Cloud_Py_API.Proto.fsId*X
fsResultCode
NO_ERROR 
NOT_PERMITTED

LOCKED
	NOT_FOUND
IO_ERRORbproto3'
        , true);

        static::$is_initialized = true;
    }
}

