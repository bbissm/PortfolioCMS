<?php

namespace Symfony\Config\EasyAdmin;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Design'.\DIRECTORY_SEPARATOR.'AssetsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Design'.\DIRECTORY_SEPARATOR.'TemplatesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DesignConfig 
{
    private $rtl;
    private $brandColor;
    private $formTheme;
    private $assets;
    private $templates;
    private $menu;
    
    /**
     * If true, the interface uses RTL (right-to-left) writing (needed for Arabic, Hebrew and Persian).
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function rtl($value): self
    {
        $this->rtl = $value;
    
        return $this;
    }
    
    /**
     * The color used in the backend design to highlight important elements.
     * @default 'hsl(230, 55%%, 60%%)'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function brandColor($value): self
    {
        $this->brandColor = $value;
    
        return $this;
    }
    
    /**
     * The form theme applied to backend forms. Allowed values: any valid form theme path or an array of theme paths.
     * @default array (
      0 => '@EasyAdmin/form/bootstrap_4.html.twig',
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formTheme($value = array (
      0 => '@EasyAdmin/form/bootstrap_4.html.twig',
    )): self
    {
        $this->formTheme = $value;
    
        return $this;
    }
    
    public function assets(array $value = []): \Symfony\Config\EasyAdmin\Design\AssetsConfig
    {
        if (null === $this->assets) {
            $this->assets = new \Symfony\Config\EasyAdmin\Design\AssetsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "assets()" has already been initialized. You cannot pass values the second time you call assets().');
        }
    
        return $this->assets;
    }
    
    public function templates(array $value = []): \Symfony\Config\EasyAdmin\Design\TemplatesConfig
    {
        if (null === $this->templates) {
            $this->templates = new \Symfony\Config\EasyAdmin\Design\TemplatesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "templates()" has already been initialized. You cannot pass values the second time you call templates().');
        }
    
        return $this->templates;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function menu($value): self
    {
        $this->menu = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['rtl'])) {
            $this->rtl = $value['rtl'];
            unset($value['rtl']);
        }
    
        if (isset($value['brand_color'])) {
            $this->brandColor = $value['brand_color'];
            unset($value['brand_color']);
        }
    
        if (isset($value['form_theme'])) {
            $this->formTheme = $value['form_theme'];
            unset($value['form_theme']);
        }
    
        if (isset($value['assets'])) {
            $this->assets = new \Symfony\Config\EasyAdmin\Design\AssetsConfig($value['assets']);
            unset($value['assets']);
        }
    
        if (isset($value['templates'])) {
            $this->templates = new \Symfony\Config\EasyAdmin\Design\TemplatesConfig($value['templates']);
            unset($value['templates']);
        }
    
        if (isset($value['menu'])) {
            $this->menu = $value['menu'];
            unset($value['menu']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->rtl) {
            $output['rtl'] = $this->rtl;
        }
        if (null !== $this->brandColor) {
            $output['brand_color'] = $this->brandColor;
        }
        if (null !== $this->formTheme) {
            $output['form_theme'] = $this->formTheme;
        }
        if (null !== $this->assets) {
            $output['assets'] = $this->assets->toArray();
        }
        if (null !== $this->templates) {
            $output['templates'] = $this->templates->toArray();
        }
        if (null !== $this->menu) {
            $output['menu'] = $this->menu;
        }
    
        return $output;
    }
    

}
