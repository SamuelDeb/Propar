<?php

namespace ContainerRD4d7GD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7da5c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7463a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesca998 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getConnection', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getMetadataFactory', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getExpressionBuilder', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'beginTransaction', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getCache', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'transactional', array('func' => $func), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'commit', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->commit();
    }

    public function rollback()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'rollback', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getClassMetadata', array('className' => $className), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'createQuery', array('dql' => $dql), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'createNamedQuery', array('name' => $name), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'createQueryBuilder', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'flush', array('entity' => $entity), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'clear', array('entityName' => $entityName), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->clear($entityName);
    }

    public function close()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'close', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->close();
    }

    public function persist($entity)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'persist', array('entity' => $entity), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'remove', array('entity' => $entity), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'refresh', array('entity' => $entity), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'detach', array('entity' => $entity), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'merge', array('entity' => $entity), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'contains', array('entity' => $entity), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getEventManager', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getConfiguration', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'isOpen', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getUnitOfWork', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getProxyFactory', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'initializeObject', array('obj' => $obj), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'getFilters', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'isFiltersStateClean', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'hasFilters', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return $this->valueHolder7da5c->hasFilters();
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

        $instance->initializer7463a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7da5c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7da5c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7da5c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, '__get', ['name' => $name], $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        if (isset(self::$publicPropertiesca998[$name])) {
            return $this->valueHolder7da5c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7da5c;

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

        $targetObject = $this->valueHolder7da5c;
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
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7da5c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7da5c;
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
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, '__isset', array('name' => $name), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7da5c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7da5c;
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
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, '__unset', array('name' => $name), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7da5c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7da5c;
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
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, '__clone', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        $this->valueHolder7da5c = clone $this->valueHolder7da5c;
    }

    public function __sleep()
    {
        $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, '__sleep', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;

        return array('valueHolder7da5c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7463a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7463a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7463a && ($this->initializer7463a->__invoke($valueHolder7da5c, $this, 'initializeProxy', array(), $this->initializer7463a) || 1) && $this->valueHolder7da5c = $valueHolder7da5c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7da5c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7da5c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
