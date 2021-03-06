<?php
namespace Midi\Koala\Replaying;

/**
 * Autogenerated by Disf-CodeGen (0.1.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */    

/** 
    * @property \Midi\Koala\Replaying\ReturnInbound ReturnInbound
    * @property \Midi\Koala\Replayed\AppendFile[] AppendFiles
    * @property \Midi\Koala\Replaying\CallOutbound[] CallOutbounds
    * @property string[] MockFiles 
    * @property \Midi\Koala\Replaying\CallFromInbound CallFromInbound
    * @property string[] RedirectDirs 
    * @property string SessionId 
    * @property string[] TracePaths 
*/ 
class ReplayingSession extends \ArrayObject {

    public static $SCHEMA = array( 
        'disfSchemaFormatVersion' => 1003,
        'isUnion' => false,
        'classObject' => ReplayingSession::class,
        'className' => 'Midi\Koala\Replaying\ReplayingSession',
        'annotations' => array(),
        'fields' => array(
            "SessionId" => array(
                "fieldId" => 1, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "CallFromInbound" => array(
                "fieldId" => 2, 
                "thriftType" => 'STRUCT',
                "isRequired" => False,
                "annotations" => array(),
                "classObject" => \Midi\Koala\Replaying\CallFromInbound::class,
            ),
            "ReturnInbound" => array(
                "fieldId" => 3, 
                "thriftType" => 'STRUCT',
                "isRequired" => False,
                "annotations" => array(),
                "classObject" => \Midi\Koala\Replaying\ReturnInbound::class,
            ),
            "CallOutbounds" => array(
                "fieldId" => 4, 
                "thriftType" => 'LIST',
                "isRequired" => False,
                "annotations" => array(),
                "classObject" => \Midi\Koala\Replaying\CallOutbound::class,
            ),
            "MockFiles" => array(
                "fieldId" => 5, 
                "thriftType" => 'MAP',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "RedirectDirs" => array(
                "fieldId" => 6, 
                "thriftType" => 'MAP',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "TracePaths" => array(
                "fieldId" => 7, 
                "thriftType" => 'LIST',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "AppendFiles" => array(
                "fieldId" => 8, 
                "thriftType" => 'LIST',
                "isRequired" => False,
                "annotations" => array(),
                "classObject" => \Midi\Koala\Replayed\AppendFile::class,
            ),
        ),
    );

    public function __construct($array = null) 
    {
        if (!isset($array)) { 
            parent::__construct(array(), \ArrayObject::ARRAY_AS_PROPS);
            return;
        }

        parent::__construct($array, \ArrayObject::ARRAY_AS_PROPS); 

        if(isset($array["ReturnInbound"])) { 
            $this->setReturnInbound($array["ReturnInbound"]);
        }

        if(isset($array["AppendFiles"])) { 
            $this->setAppendFiles($array["AppendFiles"]);
        }

        if(isset($array["CallOutbounds"])) { 
            $this->setCallOutbounds($array["CallOutbounds"]);
        }

        if(isset($array["MockFiles"])) { 
            $this->setMockFiles($array["MockFiles"]);
        }

        if(isset($array["CallFromInbound"])) { 
            $this->setCallFromInbound($array["CallFromInbound"]);
        }

        if(isset($array["RedirectDirs"])) { 
            $this->setRedirectDirs($array["RedirectDirs"]);
        }

        if(isset($array["SessionId"])) { 
            $this->setSessionId($array["SessionId"]);
        }

        if(isset($array["TracePaths"])) { 
            $this->setTracePaths($array["TracePaths"]);
        }

    }

    /** 
     * @return \Midi\Koala\Replaying\ReturnInbound
    */ 
    public function getReturnInbound()/* : \Midi\Koala\Replaying\ReturnInbound */ {
        return \Midi\Koala\Common\TypeConverter::to_struct($this["ReturnInbound"], \Midi\Koala\Replaying\ReturnInbound::class);
    }

    /** 
     * @param \Midi\Koala\Replaying\ReturnInbound $val
    */ 
    public function setReturnInbound(/* \Midi\Koala\Replaying\ReturnInbound */ $val) {
        $this["ReturnInbound"] = \Midi\Koala\Common\TypeConverter::to_struct($val, \Midi\Koala\Replaying\ReturnInbound::class);
    }

    /** 
     * @return \Midi\Koala\Replayed\AppendFile[]
    */ 
    public function getAppendFiles()/* : \Midi\Koala\Replayed\AppendFile[] */ {
        return \Midi\Koala\Common\TypeConverter::to_array($this["AppendFiles"], '\Midi\Koala\Common\TypeConverter::to_struct', array(\Midi\Koala\Replayed\AppendFile::class,));
    }

    /** 
     * @param \Midi\Koala\Replayed\AppendFile[] $val
    */ 
    public function setAppendFiles(/* \Midi\Koala\Replayed\AppendFile[] */ $val) {
        $this["AppendFiles"] = \Midi\Koala\Common\TypeConverter::to_array($val, '\Midi\Koala\Common\TypeConverter::to_struct', array(\Midi\Koala\Replayed\AppendFile::class,));
    }

    /** 
     * @return \Midi\Koala\Replaying\CallOutbound[]
    */ 
    public function getCallOutbounds()/* : \Midi\Koala\Replaying\CallOutbound[] */ {
        return \Midi\Koala\Common\TypeConverter::to_array($this["CallOutbounds"], '\Midi\Koala\Common\TypeConverter::to_struct', array(\Midi\Koala\Replaying\CallOutbound::class,));
    }

    /** 
     * @param \Midi\Koala\Replaying\CallOutbound[] $val
    */ 
    public function setCallOutbounds(/* \Midi\Koala\Replaying\CallOutbound[] */ $val) {
        $this["CallOutbounds"] = \Midi\Koala\Common\TypeConverter::to_array($val, '\Midi\Koala\Common\TypeConverter::to_struct', array(\Midi\Koala\Replaying\CallOutbound::class,));
    }

    /** 
     * @return string[] 
    */ 
    public function getMockFiles()/* : string[] */ {
        return \Midi\Koala\Common\TypeConverter::to_array($this["MockFiles"], '\Midi\Koala\Common\TypeConverter::to_string', array());
    }

    /** 
     * @param string[] $val 
    */ 
    public function setMockFiles(/* string[] */ $val) {
        $this["MockFiles"] = \Midi\Koala\Common\TypeConverter::to_array($val, '\Midi\Koala\Common\TypeConverter::to_string', array());
    }

    /** 
     * @return \Midi\Koala\Replaying\CallFromInbound
    */ 
    public function getCallFromInbound()/* : \Midi\Koala\Replaying\CallFromInbound */ {
        return \Midi\Koala\Common\TypeConverter::to_struct($this["CallFromInbound"], \Midi\Koala\Replaying\CallFromInbound::class);
    }

    /** 
     * @param \Midi\Koala\Replaying\CallFromInbound $val
    */ 
    public function setCallFromInbound(/* \Midi\Koala\Replaying\CallFromInbound */ $val) {
        $this["CallFromInbound"] = \Midi\Koala\Common\TypeConverter::to_struct($val, \Midi\Koala\Replaying\CallFromInbound::class);
    }

    /** 
     * @return string[] 
    */ 
    public function getRedirectDirs()/* : string[] */ {
        return \Midi\Koala\Common\TypeConverter::to_array($this["RedirectDirs"], '\Midi\Koala\Common\TypeConverter::to_string', array());
    }

    /** 
     * @param string[] $val 
    */ 
    public function setRedirectDirs(/* string[] */ $val) {
        $this["RedirectDirs"] = \Midi\Koala\Common\TypeConverter::to_array($val, '\Midi\Koala\Common\TypeConverter::to_string', array());
    }

    /** 
     * @return string 
    */ 
    public function getSessionId()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["SessionId"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setSessionId(/* string */ $val) {
        $this["SessionId"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return string[] 
    */ 
    public function getTracePaths()/* : string[] */ {
        return \Midi\Koala\Common\TypeConverter::to_array($this["TracePaths"], '\Midi\Koala\Common\TypeConverter::to_string', array());
    }

    /** 
     * @param string[] $val 
    */ 
    public function setTracePaths(/* string[] */ $val) {
        $this["TracePaths"] = \Midi\Koala\Common\TypeConverter::to_array($val, '\Midi\Koala\Common\TypeConverter::to_string', array());
    }
}

/* THRIFT IDL
namespace php koala.replaying
include "CallFromInbound.thrift"
include "ReturnInbound.thrift"
include "CallOutbound.thrift"
include "../replayed/AppendFile.thrift"

struct ReplayingSession {
    1: string SessionId
    2: CallFromInbound.CallFromInbound CallFromInbound
    3: ReturnInbound.ReturnInbound ReturnInbound
    4: list<CallOutbound.CallOutbound> CallOutbounds
    5: map<string, binary> MockFiles
    6: map<string, string> RedirectDirs
    7: list<string> TracePaths
    8: list<AppendFile.AppendFile> AppendFiles
}
*/