<?php

namespace Proxies\__CG__\Ens\JobeetBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Affiliate extends \Ens\JobeetBundle\Entity\Affiliate implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setToken($token)
    {
        $this->__load();
        return parent::setToken($token);
    }

    public function getToken()
    {
        $this->__load();
        return parent::getToken();
    }

    public function setIsActive($isActive)
    {
        $this->__load();
        return parent::setIsActive($isActive);
    }

    public function getIsActive()
    {
        $this->__load();
        return parent::getIsActive();
    }

    public function setCreatedAt($createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function addCategorie(\Ens\JobeetBundle\Entity\Category $categories)
    {
        $this->__load();
        return parent::addCategorie($categories);
    }

    public function removeCategorie(\Ens\JobeetBundle\Entity\Category $categories)
    {
        $this->__load();
        return parent::removeCategorie($categories);
    }

    public function getCategories()
    {
        $this->__load();
        return parent::getCategories();
    }

    public function setCreatedAtValue()
    {
        $this->__load();
        return parent::setCreatedAtValue();
    }

    public function setTokenValue()
    {
        $this->__load();
        return parent::setTokenValue();
    }

    public function activate()
    {
        $this->__load();
        return parent::activate();
    }

    public function deactivate()
    {
        $this->__load();
        return parent::deactivate();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'url', 'email', 'token', 'is_active', 'created_at', 'categories');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}