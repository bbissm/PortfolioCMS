<?php

namespace Symfony\Config\VichUploader;

require_once __DIR__.\DIRECTORY_SEPARATOR.'MappingsConfig'.\DIRECTORY_SEPARATOR.'NamerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MappingsConfig'.\DIRECTORY_SEPARATOR.'DirectoryNamerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MappingsConfig 
{
    private $uriPrefix;
    private $uploadDestination;
    private $namer;
    private $directoryNamer;
    private $deleteOnRemove;
    private $deleteOnUpdate;
    private $injectOnLoad;
    private $dbDriver;
    
    /**
     * @default '/uploads'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uriPrefix($value): self
    {
        $this->uriPrefix = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uploadDestination($value): self
    {
        $this->uploadDestination = $value;
    
        return $this;
    }
    
    public function namer(array $value = []): \Symfony\Config\VichUploader\MappingsConfig\NamerConfig
    {
        if (null === $this->namer) {
            $this->namer = new \Symfony\Config\VichUploader\MappingsConfig\NamerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "namer()" has already been initialized. You cannot pass values the second time you call namer().');
        }
    
        return $this->namer;
    }
    
    public function directoryNamer(array $value = []): \Symfony\Config\VichUploader\MappingsConfig\DirectoryNamerConfig
    {
        if (null === $this->directoryNamer) {
            $this->directoryNamer = new \Symfony\Config\VichUploader\MappingsConfig\DirectoryNamerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "directoryNamer()" has already been initialized. You cannot pass values the second time you call directoryNamer().');
        }
    
        return $this->directoryNamer;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function deleteOnRemove($value): self
    {
        $this->deleteOnRemove = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function deleteOnUpdate($value): self
    {
        $this->deleteOnUpdate = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function injectOnLoad($value): self
    {
        $this->injectOnLoad = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dbDriver($value): self
    {
        $this->dbDriver = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['uri_prefix'])) {
            $this->uriPrefix = $value['uri_prefix'];
            unset($value['uri_prefix']);
        }
    
        if (isset($value['upload_destination'])) {
            $this->uploadDestination = $value['upload_destination'];
            unset($value['upload_destination']);
        }
    
        if (isset($value['namer'])) {
            $this->namer = new \Symfony\Config\VichUploader\MappingsConfig\NamerConfig($value['namer']);
            unset($value['namer']);
        }
    
        if (isset($value['directory_namer'])) {
            $this->directoryNamer = new \Symfony\Config\VichUploader\MappingsConfig\DirectoryNamerConfig($value['directory_namer']);
            unset($value['directory_namer']);
        }
    
        if (isset($value['delete_on_remove'])) {
            $this->deleteOnRemove = $value['delete_on_remove'];
            unset($value['delete_on_remove']);
        }
    
        if (isset($value['delete_on_update'])) {
            $this->deleteOnUpdate = $value['delete_on_update'];
            unset($value['delete_on_update']);
        }
    
        if (isset($value['inject_on_load'])) {
            $this->injectOnLoad = $value['inject_on_load'];
            unset($value['inject_on_load']);
        }
    
        if (isset($value['db_driver'])) {
            $this->dbDriver = $value['db_driver'];
            unset($value['db_driver']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->uriPrefix) {
            $output['uri_prefix'] = $this->uriPrefix;
        }
        if (null !== $this->uploadDestination) {
            $output['upload_destination'] = $this->uploadDestination;
        }
        if (null !== $this->namer) {
            $output['namer'] = $this->namer->toArray();
        }
        if (null !== $this->directoryNamer) {
            $output['directory_namer'] = $this->directoryNamer->toArray();
        }
        if (null !== $this->deleteOnRemove) {
            $output['delete_on_remove'] = $this->deleteOnRemove;
        }
        if (null !== $this->deleteOnUpdate) {
            $output['delete_on_update'] = $this->deleteOnUpdate;
        }
        if (null !== $this->injectOnLoad) {
            $output['inject_on_load'] = $this->injectOnLoad;
        }
        if (null !== $this->dbDriver) {
            $output['db_driver'] = $this->dbDriver;
        }
    
        return $output;
    }
    

}
