<?php

namespace Symfony\Config\EasyAdmin\Design;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class TemplatesConfig 
{
    private $layout;
    private $menu;
    private $edit;
    private $list;
    private $new;
    private $show;
    private $action;
    private $exception;
    private $flashMessages;
    private $paginator;
    private $fieldArray;
    private $fieldAssociation;
    private $fieldAvatar;
    private $fieldBigint;
    private $fieldBoolean;
    private $fieldCountry;
    private $fieldDate;
    private $fieldDatetime;
    private $fieldDatetimetz;
    private $fieldDecimal;
    private $fieldEmail;
    private $fieldFloat;
    private $fieldId;
    private $fieldImage;
    private $fieldInteger;
    private $fieldRaw;
    private $fieldSimpleArray;
    private $fieldSmallint;
    private $fieldString;
    private $fieldTel;
    private $fieldText;
    private $fieldTime;
    private $fieldToggle;
    private $fieldUrl;
    private $labelEmpty;
    private $labelInaccessible;
    private $labelNull;
    private $labelUndefined;
    
    /**
     * Used to decorate the main templates (list, edit, new and show)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function layout($value): self
    {
        $this->layout = $value;
    
        return $this;
    }
    
    /**
     * Used to render the main menu
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function menu($value): self
    {
        $this->menu = $value;
    
        return $this;
    }
    
    /**
     * Used to render the page where entities are edited
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function edit($value): self
    {
        $this->edit = $value;
    
        return $this;
    }
    
    /**
     * Used to render the listing page and the search results page
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function list($value): self
    {
        $this->list = $value;
    
        return $this;
    }
    
    /**
     * Used to render the page where new entities are created
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function new($value): self
    {
        $this->new = $value;
    
        return $this;
    }
    
    /**
     * Used to render the contents stored by a given entity
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function show($value): self
    {
        $this->show = $value;
    
        return $this;
    }
    
    /**
     * Used to render an action for a given entity
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function action($value): self
    {
        $this->action = $value;
    
        return $this;
    }
    
    /**
     * Used to render the error page when some exception happens
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function exception($value): self
    {
        $this->exception = $value;
    
        return $this;
    }
    
    /**
     * Used to render the notification area were flash messages are displayed
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function flashMessages($value): self
    {
        $this->flashMessages = $value;
    
        return $this;
    }
    
    /**
     * Used to render the paginator in the list page
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginator($value): self
    {
        $this->paginator = $value;
    
        return $this;
    }
    
    /**
     * Used to render array field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldArray($value): self
    {
        $this->fieldArray = $value;
    
        return $this;
    }
    
    /**
     * Used to render fields that store Doctrine associations
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldAssociation($value): self
    {
        $this->fieldAssociation = $value;
    
        return $this;
    }
    
    /**
     * Used to render fields related to user avatar images
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldAvatar($value): self
    {
        $this->fieldAvatar = $value;
    
        return $this;
    }
    
    /**
     * Used to render bigint field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldBigint($value): self
    {
        $this->fieldBigint = $value;
    
        return $this;
    }
    
    /**
     * Used to render boolean field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldBoolean($value): self
    {
        $this->fieldBoolean = $value;
    
        return $this;
    }
    
    /**
     * Used to render the country names and/or flags
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldCountry($value): self
    {
        $this->fieldCountry = $value;
    
        return $this;
    }
    
    /**
     * Used to render date and date_immutable field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldDate($value): self
    {
        $this->fieldDate = $value;
    
        return $this;
    }
    
    /**
     * Used to render datetime and datetime_immutable field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldDatetime($value): self
    {
        $this->fieldDatetime = $value;
    
        return $this;
    }
    
    /**
     * Used to render datetimetz field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldDatetimetz($value): self
    {
        $this->fieldDatetimetz = $value;
    
        return $this;
    }
    
    /**
     * Used to render decimal field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldDecimal($value): self
    {
        $this->fieldDecimal = $value;
    
        return $this;
    }
    
    /**
     * Used to render clickable email addresses
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldEmail($value): self
    {
        $this->fieldEmail = $value;
    
        return $this;
    }
    
    /**
     * Used to render float field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldFloat($value): self
    {
        $this->fieldFloat = $value;
    
        return $this;
    }
    
    /**
     * Used to render the field called "id". This avoids formatting its value as any other regular number (with decimals and thousand separators) 
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldId($value): self
    {
        $this->fieldId = $value;
    
        return $this;
    }
    
    /**
     * Used to render image field types (a special type that displays the image contents)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldImage($value): self
    {
        $this->fieldImage = $value;
    
        return $this;
    }
    
    /**
     * Used to render integer field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldInteger($value): self
    {
        $this->fieldInteger = $value;
    
        return $this;
    }
    
    /**
     * Used to render unescaped values
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldRaw($value): self
    {
        $this->fieldRaw = $value;
    
        return $this;
    }
    
    /**
     * Used to render simple array field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldSimpleArray($value): self
    {
        $this->fieldSimpleArray = $value;
    
        return $this;
    }
    
    /**
     * Used to render smallint field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldSmallint($value): self
    {
        $this->fieldSmallint = $value;
    
        return $this;
    }
    
    /**
     * Used to render string field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldString($value): self
    {
        $this->fieldString = $value;
    
        return $this;
    }
    
    /**
     * Used to render clickable telephone number
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldTel($value): self
    {
        $this->fieldTel = $value;
    
        return $this;
    }
    
    /**
     * Used to render text field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldText($value): self
    {
        $this->fieldText = $value;
    
        return $this;
    }
    
    /**
     * Used to render time and time_immutable field types
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldTime($value): self
    {
        $this->fieldTime = $value;
    
        return $this;
    }
    
    /**
     * Used to render toggle field types (a special type that display booleans as flip switches)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldToggle($value): self
    {
        $this->fieldToggle = $value;
    
        return $this;
    }
    
    /**
     * Used to render clickable URLs
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fieldUrl($value): self
    {
        $this->fieldUrl = $value;
    
        return $this;
    }
    
    /**
     * Used when the field to render is an empty collection
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function labelEmpty($value): self
    {
        $this->labelEmpty = $value;
    
        return $this;
    }
    
    /**
     * Used when is not possible to access the value of the field to render (there is no getter or public field)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function labelInaccessible($value): self
    {
        $this->labelInaccessible = $value;
    
        return $this;
    }
    
    /**
     * Used when the value of the field to render is null
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function labelNull($value): self
    {
        $this->labelNull = $value;
    
        return $this;
    }
    
    /**
     * Used when any kind of error or exception happens when trying to access the value of the field to render
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function labelUndefined($value): self
    {
        $this->labelUndefined = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['layout'])) {
            $this->layout = $value['layout'];
            unset($value['layout']);
        }
    
        if (isset($value['menu'])) {
            $this->menu = $value['menu'];
            unset($value['menu']);
        }
    
        if (isset($value['edit'])) {
            $this->edit = $value['edit'];
            unset($value['edit']);
        }
    
        if (isset($value['list'])) {
            $this->list = $value['list'];
            unset($value['list']);
        }
    
        if (isset($value['new'])) {
            $this->new = $value['new'];
            unset($value['new']);
        }
    
        if (isset($value['show'])) {
            $this->show = $value['show'];
            unset($value['show']);
        }
    
        if (isset($value['action'])) {
            $this->action = $value['action'];
            unset($value['action']);
        }
    
        if (isset($value['exception'])) {
            $this->exception = $value['exception'];
            unset($value['exception']);
        }
    
        if (isset($value['flash_messages'])) {
            $this->flashMessages = $value['flash_messages'];
            unset($value['flash_messages']);
        }
    
        if (isset($value['paginator'])) {
            $this->paginator = $value['paginator'];
            unset($value['paginator']);
        }
    
        if (isset($value['field_array'])) {
            $this->fieldArray = $value['field_array'];
            unset($value['field_array']);
        }
    
        if (isset($value['field_association'])) {
            $this->fieldAssociation = $value['field_association'];
            unset($value['field_association']);
        }
    
        if (isset($value['field_avatar'])) {
            $this->fieldAvatar = $value['field_avatar'];
            unset($value['field_avatar']);
        }
    
        if (isset($value['field_bigint'])) {
            $this->fieldBigint = $value['field_bigint'];
            unset($value['field_bigint']);
        }
    
        if (isset($value['field_boolean'])) {
            $this->fieldBoolean = $value['field_boolean'];
            unset($value['field_boolean']);
        }
    
        if (isset($value['field_country'])) {
            $this->fieldCountry = $value['field_country'];
            unset($value['field_country']);
        }
    
        if (isset($value['field_date'])) {
            $this->fieldDate = $value['field_date'];
            unset($value['field_date']);
        }
    
        if (isset($value['field_datetime'])) {
            $this->fieldDatetime = $value['field_datetime'];
            unset($value['field_datetime']);
        }
    
        if (isset($value['field_datetimetz'])) {
            $this->fieldDatetimetz = $value['field_datetimetz'];
            unset($value['field_datetimetz']);
        }
    
        if (isset($value['field_decimal'])) {
            $this->fieldDecimal = $value['field_decimal'];
            unset($value['field_decimal']);
        }
    
        if (isset($value['field_email'])) {
            $this->fieldEmail = $value['field_email'];
            unset($value['field_email']);
        }
    
        if (isset($value['field_float'])) {
            $this->fieldFloat = $value['field_float'];
            unset($value['field_float']);
        }
    
        if (isset($value['field_id'])) {
            $this->fieldId = $value['field_id'];
            unset($value['field_id']);
        }
    
        if (isset($value['field_image'])) {
            $this->fieldImage = $value['field_image'];
            unset($value['field_image']);
        }
    
        if (isset($value['field_integer'])) {
            $this->fieldInteger = $value['field_integer'];
            unset($value['field_integer']);
        }
    
        if (isset($value['field_raw'])) {
            $this->fieldRaw = $value['field_raw'];
            unset($value['field_raw']);
        }
    
        if (isset($value['field_simple_array'])) {
            $this->fieldSimpleArray = $value['field_simple_array'];
            unset($value['field_simple_array']);
        }
    
        if (isset($value['field_smallint'])) {
            $this->fieldSmallint = $value['field_smallint'];
            unset($value['field_smallint']);
        }
    
        if (isset($value['field_string'])) {
            $this->fieldString = $value['field_string'];
            unset($value['field_string']);
        }
    
        if (isset($value['field_tel'])) {
            $this->fieldTel = $value['field_tel'];
            unset($value['field_tel']);
        }
    
        if (isset($value['field_text'])) {
            $this->fieldText = $value['field_text'];
            unset($value['field_text']);
        }
    
        if (isset($value['field_time'])) {
            $this->fieldTime = $value['field_time'];
            unset($value['field_time']);
        }
    
        if (isset($value['field_toggle'])) {
            $this->fieldToggle = $value['field_toggle'];
            unset($value['field_toggle']);
        }
    
        if (isset($value['field_url'])) {
            $this->fieldUrl = $value['field_url'];
            unset($value['field_url']);
        }
    
        if (isset($value['label_empty'])) {
            $this->labelEmpty = $value['label_empty'];
            unset($value['label_empty']);
        }
    
        if (isset($value['label_inaccessible'])) {
            $this->labelInaccessible = $value['label_inaccessible'];
            unset($value['label_inaccessible']);
        }
    
        if (isset($value['label_null'])) {
            $this->labelNull = $value['label_null'];
            unset($value['label_null']);
        }
    
        if (isset($value['label_undefined'])) {
            $this->labelUndefined = $value['label_undefined'];
            unset($value['label_undefined']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->layout) {
            $output['layout'] = $this->layout;
        }
        if (null !== $this->menu) {
            $output['menu'] = $this->menu;
        }
        if (null !== $this->edit) {
            $output['edit'] = $this->edit;
        }
        if (null !== $this->list) {
            $output['list'] = $this->list;
        }
        if (null !== $this->new) {
            $output['new'] = $this->new;
        }
        if (null !== $this->show) {
            $output['show'] = $this->show;
        }
        if (null !== $this->action) {
            $output['action'] = $this->action;
        }
        if (null !== $this->exception) {
            $output['exception'] = $this->exception;
        }
        if (null !== $this->flashMessages) {
            $output['flash_messages'] = $this->flashMessages;
        }
        if (null !== $this->paginator) {
            $output['paginator'] = $this->paginator;
        }
        if (null !== $this->fieldArray) {
            $output['field_array'] = $this->fieldArray;
        }
        if (null !== $this->fieldAssociation) {
            $output['field_association'] = $this->fieldAssociation;
        }
        if (null !== $this->fieldAvatar) {
            $output['field_avatar'] = $this->fieldAvatar;
        }
        if (null !== $this->fieldBigint) {
            $output['field_bigint'] = $this->fieldBigint;
        }
        if (null !== $this->fieldBoolean) {
            $output['field_boolean'] = $this->fieldBoolean;
        }
        if (null !== $this->fieldCountry) {
            $output['field_country'] = $this->fieldCountry;
        }
        if (null !== $this->fieldDate) {
            $output['field_date'] = $this->fieldDate;
        }
        if (null !== $this->fieldDatetime) {
            $output['field_datetime'] = $this->fieldDatetime;
        }
        if (null !== $this->fieldDatetimetz) {
            $output['field_datetimetz'] = $this->fieldDatetimetz;
        }
        if (null !== $this->fieldDecimal) {
            $output['field_decimal'] = $this->fieldDecimal;
        }
        if (null !== $this->fieldEmail) {
            $output['field_email'] = $this->fieldEmail;
        }
        if (null !== $this->fieldFloat) {
            $output['field_float'] = $this->fieldFloat;
        }
        if (null !== $this->fieldId) {
            $output['field_id'] = $this->fieldId;
        }
        if (null !== $this->fieldImage) {
            $output['field_image'] = $this->fieldImage;
        }
        if (null !== $this->fieldInteger) {
            $output['field_integer'] = $this->fieldInteger;
        }
        if (null !== $this->fieldRaw) {
            $output['field_raw'] = $this->fieldRaw;
        }
        if (null !== $this->fieldSimpleArray) {
            $output['field_simple_array'] = $this->fieldSimpleArray;
        }
        if (null !== $this->fieldSmallint) {
            $output['field_smallint'] = $this->fieldSmallint;
        }
        if (null !== $this->fieldString) {
            $output['field_string'] = $this->fieldString;
        }
        if (null !== $this->fieldTel) {
            $output['field_tel'] = $this->fieldTel;
        }
        if (null !== $this->fieldText) {
            $output['field_text'] = $this->fieldText;
        }
        if (null !== $this->fieldTime) {
            $output['field_time'] = $this->fieldTime;
        }
        if (null !== $this->fieldToggle) {
            $output['field_toggle'] = $this->fieldToggle;
        }
        if (null !== $this->fieldUrl) {
            $output['field_url'] = $this->fieldUrl;
        }
        if (null !== $this->labelEmpty) {
            $output['label_empty'] = $this->labelEmpty;
        }
        if (null !== $this->labelInaccessible) {
            $output['label_inaccessible'] = $this->labelInaccessible;
        }
        if (null !== $this->labelNull) {
            $output['label_null'] = $this->labelNull;
        }
        if (null !== $this->labelUndefined) {
            $output['label_undefined'] = $this->labelUndefined;
        }
    
        return $output;
    }
    

}
