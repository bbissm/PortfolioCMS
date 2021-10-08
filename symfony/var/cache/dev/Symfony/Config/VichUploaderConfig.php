<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'VichUploader'.\DIRECTORY_SEPARATOR.'MetadataConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'VichUploader'.\DIRECTORY_SEPARATOR.'MappingsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class VichUploaderConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultFilenameAttributeSuffix;
    private $dbDriver;
    private $storage;
    private $templating;
    private $twig;
    private $form;
    private $metadata;
    private $mappings;
    
    /**
     * @default '_name'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultFilenameAttributeSuffix($value): self
    {
        $this->defaultFilenameAttributeSuffix = $value;
    
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
    
    /**
     * @default 'file_system'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function storage($value): self
    {
        $this->storage = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @deprecated The "templating" option is deprecated.
     * @return $this
     */
    public function templating($value): self
    {
        $this->templating = $value;
    
        return $this;
    }
    
    /**
     * twig requires templating
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function twig($value): self
    {
        $this->twig = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function form($value): self
    {
        $this->form = $value;
    
        return $this;
    }
    
    public function metadata(array $value = []): \Symfony\Config\VichUploader\MetadataConfig
    {
        if (null === $this->metadata) {
            $this->metadata = new \Symfony\Config\VichUploader\MetadataConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "metadata()" has already been initialized. You cannot pass values the second time you call metadata().');
        }
    
        return $this->metadata;
    }
    
    public function mappings(string $id, array $value = []): \Symfony\Config\VichUploader\MappingsConfig
    {
        if (!isset($this->mappings[$id])) {
            return $this->mappings[$id] = new \Symfony\Config\VichUploader\MappingsConfig($value);
        }
        if ([] === $value) {
            return $this->mappings[$id];
        }
    
        throw new InvalidConfigurationException('The node created by "mappings()" has already been initialized. You cannot pass values the second time you call mappings().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'vich_uploader';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['default_filename_attribute_suffix'])) {
            $this->defaultFilenameAttributeSuffix = $value['default_filename_attribute_suffix'];
            unset($value['default_filename_attribute_suffix']);
        }
    
        if (isset($value['db_driver'])) {
            $this->dbDriver = $value['db_driver'];
            unset($value['db_driver']);
        }
    
        if (isset($value['storage'])) {
            $this->storage = $value['storage'];
            unset($value['storage']);
        }
    
        if (isset($value['templating'])) {
            $this->templating = $value['templating'];
            unset($value['templating']);
        }
    
        if (isset($value['twig'])) {
            $this->twig = $value['twig'];
            unset($value['twig']);
        }
    
        if (isset($value['form'])) {
            $this->form = $value['form'];
            unset($value['form']);
        }
    
        if (isset($value['metadata'])) {
            $this->metadata = new \Symfony\Config\VichUploader\MetadataConfig($value['metadata']);
            unset($value['metadata']);
        }
    
        if (isset($value['mappings'])) {
            $this->mappings = array_map(function ($v) { return new \Symfony\Config\VichUploader\MappingsConfig($v); }, $value['mappings']);
            unset($value['mappings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultFilenameAttributeSuffix) {
            $output['default_filename_attribute_suffix'] = $this->defaultFilenameAttributeSuffix;
        }
        if (null !== $this->dbDriver) {
            $output['db_driver'] = $this->dbDriver;
        }
        if (null !== $this->storage) {
            $output['storage'] = $this->storage;
        }
        if (null !== $this->templating) {
            $output['templating'] = $this->templating;
        }
        if (null !== $this->twig) {
            $output['twig'] = $this->twig;
        }
        if (null !== $this->form) {
            $output['form'] = $this->form;
        }
        if (null !== $this->metadata) {
            $output['metadata'] = $this->metadata->toArray();
        }
        if (null !== $this->mappings) {
            $output['mappings'] = array_map(function ($v) { return $v->toArray(); }, $this->mappings);
        }
    
        return $output;
    }
    

}
