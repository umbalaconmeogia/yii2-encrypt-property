<?php
namespace batsg\encrypt\property\models;

/**
 * Encrypt data saved in database.
 * <p />
 * A class that use EncryptedPropertyTrait should implements EncryptedPropertyInterface,
 * that defines mapping between attribute and encrypted value in db.
 * At this time, this is just a simple mapping between the attributed name and the DB field names,
 * but it need specify type, level of encryption...
 * <p />
 *
 * Model that uses this trait should override its __get() and __set() function as below.
 * <pre>
 * public function __get($name)
 * {
 *   return $this->getNormalOrDecryptedProperty($name);
 * }
 *
 * public function __set($name, $value)
 * {
 *   return $this->setNormalOrDecryptedProperty($name, $value);
 * }
 * </pre>
 */
trait EncryptedPropertyTrait
{
    /**
     * 
     * @param string $name
     */
    public function getNormalOrDecryptedProperty($name)
    {
        
    }

    /**
     * 
     * @param string $name
     * @param mixed $value
     */
    public function setNormalOrDecryptedProperty($name, $value)
    {
        
    }
    
    /**
     * @param string $name
     */
    protected function isDecryptedProperty($name)
    {
        
    }
    
    /**
     * 
     * @param string $name
     */
    protected function getEncryptedPropertyValue($name)
    {
        
    }
    
    protected function encryptedPropertiesDefinition()
    {
    }
}