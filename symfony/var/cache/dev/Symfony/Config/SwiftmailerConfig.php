<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Swiftmailer'.\DIRECTORY_SEPARATOR.'MailerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SwiftmailerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultMailer;
    private $mailers;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultMailer($value): self
    {
        $this->defaultMailer = $value;
    
        return $this;
    }
    
    public function mailer(string $name, array $value = []): \Symfony\Config\Swiftmailer\MailerConfig
    {
        if (!isset($this->mailers[$name])) {
            return $this->mailers[$name] = new \Symfony\Config\Swiftmailer\MailerConfig($value);
        }
        if ([] === $value) {
            return $this->mailers[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "mailer()" has already been initialized. You cannot pass values the second time you call mailer().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'swiftmailer';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['default_mailer'])) {
            $this->defaultMailer = $value['default_mailer'];
            unset($value['default_mailer']);
        }
    
        if (isset($value['mailers'])) {
            $this->mailers = array_map(function ($v) { return new \Symfony\Config\Swiftmailer\MailerConfig($v); }, $value['mailers']);
            unset($value['mailers']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultMailer) {
            $output['default_mailer'] = $this->defaultMailer;
        }
        if (null !== $this->mailers) {
            $output['mailers'] = array_map(function ($v) { return $v->toArray(); }, $this->mailers);
        }
    
        return $output;
    }
    

}
