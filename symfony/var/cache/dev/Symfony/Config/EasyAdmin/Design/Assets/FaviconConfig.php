<?php

namespace Symfony\Config\EasyAdmin\Design\Assets;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FaviconConfig 
{
    private $path;
    private $mimeType;
    
    /**
     * @default 'favicon.ico'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): self
    {
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default 'image/x-icon'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mimeType($value): self
    {
        $this->mimeType = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['path'])) {
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (isset($value['mime_type'])) {
            $this->mimeType = $value['mime_type'];
            unset($value['mime_type']);
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
        if (null !== $this->mimeType) {
            $output['mime_type'] = $this->mimeType;
        }
    
        return $output;
    }
    

}
