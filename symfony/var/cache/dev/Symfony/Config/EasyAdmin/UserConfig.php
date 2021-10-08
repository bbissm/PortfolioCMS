<?php

namespace Symfony\Config\EasyAdmin;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class UserConfig 
{
    private $displayName;
    private $displayAvatar;
    private $namePropertyPath;
    private $avatarPropertyPath;
    
    /**
     * If true, the user name is displayed in the logged user section.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function displayName($value): self
    {
        $this->displayName = $value;
    
        return $this;
    }
    
    /**
     * If true, the user avatar image is displayed in the logged user section.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function displayAvatar($value): self
    {
        $this->displayAvatar = $value;
    
        return $this;
    }
    
    /**
     * A valid PropertyPath expression used to get the value of the user name (by default, __toString() is used).
     * @default '__toString'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function namePropertyPath($value): self
    {
        $this->namePropertyPath = $value;
    
        return $this;
    }
    
    /**
     * A valid PropertyPath expression used to get the value of the avatar image path which is used as the "src" attribute of the <img> element.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function avatarPropertyPath($value): self
    {
        $this->avatarPropertyPath = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['display_name'])) {
            $this->displayName = $value['display_name'];
            unset($value['display_name']);
        }
    
        if (isset($value['display_avatar'])) {
            $this->displayAvatar = $value['display_avatar'];
            unset($value['display_avatar']);
        }
    
        if (isset($value['name_property_path'])) {
            $this->namePropertyPath = $value['name_property_path'];
            unset($value['name_property_path']);
        }
    
        if (isset($value['avatar_property_path'])) {
            $this->avatarPropertyPath = $value['avatar_property_path'];
            unset($value['avatar_property_path']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->displayName) {
            $output['display_name'] = $this->displayName;
        }
        if (null !== $this->displayAvatar) {
            $output['display_avatar'] = $this->displayAvatar;
        }
        if (null !== $this->namePropertyPath) {
            $output['name_property_path'] = $this->namePropertyPath;
        }
        if (null !== $this->avatarPropertyPath) {
            $output['avatar_property_path'] = $this->avatarPropertyPath;
        }
    
        return $output;
    }
    

}
