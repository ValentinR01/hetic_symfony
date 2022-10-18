<?php

namespace ContainerCafWIBF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1da61 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4c83a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb45ae = [
        
    ];

    public function getConnection()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getConnection', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getMetadataFactory', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getExpressionBuilder', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'beginTransaction', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getCache', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'transactional', array('func' => $func), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'commit', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->commit();
    }

    public function rollback()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'rollback', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getClassMetadata', array('className' => $className), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'createQuery', array('dql' => $dql), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'createNamedQuery', array('name' => $name), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'createQueryBuilder', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'flush', array('entity' => $entity), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'clear', array('entityName' => $entityName), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->clear($entityName);
    }

    public function close()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'close', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->close();
    }

    public function persist($entity)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'persist', array('entity' => $entity), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'remove', array('entity' => $entity), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'refresh', array('entity' => $entity), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'detach', array('entity' => $entity), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'merge', array('entity' => $entity), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'contains', array('entity' => $entity), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getEventManager', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getConfiguration', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'isOpen', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getUnitOfWork', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getProxyFactory', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'initializeObject', array('obj' => $obj), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'getFilters', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'isFiltersStateClean', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'hasFilters', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return $this->valueHolder1da61->hasFilters();
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

        $instance->initializer4c83a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1da61) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1da61 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1da61->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, '__get', ['name' => $name], $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        if (isset(self::$publicPropertiesb45ae[$name])) {
            return $this->valueHolder1da61->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1da61;

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

        $targetObject = $this->valueHolder1da61;
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
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1da61;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1da61;
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
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, '__isset', array('name' => $name), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1da61;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1da61;
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
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, '__unset', array('name' => $name), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1da61;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1da61;
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
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, '__clone', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        $this->valueHolder1da61 = clone $this->valueHolder1da61;
    }

    public function __sleep()
    {
        $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, '__sleep', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;

        return array('valueHolder1da61');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4c83a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4c83a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4c83a && ($this->initializer4c83a->__invoke($valueHolder1da61, $this, 'initializeProxy', array(), $this->initializer4c83a) || 1) && $this->valueHolder1da61 = $valueHolder1da61;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1da61;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1da61;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
