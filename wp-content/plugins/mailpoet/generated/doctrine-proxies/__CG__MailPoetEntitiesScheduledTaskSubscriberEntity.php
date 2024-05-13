<?php

namespace MailPoetDoctrineProxies\__CG__\MailPoet\Entities;

if (!defined('ABSPATH')) exit;



/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ScheduledTaskSubscriberEntity extends \MailPoet\Entities\ScheduledTaskSubscriberEntity implements \MailPoetVendor\Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'processed', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'failed', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'error', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'task', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'subscriber', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'createdAt', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'processed', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'failed', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'error', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'task', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'subscriber', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'createdAt', '' . "\0" . 'MailPoet\\Entities\\ScheduledTaskSubscriberEntity' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ScheduledTaskSubscriberEntity $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getProcessed(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcessed', []);

        return parent::getProcessed();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcessed(int $processed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcessed', [$processed]);

        return parent::setProcessed($processed);
    }

    /**
     * {@inheritDoc}
     */
    public function getFailed(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFailed', []);

        return parent::getFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function setFailed(int $failed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFailed', [$failed]);

        return parent::setFailed($failed);
    }

    /**
     * {@inheritDoc}
     */
    public function getError()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getError', []);

        return parent::getError();
    }

    /**
     * {@inheritDoc}
     */
    public function setError($error)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setError', [$error]);

        return parent::setError($error);
    }

    /**
     * {@inheritDoc}
     */
    public function getTask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTask', []);

        return parent::getTask();
    }

    /**
     * {@inheritDoc}
     */
    public function setTask(\MailPoet\Entities\ScheduledTaskEntity $task)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTask', [$task]);

        return parent::setTask($task);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriber', []);

        return parent::getSubscriber();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriberId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriberId', []);

        return parent::getSubscriberId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscriber(\MailPoet\Entities\SubscriberEntity $subscriber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscriber', [$subscriber]);

        return parent::setSubscriber($subscriber);
    }

    /**
     * {@inheritDoc}
     */
    public function resetToUnprocessed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetToUnprocessed', []);

        return parent::resetToUnprocessed();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

}
