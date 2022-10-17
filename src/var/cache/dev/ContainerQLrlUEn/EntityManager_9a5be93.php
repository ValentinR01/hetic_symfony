<?php

namespace ContainerQLrlUEn;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera313c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer81009 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese0e24 = [
        
    ];

    public function getConnection()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getConnection', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getMetadataFactory', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getExpressionBuilder', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'beginTransaction', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getCache', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'transactional', array('func' => $func), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'commit', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->commit();
    }

    public function rollback()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'rollback', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getClassMetadata', array('className' => $className), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'createQuery', array('dql' => $dql), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'createNamedQuery', array('name' => $name), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'createQueryBuilder', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'flush', array('entity' => $entity), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'clear', array('entityName' => $entityName), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->clear($entityName);
    }

    public function close()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'close', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->close();
    }

    public function persist($entity)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'persist', array('entity' => $entity), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'remove', array('entity' => $entity), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'refresh', array('entity' => $entity), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'detach', array('entity' => $entity), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'merge', array('entity' => $entity), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'contains', array('entity' => $entity), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getEventManager', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getConfiguration', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'isOpen', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getUnitOfWork', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getProxyFactory', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'initializeObject', array('obj' => $obj), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'getFilters', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'isFiltersStateClean', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'hasFilters', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return $this->valueHoldera313c->hasFilters();
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

        $instance->initializer81009 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera313c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera313c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera313c->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, '__get', ['name' => $name], $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        if (isset(self::$publicPropertiese0e24[$name])) {
            return $this->valueHoldera313c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera313c;

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

        $targetObject = $this->valueHoldera313c;
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
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera313c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera313c;
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
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, '__isset', array('name' => $name), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera313c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera313c;
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
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, '__unset', array('name' => $name), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera313c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera313c;
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
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, '__clone', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        $this->valueHoldera313c = clone $this->valueHoldera313c;
    }

    public function __sleep()
    {
        $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, '__sleep', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;

        return array('valueHoldera313c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer81009 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer81009;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer81009 && ($this->initializer81009->__invoke($valueHoldera313c, $this, 'initializeProxy', array(), $this->initializer81009) || 1) && $this->valueHoldera313c = $valueHoldera313c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera313c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera313c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
