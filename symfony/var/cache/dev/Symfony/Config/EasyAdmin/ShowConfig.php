<?php

namespace Symfony\Config\EasyAdmin;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ShowConfig 
{
    private $title;
    private $actions;
    private $maxResults;
    private $itemPermission;
    
    /**
     * The visible page title displayed in the show view.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): self
    {
        $this->title = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function actions($value): self
    {
        $this->actions = $value;
    
        return $this;
    }
    
    /**
     * The maximum number of items displayed for related fields in the show page and for autocomplete fields in the new/edit pages.
     * @default 10
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxResults($value): self
    {
        $this->maxResults = $value;
    
        return $this;
    }
    
    /**
     * The permission or array of permissions that the user must have to see the item
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function itemPermission($value): self
    {
        $this->itemPermission = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['title'])) {
            $this->title = $value['title'];
            unset($value['title']);
        }
    
        if (isset($value['actions'])) {
            $this->actions = $value['actions'];
            unset($value['actions']);
        }
    
        if (isset($value['max_results'])) {
            $this->maxResults = $value['max_results'];
            unset($value['max_results']);
        }
    
        if (isset($value['item_permission'])) {
            $this->itemPermission = $value['item_permission'];
            unset($value['item_permission']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->title) {
            $output['title'] = $this->title;
        }
        if (null !== $this->actions) {
            $output['actions'] = $this->actions;
        }
        if (null !== $this->maxResults) {
            $output['max_results'] = $this->maxResults;
        }
        if (null !== $this->itemPermission) {
            $output['item_permission'] = $this->itemPermission;
        }
    
        return $output;
    }
    

}
