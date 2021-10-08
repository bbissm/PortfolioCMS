<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'FormatsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'UserConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'DesignConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'ListConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'SearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'EditConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'NewConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'EasyAdmin'.\DIRECTORY_SEPARATOR.'ShowConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class EasyAdminConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $siteName;
    private $formats;
    private $disabledActions;
    private $translationDomain;
    private $user;
    private $design;
    private $list;
    private $search;
    private $edit;
    private $new;
    private $show;
    private $entities;
    
    /**
     * The name displayed as the title of the administration zone (e.g. company name, project name).
     * @default 'EasyAdmin'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function siteName($value): self
    {
        $this->siteName = $value;
    
        return $this;
    }
    
    public function formats(array $value = []): \Symfony\Config\EasyAdmin\FormatsConfig
    {
        if (null === $this->formats) {
            $this->formats = new \Symfony\Config\EasyAdmin\FormatsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "formats()" has already been initialized. You cannot pass values the second time you call formats().');
        }
    
        return $this->formats;
    }
    
    /**
     * The names of the actions disabled for all backend entities.
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function disabledActions($value = array (
    )): self
    {
        $this->disabledActions = $value;
    
        return $this;
    }
    
    /**
     * The translation domain used to translate the main menu and the labels, titles and help messages of all entities.
     * @default 'messages'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function translationDomain($value): self
    {
        $this->translationDomain = $value;
    
        return $this;
    }
    
    public function user(array $value = []): \Symfony\Config\EasyAdmin\UserConfig
    {
        if (null === $this->user) {
            $this->user = new \Symfony\Config\EasyAdmin\UserConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "user()" has already been initialized. You cannot pass values the second time you call user().');
        }
    
        return $this->user;
    }
    
    public function design(array $value = []): \Symfony\Config\EasyAdmin\DesignConfig
    {
        if (null === $this->design) {
            $this->design = new \Symfony\Config\EasyAdmin\DesignConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "design()" has already been initialized. You cannot pass values the second time you call design().');
        }
    
        return $this->design;
    }
    
    public function list(array $value = []): \Symfony\Config\EasyAdmin\ListConfig
    {
        if (null === $this->list) {
            $this->list = new \Symfony\Config\EasyAdmin\ListConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "list()" has already been initialized. You cannot pass values the second time you call list().');
        }
    
        return $this->list;
    }
    
    public function search(array $value = []): \Symfony\Config\EasyAdmin\SearchConfig
    {
        if (null === $this->search) {
            $this->search = new \Symfony\Config\EasyAdmin\SearchConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "search()" has already been initialized. You cannot pass values the second time you call search().');
        }
    
        return $this->search;
    }
    
    public function edit(array $value = []): \Symfony\Config\EasyAdmin\EditConfig
    {
        if (null === $this->edit) {
            $this->edit = new \Symfony\Config\EasyAdmin\EditConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "edit()" has already been initialized. You cannot pass values the second time you call edit().');
        }
    
        return $this->edit;
    }
    
    public function new(array $value = []): \Symfony\Config\EasyAdmin\NewConfig
    {
        if (null === $this->new) {
            $this->new = new \Symfony\Config\EasyAdmin\NewConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "new()" has already been initialized. You cannot pass values the second time you call new().');
        }
    
        return $this->new;
    }
    
    public function show(array $value = []): \Symfony\Config\EasyAdmin\ShowConfig
    {
        if (null === $this->show) {
            $this->show = new \Symfony\Config\EasyAdmin\ShowConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "show()" has already been initialized. You cannot pass values the second time you call show().');
        }
    
        return $this->show;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function entities(string $name, $value): self
    {
        $this->entities[$name] = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'easy_admin';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['site_name'])) {
            $this->siteName = $value['site_name'];
            unset($value['site_name']);
        }
    
        if (isset($value['formats'])) {
            $this->formats = new \Symfony\Config\EasyAdmin\FormatsConfig($value['formats']);
            unset($value['formats']);
        }
    
        if (isset($value['disabled_actions'])) {
            $this->disabledActions = $value['disabled_actions'];
            unset($value['disabled_actions']);
        }
    
        if (isset($value['translation_domain'])) {
            $this->translationDomain = $value['translation_domain'];
            unset($value['translation_domain']);
        }
    
        if (isset($value['user'])) {
            $this->user = new \Symfony\Config\EasyAdmin\UserConfig($value['user']);
            unset($value['user']);
        }
    
        if (isset($value['design'])) {
            $this->design = new \Symfony\Config\EasyAdmin\DesignConfig($value['design']);
            unset($value['design']);
        }
    
        if (isset($value['list'])) {
            $this->list = new \Symfony\Config\EasyAdmin\ListConfig($value['list']);
            unset($value['list']);
        }
    
        if (isset($value['search'])) {
            $this->search = new \Symfony\Config\EasyAdmin\SearchConfig($value['search']);
            unset($value['search']);
        }
    
        if (isset($value['edit'])) {
            $this->edit = new \Symfony\Config\EasyAdmin\EditConfig($value['edit']);
            unset($value['edit']);
        }
    
        if (isset($value['new'])) {
            $this->new = new \Symfony\Config\EasyAdmin\NewConfig($value['new']);
            unset($value['new']);
        }
    
        if (isset($value['show'])) {
            $this->show = new \Symfony\Config\EasyAdmin\ShowConfig($value['show']);
            unset($value['show']);
        }
    
        if (isset($value['entities'])) {
            $this->entities = $value['entities'];
            unset($value['entities']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->siteName) {
            $output['site_name'] = $this->siteName;
        }
        if (null !== $this->formats) {
            $output['formats'] = $this->formats->toArray();
        }
        if (null !== $this->disabledActions) {
            $output['disabled_actions'] = $this->disabledActions;
        }
        if (null !== $this->translationDomain) {
            $output['translation_domain'] = $this->translationDomain;
        }
        if (null !== $this->user) {
            $output['user'] = $this->user->toArray();
        }
        if (null !== $this->design) {
            $output['design'] = $this->design->toArray();
        }
        if (null !== $this->list) {
            $output['list'] = $this->list->toArray();
        }
        if (null !== $this->search) {
            $output['search'] = $this->search->toArray();
        }
        if (null !== $this->edit) {
            $output['edit'] = $this->edit->toArray();
        }
        if (null !== $this->new) {
            $output['new'] = $this->new->toArray();
        }
        if (null !== $this->show) {
            $output['show'] = $this->show->toArray();
        }
        if (null !== $this->entities) {
            $output['entities'] = $this->entities;
        }
    
        return $output;
    }
    

}
