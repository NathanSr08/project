<?php

namespace ContainerMaOsKcJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder01115 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer201d8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1cc9e = [
        
    ];

    public function getConnection()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getConnection', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getMetadataFactory', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getExpressionBuilder', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'beginTransaction', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getCache', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getCache();
    }

    public function transactional($func)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'transactional', array('func' => $func), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'wrapInTransaction', array('func' => $func), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'commit', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->commit();
    }

    public function rollback()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'rollback', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getClassMetadata', array('className' => $className), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'createQuery', array('dql' => $dql), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'createNamedQuery', array('name' => $name), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'createQueryBuilder', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'flush', array('entity' => $entity), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'clear', array('entityName' => $entityName), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->clear($entityName);
    }

    public function close()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'close', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->close();
    }

    public function persist($entity)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'persist', array('entity' => $entity), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'remove', array('entity' => $entity), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'refresh', array('entity' => $entity), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'detach', array('entity' => $entity), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'merge', array('entity' => $entity), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getRepository', array('entityName' => $entityName), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'contains', array('entity' => $entity), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getEventManager', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getConfiguration', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'isOpen', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getUnitOfWork', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getProxyFactory', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'initializeObject', array('obj' => $obj), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'getFilters', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'isFiltersStateClean', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'hasFilters', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return $this->valueHolder01115->hasFilters();
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

        $instance->initializer201d8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder01115) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder01115 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder01115->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, '__get', ['name' => $name], $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        if (isset(self::$publicProperties1cc9e[$name])) {
            return $this->valueHolder01115->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01115;

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

        $targetObject = $this->valueHolder01115;
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
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01115;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder01115;
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
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, '__isset', array('name' => $name), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01115;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder01115;
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
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, '__unset', array('name' => $name), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01115;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder01115;
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
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, '__clone', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        $this->valueHolder01115 = clone $this->valueHolder01115;
    }

    public function __sleep()
    {
        $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, '__sleep', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;

        return array('valueHolder01115');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer201d8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer201d8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer201d8 && ($this->initializer201d8->__invoke($valueHolder01115, $this, 'initializeProxy', array(), $this->initializer201d8) || 1) && $this->valueHolder01115 = $valueHolder01115;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder01115;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder01115;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
