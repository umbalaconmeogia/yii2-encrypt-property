<?php
namespace batsg\encrypt\property\models;

interface EncryptedPropertyInterface
{
    /**
     * Define mapping between the encrypted property (db column) and the
     * decrypted property (virtual property).
     * @return array
     */
    public function encryptedPropertyRules();
}