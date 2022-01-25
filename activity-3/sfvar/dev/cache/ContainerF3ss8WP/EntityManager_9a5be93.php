<?php

namespace ContainerF3ss8WP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf0d9c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3c6e0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2882c = [
        
    ];

    public function getConnection()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getConnection', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getMetadataFactory', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getExpressionBuilder', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'beginTransaction', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getCache', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'transactional', array('func' => $func), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'commit', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->commit();
    }

    public function rollback()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'rollback', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getClassMetadata', array('className' => $className), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'createQuery', array('dql' => $dql), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'createNamedQuery', array('name' => $name), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'createQueryBuilder', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'flush', array('entity' => $entity), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'clear', array('entityName' => $entityName), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->clear($entityName);
    }

    public function close()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'close', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->close();
    }

    public function persist($entity)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'persist', array('entity' => $entity), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'remove', array('entity' => $entity), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'refresh', array('entity' => $entity), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'detach', array('entity' => $entity), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'merge', array('entity' => $entity), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'contains', array('entity' => $entity), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getEventManager', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getConfiguration', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'isOpen', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getUnitOfWork', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getProxyFactory', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'initializeObject', array('obj' => $obj), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'getFilters', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'isFiltersStateClean', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'hasFilters', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return $this->valueHolderf0d9c->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer3c6e0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf0d9c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf0d9c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf0d9c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, '__get', ['name' => $name], $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        if (isset(self::$publicProperties2882c[$name])) {
            return $this->valueHolderf0d9c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0d9c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf0d9c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0d9c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf0d9c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, '__isset', array('name' => $name), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0d9c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf0d9c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, '__unset', array('name' => $name), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0d9c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf0d9c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, '__clone', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        $this->valueHolderf0d9c = clone $this->valueHolderf0d9c;
    }

    public function __sleep()
    {
        $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, '__sleep', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;

        return array('valueHolderf0d9c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3c6e0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3c6e0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3c6e0 && ($this->initializer3c6e0->__invoke($valueHolderf0d9c, $this, 'initializeProxy', array(), $this->initializer3c6e0) || 1) && $this->valueHolderf0d9c = $valueHolderf0d9c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0d9c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0d9c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
