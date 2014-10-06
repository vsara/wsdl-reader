<?php
namespace Goetas\XML\WSDLReader\Wsdl\PortType;

use Goetas\XML\WSDLReader\Wsdl\ExtensibleAttributesDocumented;
/**
 * XSD Type: tParam
 */
class Param extends ExtensibleAttributesDocumented
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $message;

    protected $operation;


    public function __construct(Operation $operation, $name)
    {
        parent::__construct($operation->getDefinition());

        $this->name = $name;
        $this->operation = $operation;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param $name string
     * @return \Goetas\XML\WSDLReader\Wsdl\PortType\Param
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * @param $message string
     * @return \Goetas\XML\WSDLReader\Wsdl\PortType\Param
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

}