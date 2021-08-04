<?php

namespace ContainerWFx6Gfw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder47349 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer59986 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties375f7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getConnection', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getMetadataFactory', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getExpressionBuilder', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'beginTransaction', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getCache', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getCache();
    }

    public function transactional($func)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'transactional', array('func' => $func), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->transactional($func);
    }

    public function commit()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'commit', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->commit();
    }

    public function rollback()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'rollback', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getClassMetadata', array('className' => $className), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'createQuery', array('dql' => $dql), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'createNamedQuery', array('name' => $name), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'createQueryBuilder', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'flush', array('entity' => $entity), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'clear', array('entityName' => $entityName), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->clear($entityName);
    }

    public function close()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'close', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->close();
    }

    public function persist($entity)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'persist', array('entity' => $entity), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'remove', array('entity' => $entity), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'refresh', array('entity' => $entity), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'detach', array('entity' => $entity), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'merge', array('entity' => $entity), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getRepository', array('entityName' => $entityName), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'contains', array('entity' => $entity), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getEventManager', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getConfiguration', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'isOpen', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getUnitOfWork', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getProxyFactory', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'initializeObject', array('obj' => $obj), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'getFilters', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'isFiltersStateClean', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'hasFilters', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return $this->valueHolder47349->hasFilters();
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

        $instance->initializer59986 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder47349) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder47349 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder47349->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, '__get', ['name' => $name], $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        if (isset(self::$publicProperties375f7[$name])) {
            return $this->valueHolder47349->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47349;

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

        $targetObject = $this->valueHolder47349;
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
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47349;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder47349;
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
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, '__isset', array('name' => $name), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47349;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder47349;
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
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, '__unset', array('name' => $name), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder47349;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder47349;
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
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, '__clone', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        $this->valueHolder47349 = clone $this->valueHolder47349;
    }

    public function __sleep()
    {
        $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, '__sleep', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;

        return array('valueHolder47349');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer59986 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer59986;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer59986 && ($this->initializer59986->__invoke($valueHolder47349, $this, 'initializeProxy', array(), $this->initializer59986) || 1) && $this->valueHolder47349 = $valueHolder47349;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder47349;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder47349;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
