<?php
namespace batsg\encrypt\property\models;

/**
 * Encrypt data saved in database.
 * <p />
 * A class that use EncryptedPropertyTrait should defined its own $encryptedAttributeDbFields,
 * that defines mapping between attribute and encription value in db.
 * At this time, this is just a simple mapping between the attributed name and the DB field names,
 * but it need specify type, level of encryption...
 * <p />
 *
 * Model that uses this trait should override its __get() and __set() function as below.
 * <pre>
 * public function __get($name)
 * {
 *   return $this->getterEncryptedField($name);
 * }
 *
 * public function __set($name, $value)
 * {
 *   return $this->setterEncryptedField($name, $value);
 * }
 * </pre>
 *
 * @property string[] attributeEncryptionKeys
 */
trait EncryptedPropertyTrait
{
    
}