<?php

namespace Symfony\Config\Swiftmailer\MailerConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AntifloodConfig 
{
    private $threshold;
    private $sleep;
    
    /**
     * @default 99
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function threshold($value): self
    {
        $this->threshold = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sleep($value): self
    {
        $this->sleep = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['threshold'])) {
            $this->threshold = $value['threshold'];
            unset($value['threshold']);
        }
    
        if (isset($value['sleep'])) {
            $this->sleep = $value['sleep'];
            unset($value['sleep']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->threshold) {
            $output['threshold'] = $this->threshold;
        }
        if (null !== $this->sleep) {
            $output['sleep'] = $this->sleep;
        }
    
        return $output;
    }
    

}
