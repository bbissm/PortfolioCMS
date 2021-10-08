<?php

namespace Symfony\Config\VichUploader;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'FileCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'DirectoryConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MetadataConfig 
{
    private $cache;
    private $fileCache;
    private $autoDetection;
    private $directories;
    
    /**
     * @default 'file'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): self
    {
        $this->cache = $value;
    
        return $this;
    }
    
    public function fileCache(array $value = []): \Symfony\Config\VichUploader\Metadata\FileCacheConfig
    {
        if (null === $this->fileCache) {
            $this->fileCache = new \Symfony\Config\VichUploader\Metadata\FileCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "fileCache()" has already been initialized. You cannot pass values the second time you call fileCache().');
        }
    
        return $this->fileCache;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoDetection($value): self
    {
        $this->autoDetection = $value;
    
        return $this;
    }
    
    public function directory(array $value = []): \Symfony\Config\VichUploader\Metadata\DirectoryConfig
    {
        return $this->directories[] = new \Symfony\Config\VichUploader\Metadata\DirectoryConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['cache'])) {
            $this->cache = $value['cache'];
            unset($value['cache']);
        }
    
        if (isset($value['file_cache'])) {
            $this->fileCache = new \Symfony\Config\VichUploader\Metadata\FileCacheConfig($value['file_cache']);
            unset($value['file_cache']);
        }
    
        if (isset($value['auto_detection'])) {
            $this->autoDetection = $value['auto_detection'];
            unset($value['auto_detection']);
        }
    
        if (isset($value['directories'])) {
            $this->directories = array_map(function ($v) { return new \Symfony\Config\VichUploader\Metadata\DirectoryConfig($v); }, $value['directories']);
            unset($value['directories']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->cache) {
            $output['cache'] = $this->cache;
        }
        if (null !== $this->fileCache) {
            $output['file_cache'] = $this->fileCache->toArray();
        }
        if (null !== $this->autoDetection) {
            $output['auto_detection'] = $this->autoDetection;
        }
        if (null !== $this->directories) {
            $output['directories'] = array_map(function ($v) { return $v->toArray(); }, $this->directories);
        }
    
        return $output;
    }
    

}
