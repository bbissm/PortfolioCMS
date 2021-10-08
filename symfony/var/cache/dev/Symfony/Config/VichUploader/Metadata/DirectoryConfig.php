<?php

namespace Symfony\Config\VichUploader\Metadata;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DirectoryConfig 
{
    private $path;
    private $namespacePrefix;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): self
    {
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function namespacePrefix($value): self
    {
        $this->namespacePrefix = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['path'])) {
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (isset($value['namespace_prefix'])) {
            $this->namespacePrefix = $value['namespace_prefix'];
            unset($value['namespace_prefix']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->path) {
            $output['path'] = $this->path;
        }
        if (null !== $this->namespacePrefix) {
            $output['namespace_prefix'] = $this->namespacePrefix;
        }
    
        return $output;
    }
    

}
