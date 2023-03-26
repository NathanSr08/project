<?php

namespace Container5hfuUaE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder97c13 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerde857 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1a90d = [
        
    ];

    public function getConnection()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getConnection', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getMetadataFactory', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getExpressionBuilder', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'beginTransaction', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getCache', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getCache();
    }

    public function transactional($func)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'transactional', array('func' => $func), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'wrapInTransaction', array('func' => $func), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'commit', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->commit();
    }

    public function rollback()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'rollback', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getClassMetadata', array('className' => $className), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'createQuery', array('dql' => $dql), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'createNamedQuery', array('name' => $name), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'createQueryBuilder', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'flush', array('entity' => $entity), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'clear', array('entityName' => $entityName), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->clear($entityName);
    }

    public function close()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'close', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->close();
    }

    public function persist($entity)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'persist', array('entity' => $entity), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'remove', array('entity' => $entity), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'detach', array('entity' => $entity), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'merge', array('entity' => $entity), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getRepository', array('entityName' => $entityName), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'contains', array('entity' => $entity), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getEventManager', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getConfiguration', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'isOpen', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getUnitOfWork', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getProxyFactory', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'initializeObject', array('obj' => $obj), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'getFilters', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'isFiltersStateClean', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'hasFilters', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return $this->valueHolder97c13->hasFilters();
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

        $instance->initializerde857 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder97c13) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder97c13 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder97c13->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, '__get', ['name' => $name], $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        if (isset(self::$publicProperties1a90d[$name])) {
            return $this->valueHolder97c13->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97c13;

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

        $targetObject = $this->valueHolder97c13;
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
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97c13;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder97c13;
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
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, '__isset', array('name' => $name), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97c13;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder97c13;
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
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, '__unset', array('name' => $name), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97c13;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder97c13;
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
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, '__clone', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        $this->valueHolder97c13 = clone $this->valueHolder97c13;
    }

    public function __sleep()
    {
        $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, '__sleep', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;

        return array('valueHolder97c13');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerde857 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerde857;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerde857 && ($this->initializerde857->__invoke($valueHolder97c13, $this, 'initializeProxy', array(), $this->initializerde857) || 1) && $this->valueHolder97c13 = $valueHolder97c13;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97c13;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97c13;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
