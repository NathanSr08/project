<?php

namespace Container8MFYhEd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder68d3e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer340ec = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8b795 = [
        
    ];

    public function getConnection()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getConnection', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getMetadataFactory', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getExpressionBuilder', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'beginTransaction', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getCache', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'transactional', array('func' => $func), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'commit', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->commit();
    }

    public function rollback()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'rollback', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getClassMetadata', array('className' => $className), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'createQuery', array('dql' => $dql), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'createNamedQuery', array('name' => $name), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'createQueryBuilder', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'flush', array('entity' => $entity), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'clear', array('entityName' => $entityName), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->clear($entityName);
    }

    public function close()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'close', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->close();
    }

    public function persist($entity)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'persist', array('entity' => $entity), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'remove', array('entity' => $entity), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'detach', array('entity' => $entity), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'merge', array('entity' => $entity), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'contains', array('entity' => $entity), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getEventManager', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getConfiguration', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'isOpen', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getUnitOfWork', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getProxyFactory', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'initializeObject', array('obj' => $obj), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'getFilters', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'isFiltersStateClean', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'hasFilters', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return $this->valueHolder68d3e->hasFilters();
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

        $instance->initializer340ec = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder68d3e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder68d3e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder68d3e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, '__get', ['name' => $name], $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        if (isset(self::$publicProperties8b795[$name])) {
            return $this->valueHolder68d3e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d3e;

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

        $targetObject = $this->valueHolder68d3e;
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
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d3e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder68d3e;
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
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, '__isset', array('name' => $name), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d3e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder68d3e;
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
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, '__unset', array('name' => $name), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder68d3e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder68d3e;
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
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, '__clone', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        $this->valueHolder68d3e = clone $this->valueHolder68d3e;
    }

    public function __sleep()
    {
        $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, '__sleep', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;

        return array('valueHolder68d3e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer340ec = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer340ec;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer340ec && ($this->initializer340ec->__invoke($valueHolder68d3e, $this, 'initializeProxy', array(), $this->initializer340ec) || 1) && $this->valueHolder68d3e = $valueHolder68d3e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder68d3e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder68d3e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
