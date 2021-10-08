<?php

namespace Symfony\Config\VichUploader\Metadata;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FileCacheConfig 
{
    private $dir;
    
    /**
     * @default '%kernel.cache_dir%/vich_uploader'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dir($value): self
    {
        $this->dir = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['dir'])) {
            $this->dir = $value['dir'];
            unset($value['dir']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->dir) {
            $output['dir'] = $this->dir;
        }
    
        return $output;
    }
    

}
