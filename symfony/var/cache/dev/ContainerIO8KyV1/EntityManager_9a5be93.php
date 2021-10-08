<?php

namespace ContainerIO8KyV1;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera7fa4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbe309 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1e36b = [
        
    ];

    public function getConnection()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getConnection', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getMetadataFactory', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getExpressionBuilder', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'beginTransaction', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getCache', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'transactional', array('func' => $func), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'commit', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->commit();
    }

    public function rollback()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'rollback', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getClassMetadata', array('className' => $className), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'createQuery', array('dql' => $dql), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'createNamedQuery', array('name' => $name), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'createQueryBuilder', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'flush', array('entity' => $entity), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'clear', array('entityName' => $entityName), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->clear($entityName);
    }

    public function close()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'close', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->close();
    }

    public function persist($entity)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'persist', array('entity' => $entity), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'remove', array('entity' => $entity), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'refresh', array('entity' => $entity), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'detach', array('entity' => $entity), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'merge', array('entity' => $entity), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'contains', array('entity' => $entity), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getEventManager', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getConfiguration', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'isOpen', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getUnitOfWork', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getProxyFactory', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'initializeObject', array('obj' => $obj), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'getFilters', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'isFiltersStateClean', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'hasFilters', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return $this->valueHoldera7fa4->hasFilters();
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

        $instance->initializerbe309 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera7fa4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera7fa4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera7fa4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, '__get', ['name' => $name], $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        if (isset(self::$publicProperties1e36b[$name])) {
            return $this->valueHoldera7fa4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7fa4;

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

        $targetObject = $this->valueHoldera7fa4;
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
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7fa4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera7fa4;
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
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, '__isset', array('name' => $name), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7fa4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera7fa4;
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
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, '__unset', array('name' => $name), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7fa4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera7fa4;
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
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, '__clone', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        $this->valueHoldera7fa4 = clone $this->valueHoldera7fa4;
    }

    public function __sleep()
    {
        $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, '__sleep', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;

        return array('valueHoldera7fa4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe309 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe309;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbe309 && ($this->initializerbe309->__invoke($valueHoldera7fa4, $this, 'initializeProxy', array(), $this->initializerbe309) || 1) && $this->valueHoldera7fa4 = $valueHoldera7fa4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera7fa4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera7fa4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
