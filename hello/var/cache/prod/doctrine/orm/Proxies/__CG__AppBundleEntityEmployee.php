<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Employee extends \AppBundle\Entity\Employee implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'personalId', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'employeeName', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'employeeFullname', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'employeeAddress', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'phoneNumber', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'joinDate', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'resignDate', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'picture', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'isActive', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'employeeId', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'personalId', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'employeeName', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'employeeFullname', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'employeeAddress', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'phoneNumber', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'joinDate', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'resignDate', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'picture', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'isActive', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'employeeId', '' . "\0" . 'AppBundle\\Entity\\Employee' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Employee $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setPersonalId($personalId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersonalId', [$personalId]);

        return parent::setPersonalId($personalId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersonalId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersonalId', []);

        return parent::getPersonalId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeeName($employeeName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeeName', [$employeeName]);

        return parent::setEmployeeName($employeeName);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeeName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeeName', []);

        return parent::getEmployeeName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeeFullname($employeeFullname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeeFullname', [$employeeFullname]);

        return parent::setEmployeeFullname($employeeFullname);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeeFullname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeeFullname', []);

        return parent::getEmployeeFullname();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeeAddress($employeeAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeeAddress', [$employeeAddress]);

        return parent::setEmployeeAddress($employeeAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeeAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeeAddress', []);

        return parent::getEmployeeAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNumber($phoneNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNumber', [$phoneNumber]);

        return parent::setPhoneNumber($phoneNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNumber', []);

        return parent::getPhoneNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setJoinDate($joinDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJoinDate', [$joinDate]);

        return parent::setJoinDate($joinDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getJoinDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJoinDate', []);

        return parent::getJoinDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setResignDate($resignDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResignDate', [$resignDate]);

        return parent::setResignDate($resignDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getResignDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResignDate', []);

        return parent::getResignDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture($picture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', [$picture]);

        return parent::setPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', []);

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeeId($employeeId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeeId', [$employeeId]);

        return parent::setEmployeeId($employeeId);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeeId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getEmployeeId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeeId', []);

        return parent::getEmployeeId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\AppBundle\Entity\TUser $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

}
