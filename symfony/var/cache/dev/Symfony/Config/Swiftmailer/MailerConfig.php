<?php

namespace Symfony\Config\Swiftmailer;

require_once __DIR__.\DIRECTORY_SEPARATOR.'MailerConfig'.\DIRECTORY_SEPARATOR.'StreamOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MailerConfig'.\DIRECTORY_SEPARATOR.'AntifloodConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MailerConfig'.\DIRECTORY_SEPARATOR.'SpoolConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MailerConfig 
{
    private $url;
    private $transport;
    private $command;
    private $username;
    private $password;
    private $host;
    private $port;
    private $timeout;
    private $sourceIp;
    private $localDomain;
    private $streamOptions;
    private $encryption;
    private $authMode;
    private $senderAddress;
    private $deliveryAddresses;
    private $antiflood;
    private $logging;
    private $spool;
    private $deliveryWhitelist;
    private $disableDelivery;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): self
    {
        $this->url = $value;
    
        return $this;
    }
    
    /**
     * @default 'smtp'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function transport($value): self
    {
        $this->transport = $value;
    
        return $this;
    }
    
    /**
     * @default '/usr/sbin/sendmail -t -i'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function command($value): self
    {
        $this->command = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function username($value): self
    {
        $this->username = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): self
    {
        $this->password = $value;
    
        return $this;
    }
    
    /**
     * @default 'localhost'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function port($value): self
    {
        $this->port = $value;
    
        return $this;
    }
    
    /**
     * @default 30
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timeout($value): self
    {
        $this->timeout = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sourceIp($value): self
    {
        $this->sourceIp = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function localDomain($value): self
    {
        $this->localDomain = $value;
    
        return $this;
    }
    
    public function streamOptions(array $value = []): \Symfony\Config\Swiftmailer\MailerConfig\StreamOptionsConfig
    {
        if (null === $this->streamOptions) {
            $this->streamOptions = new \Symfony\Config\Swiftmailer\MailerConfig\StreamOptionsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "streamOptions()" has already been initialized. You cannot pass values the second time you call streamOptions().');
        }
    
        return $this->streamOptions;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function encryption($value): self
    {
        $this->encryption = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function authMode($value): self
    {
        $this->authMode = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function senderAddress($value): self
    {
        $this->senderAddress = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function deliveryAddresses($value): self
    {
        $this->deliveryAddresses = $value;
    
        return $this;
    }
    
    public function antiflood(array $value = []): \Symfony\Config\Swiftmailer\MailerConfig\AntifloodConfig
    {
        if (null === $this->antiflood) {
            $this->antiflood = new \Symfony\Config\Swiftmailer\MailerConfig\AntifloodConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "antiflood()" has already been initialized. You cannot pass values the second time you call antiflood().');
        }
    
        return $this->antiflood;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function logging($value): self
    {
        $this->logging = $value;
    
        return $this;
    }
    
    public function spool(array $value = []): \Symfony\Config\Swiftmailer\MailerConfig\SpoolConfig
    {
        if (null === $this->spool) {
            $this->spool = new \Symfony\Config\Swiftmailer\MailerConfig\SpoolConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "spool()" has already been initialized. You cannot pass values the second time you call spool().');
        }
    
        return $this->spool;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function deliveryWhitelist($value): self
    {
        $this->deliveryWhitelist = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableDelivery($value): self
    {
        $this->disableDelivery = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['url'])) {
            $this->url = $value['url'];
            unset($value['url']);
        }
    
        if (isset($value['transport'])) {
            $this->transport = $value['transport'];
            unset($value['transport']);
        }
    
        if (isset($value['command'])) {
            $this->command = $value['command'];
            unset($value['command']);
        }
    
        if (isset($value['username'])) {
            $this->username = $value['username'];
            unset($value['username']);
        }
    
        if (isset($value['password'])) {
            $this->password = $value['password'];
            unset($value['password']);
        }
    
        if (isset($value['host'])) {
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (isset($value['port'])) {
            $this->port = $value['port'];
            unset($value['port']);
        }
    
        if (isset($value['timeout'])) {
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }
    
        if (isset($value['source_ip'])) {
            $this->sourceIp = $value['source_ip'];
            unset($value['source_ip']);
        }
    
        if (isset($value['local_domain'])) {
            $this->localDomain = $value['local_domain'];
            unset($value['local_domain']);
        }
    
        if (isset($value['stream_options'])) {
            $this->streamOptions = new \Symfony\Config\Swiftmailer\MailerConfig\StreamOptionsConfig($value['stream_options']);
            unset($value['stream_options']);
        }
    
        if (isset($value['encryption'])) {
            $this->encryption = $value['encryption'];
            unset($value['encryption']);
        }
    
        if (isset($value['auth_mode'])) {
            $this->authMode = $value['auth_mode'];
            unset($value['auth_mode']);
        }
    
        if (isset($value['sender_address'])) {
            $this->senderAddress = $value['sender_address'];
            unset($value['sender_address']);
        }
    
        if (isset($value['delivery_addresses'])) {
            $this->deliveryAddresses = $value['delivery_addresses'];
            unset($value['delivery_addresses']);
        }
    
        if (isset($value['antiflood'])) {
            $this->antiflood = new \Symfony\Config\Swiftmailer\MailerConfig\AntifloodConfig($value['antiflood']);
            unset($value['antiflood']);
        }
    
        if (isset($value['logging'])) {
            $this->logging = $value['logging'];
            unset($value['logging']);
        }
    
        if (isset($value['spool'])) {
            $this->spool = new \Symfony\Config\Swiftmailer\MailerConfig\SpoolConfig($value['spool']);
            unset($value['spool']);
        }
    
        if (isset($value['delivery_whitelist'])) {
            $this->deliveryWhitelist = $value['delivery_whitelist'];
            unset($value['delivery_whitelist']);
        }
    
        if (isset($value['disable_delivery'])) {
            $this->disableDelivery = $value['disable_delivery'];
            unset($value['disable_delivery']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->url) {
            $output['url'] = $this->url;
        }
        if (null !== $this->transport) {
            $output['transport'] = $this->transport;
        }
        if (null !== $this->command) {
            $output['command'] = $this->command;
        }
        if (null !== $this->username) {
            $output['username'] = $this->username;
        }
        if (null !== $this->password) {
            $output['password'] = $this->password;
        }
        if (null !== $this->host) {
            $output['host'] = $this->host;
        }
        if (null !== $this->port) {
            $output['port'] = $this->port;
        }
        if (null !== $this->timeout) {
            $output['timeout'] = $this->timeout;
        }
        if (null !== $this->sourceIp) {
            $output['source_ip'] = $this->sourceIp;
        }
        if (null !== $this->localDomain) {
            $output['local_domain'] = $this->localDomain;
        }
        if (null !== $this->streamOptions) {
            $output['stream_options'] = $this->streamOptions->toArray();
        }
        if (null !== $this->encryption) {
            $output['encryption'] = $this->encryption;
        }
        if (null !== $this->authMode) {
            $output['auth_mode'] = $this->authMode;
        }
        if (null !== $this->senderAddress) {
            $output['sender_address'] = $this->senderAddress;
        }
        if (null !== $this->deliveryAddresses) {
            $output['delivery_addresses'] = $this->deliveryAddresses;
        }
        if (null !== $this->antiflood) {
            $output['antiflood'] = $this->antiflood->toArray();
        }
        if (null !== $this->logging) {
            $output['logging'] = $this->logging;
        }
        if (null !== $this->spool) {
            $output['spool'] = $this->spool->toArray();
        }
        if (null !== $this->deliveryWhitelist) {
            $output['delivery_whitelist'] = $this->deliveryWhitelist;
        }
        if (null !== $this->disableDelivery) {
            $output['disable_delivery'] = $this->disableDelivery;
        }
    
        return $output;
    }
    

}
