<?php

namespace Symfony\Config\EasyAdmin\Design;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'FaviconConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AssetsConfig 
{
    private $css;
    private $js;
    private $favicon;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function css($value): self
    {
        $this->css = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function js($value): self
    {
        $this->js = $value;
    
        return $this;
    }
    
    public function favicon(array $value = []): \Symfony\Config\EasyAdmin\Design\Assets\FaviconConfig
    {
        if (null === $this->favicon) {
            $this->favicon = new \Symfony\Config\EasyAdmin\Design\Assets\FaviconConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "favicon()" has already been initialized. You cannot pass values the second time you call favicon().');
        }
    
        return $this->favicon;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['css'])) {
            $this->css = $value['css'];
            unset($value['css']);
        }
    
        if (isset($value['js'])) {
            $this->js = $value['js'];
            unset($value['js']);
        }
    
        if (isset($value['favicon'])) {
            $this->favicon = new \Symfony\Config\EasyAdmin\Design\Assets\FaviconConfig($value['favicon']);
            unset($value['favicon']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->css) {
            $output['css'] = $this->css;
        }
        if (null !== $this->js) {
            $output['js'] = $this->js;
        }
        if (null !== $this->favicon) {
            $output['favicon'] = $this->favicon->toArray();
        }
    
        return $output;
    }
    

}
