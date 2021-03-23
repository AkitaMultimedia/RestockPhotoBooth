<?php

namespace ContainerWvXo1vK;

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1c77f = null;
    private $initializer105d8 = null;
    private static $publicProperties381cf = [
        
    ];
    public function getConnection()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getConnection', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getMetadataFactory', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getExpressionBuilder', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'beginTransaction', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getCache', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getCache();
    }
    public function transactional($func)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'transactional', array('func' => $func), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->transactional($func);
    }
    public function commit()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'commit', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->commit();
    }
    public function rollback()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'rollback', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getClassMetadata', array('className' => $className), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'createQuery', array('dql' => $dql), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'createNamedQuery', array('name' => $name), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'createQueryBuilder', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'flush', array('entity' => $entity), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'clear', array('entityName' => $entityName), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->clear($entityName);
    }
    public function close()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'close', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->close();
    }
    public function persist($entity)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'persist', array('entity' => $entity), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'remove', array('entity' => $entity), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'refresh', array('entity' => $entity), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'detach', array('entity' => $entity), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'merge', array('entity' => $entity), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'contains', array('entity' => $entity), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getEventManager', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getConfiguration', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'isOpen', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getUnitOfWork', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getProxyFactory', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'initializeObject', array('obj' => $obj), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'getFilters', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'isFiltersStateClean', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'hasFilters', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return $this->valueHolder1c77f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer105d8 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder1c77f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1c77f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder1c77f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, '__get', ['name' => $name], $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        if (isset(self::$publicProperties381cf[$name])) {
            return $this->valueHolder1c77f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c77f;
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
        $targetObject = $this->valueHolder1c77f;
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
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c77f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder1c77f;
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
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, '__isset', array('name' => $name), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c77f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder1c77f;
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
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, '__unset', array('name' => $name), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c77f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder1c77f;
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
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, '__clone', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        $this->valueHolder1c77f = clone $this->valueHolder1c77f;
    }
    public function __sleep()
    {
        $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, '__sleep', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
        return array('valueHolder1c77f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer105d8 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer105d8;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer105d8 && ($this->initializer105d8->__invoke($valueHolder1c77f, $this, 'initializeProxy', array(), $this->initializer105d8) || 1) && $this->valueHolder1c77f = $valueHolder1c77f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1c77f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1c77f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
