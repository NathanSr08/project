<?php

namespace ContainerEndVxuj;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf3a1c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraa1d3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese058c = [
        
    ];

    public function getConnection()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getConnection', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getMetadataFactory', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getExpressionBuilder', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'beginTransaction', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getCache', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'transactional', array('func' => $func), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'commit', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->commit();
    }

    public function rollback()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'rollback', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getClassMetadata', array('className' => $className), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'createQuery', array('dql' => $dql), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'createNamedQuery', array('name' => $name), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'createQueryBuilder', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'flush', array('entity' => $entity), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'clear', array('entityName' => $entityName), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->clear($entityName);
    }

    public function close()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'close', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->close();
    }

    public function persist($entity)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'persist', array('entity' => $entity), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'remove', array('entity' => $entity), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'refresh', array('entity' => $entity), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'detach', array('entity' => $entity), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'merge', array('entity' => $entity), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'contains', array('entity' => $entity), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getEventManager', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getConfiguration', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'isOpen', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getUnitOfWork', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getProxyFactory', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'initializeObject', array('obj' => $obj), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'getFilters', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'isFiltersStateClean', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'hasFilters', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return $this->valueHolderf3a1c->hasFilters();
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

        $instance->initializeraa1d3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf3a1c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf3a1c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf3a1c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, '__get', ['name' => $name], $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        if (isset(self::$publicPropertiese058c[$name])) {
            return $this->valueHolderf3a1c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3a1c;

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

        $targetObject = $this->valueHolderf3a1c;
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
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3a1c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf3a1c;
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
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, '__isset', array('name' => $name), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3a1c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf3a1c;
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
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, '__unset', array('name' => $name), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3a1c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf3a1c;
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
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, '__clone', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        $this->valueHolderf3a1c = clone $this->valueHolderf3a1c;
    }

    public function __sleep()
    {
        $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, '__sleep', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;

        return array('valueHolderf3a1c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraa1d3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraa1d3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraa1d3 && ($this->initializeraa1d3->__invoke($valueHolderf3a1c, $this, 'initializeProxy', array(), $this->initializeraa1d3) || 1) && $this->valueHolderf3a1c = $valueHolderf3a1c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf3a1c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf3a1c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
