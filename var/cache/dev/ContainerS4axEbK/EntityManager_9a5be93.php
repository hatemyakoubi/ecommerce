<?php

namespace ContainerS4axEbK;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9a952 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer54d4e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb6568 = [
        
    ];

    public function getConnection()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getConnection', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getMetadataFactory', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getExpressionBuilder', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'beginTransaction', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getCache', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getCache();
    }

    public function transactional($func)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'transactional', array('func' => $func), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'wrapInTransaction', array('func' => $func), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'commit', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->commit();
    }

    public function rollback()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'rollback', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getClassMetadata', array('className' => $className), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'createQuery', array('dql' => $dql), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'createNamedQuery', array('name' => $name), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'createQueryBuilder', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'flush', array('entity' => $entity), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'clear', array('entityName' => $entityName), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->clear($entityName);
    }

    public function close()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'close', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->close();
    }

    public function persist($entity)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'persist', array('entity' => $entity), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'remove', array('entity' => $entity), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'refresh', array('entity' => $entity), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'detach', array('entity' => $entity), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'merge', array('entity' => $entity), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getRepository', array('entityName' => $entityName), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'contains', array('entity' => $entity), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getEventManager', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getConfiguration', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'isOpen', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getUnitOfWork', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getProxyFactory', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'initializeObject', array('obj' => $obj), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'getFilters', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'isFiltersStateClean', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'hasFilters', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return $this->valueHolder9a952->hasFilters();
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

        $instance->initializer54d4e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9a952) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9a952 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9a952->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, '__get', ['name' => $name], $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        if (isset(self::$publicPropertiesb6568[$name])) {
            return $this->valueHolder9a952->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a952;

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

        $targetObject = $this->valueHolder9a952;
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
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a952;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9a952;
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
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, '__isset', array('name' => $name), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a952;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9a952;
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
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, '__unset', array('name' => $name), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a952;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9a952;
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
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, '__clone', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        $this->valueHolder9a952 = clone $this->valueHolder9a952;
    }

    public function __sleep()
    {
        $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, '__sleep', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;

        return array('valueHolder9a952');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer54d4e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer54d4e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer54d4e && ($this->initializer54d4e->__invoke($valueHolder9a952, $this, 'initializeProxy', array(), $this->initializer54d4e) || 1) && $this->valueHolder9a952 = $valueHolder9a952;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9a952;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9a952;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
