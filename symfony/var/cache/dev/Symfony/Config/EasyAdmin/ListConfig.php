<?php

namespace Symfony\Config\EasyAdmin;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ListConfig 
{
    private $title;
    private $actions;
    private $collapseActions;
    private $batchActions;
    private $maxResults;
    private $itemPermission;
    
    /**
     * The visible page title displayed in the list view.
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
     * If true, collapse the list of actions enabled in the "list" view.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function collapseActions($value): self
    {
        $this->collapseActions = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function batchActions($value): self
    {
        $this->batchActions = $value;
    
        return $this;
    }
    
    /**
     * The maximum number of items to show on listing and search pages.
     * @default 15
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxResults($value): self
    {
        $this->maxResults = $value;
    
        return $this;
    }
    
    /**
     * The permission or array of permissions that the user must have to see the list items
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
    
        if (isset($value['collapse_actions'])) {
            $this->collapseActions = $value['collapse_actions'];
            unset($value['collapse_actions']);
        }
    
        if (isset($value['batch_actions'])) {
            $this->batchActions = $value['batch_actions'];
            unset($value['batch_actions']);
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
        if (null !== $this->collapseActions) {
            $output['collapse_actions'] = $this->collapseActions;
        }
        if (null !== $this->batchActions) {
            $output['batch_actions'] = $this->batchActions;
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
