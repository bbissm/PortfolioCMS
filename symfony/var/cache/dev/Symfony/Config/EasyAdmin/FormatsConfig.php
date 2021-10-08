<?php

namespace Symfony\Config\EasyAdmin;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FormatsConfig 
{
    private $date;
    private $time;
    private $datetime;
    private $number;
    private $dateinterval;
    
    /**
     * The PHP date format applied to "date" and "date_immutable" field types.
     * @example d/m/Y (see http://php.net/manual/en/function.date.php)
     * @default 'Y-m-d'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function date($value): self
    {
        $this->date = $value;
    
        return $this;
    }
    
    /**
     * The PHP time format applied to "time" and "time_immutable" field types.
     * @example h:i a (see http://php.net/date)
     * @default 'H:i:s'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function time($value): self
    {
        $this->time = $value;
    
        return $this;
    }
    
    /**
     * The PHP date/time format applied to "datetime" and "datetime_immutable" field types.
     * @example l, F jS Y / h:i (see http://php.net/date)
     * @default 'F j, Y H:i'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function datetime($value): self
    {
        $this->datetime = $value;
    
        return $this;
    }
    
    /**
     * The sprintf-compatible format applied to numeric values.
     * @example %.2d (see http://php.net/sprintf)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function number($value): self
    {
        $this->number = $value;
    
        return $this;
    }
    
    /**
     * The PHP dateinterval-compatible format applied to "dateinterval" field types.
     * @example %%y Year(s) %%m Month(s) %%d Day(s) (see http://php.net/manual/en/dateinterval.format.php)
     * @default '%%y Year(s) %%m Month(s) %%d Day(s)'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dateinterval($value): self
    {
        $this->dateinterval = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['date'])) {
            $this->date = $value['date'];
            unset($value['date']);
        }
    
        if (isset($value['time'])) {
            $this->time = $value['time'];
            unset($value['time']);
        }
    
        if (isset($value['datetime'])) {
            $this->datetime = $value['datetime'];
            unset($value['datetime']);
        }
    
        if (isset($value['number'])) {
            $this->number = $value['number'];
            unset($value['number']);
        }
    
        if (isset($value['dateinterval'])) {
            $this->dateinterval = $value['dateinterval'];
            unset($value['dateinterval']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->date) {
            $output['date'] = $this->date;
        }
        if (null !== $this->time) {
            $output['time'] = $this->time;
        }
        if (null !== $this->datetime) {
            $output['datetime'] = $this->datetime;
        }
        if (null !== $this->number) {
            $output['number'] = $this->number;
        }
        if (null !== $this->dateinterval) {
            $output['dateinterval'] = $this->dateinterval;
        }
    
        return $output;
    }
    

}
