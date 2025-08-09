<?php

namespace ContainerIk8xhgk;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0fd98 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer821e7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6a1bc = [
        
    ];

    public function getConnection()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getConnection', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getMetadataFactory', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getExpressionBuilder', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'beginTransaction', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getCache', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getCache();
    }

    public function transactional($func)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'transactional', array('func' => $func), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'wrapInTransaction', array('func' => $func), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'commit', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->commit();
    }

    public function rollback()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'rollback', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getClassMetadata', array('className' => $className), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'createQuery', array('dql' => $dql), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'createNamedQuery', array('name' => $name), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'createQueryBuilder', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'flush', array('entity' => $entity), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'clear', array('entityName' => $entityName), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->clear($entityName);
    }

    public function close()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'close', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->close();
    }

    public function persist($entity)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'persist', array('entity' => $entity), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'remove', array('entity' => $entity), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'refresh', array('entity' => $entity), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'detach', array('entity' => $entity), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'merge', array('entity' => $entity), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getRepository', array('entityName' => $entityName), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'contains', array('entity' => $entity), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getEventManager', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getConfiguration', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'isOpen', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getUnitOfWork', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getProxyFactory', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'initializeObject', array('obj' => $obj), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'getFilters', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'isFiltersStateClean', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'hasFilters', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return $this->valueHolder0fd98->hasFilters();
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

        $instance->initializer821e7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0fd98) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0fd98 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0fd98->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, '__get', ['name' => $name], $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        if (isset(self::$publicProperties6a1bc[$name])) {
            return $this->valueHolder0fd98->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fd98;

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

        $targetObject = $this->valueHolder0fd98;
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
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fd98;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0fd98;
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
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, '__isset', array('name' => $name), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fd98;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0fd98;
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
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, '__unset', array('name' => $name), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fd98;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0fd98;
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
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, '__clone', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        $this->valueHolder0fd98 = clone $this->valueHolder0fd98;
    }

    public function __sleep()
    {
        $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, '__sleep', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;

        return array('valueHolder0fd98');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer821e7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer821e7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer821e7 && ($this->initializer821e7->__invoke($valueHolder0fd98, $this, 'initializeProxy', array(), $this->initializer821e7) || 1) && $this->valueHolder0fd98 = $valueHolder0fd98;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0fd98;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0fd98;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
