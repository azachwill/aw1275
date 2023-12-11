<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Usage;

use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Values;
abstract class TriggerOptions
{
    /**
     * @param string $callbackMethod The HTTP method to use to call callback_url
     * @param string $callbackUrl The URL we call when the trigger fires
     * @param string $friendlyName A string to describe the resource
     * @return UpdateTriggerOptions Options builder
     */
    public static function update(string $callbackMethod = Values::NONE, string $callbackUrl = Values::NONE, string $friendlyName = Values::NONE) : UpdateTriggerOptions
    {
        return new UpdateTriggerOptions($callbackMethod, $callbackUrl, $friendlyName);
    }
    /**
     * @param string $callbackMethod The HTTP method to use to call callback_url
     * @param string $friendlyName A string to describe the resource
     * @param string $recurring The frequency of a recurring UsageTrigger
     * @param string $triggerBy The field in the UsageRecord resource that fires
     *                          the trigger
     * @return CreateTriggerOptions Options builder
     */
    public static function create(string $callbackMethod = Values::NONE, string $friendlyName = Values::NONE, string $recurring = Values::NONE, string $triggerBy = Values::NONE) : CreateTriggerOptions
    {
        return new CreateTriggerOptions($callbackMethod, $friendlyName, $recurring, $triggerBy);
    }
    /**
     * @param string $recurring The frequency of recurring UsageTriggers to read
     * @param string $triggerBy The trigger field of the UsageTriggers to read
     * @param string $usageCategory The usage category of the UsageTriggers to read
     * @return ReadTriggerOptions Options builder
     */
    public static function read(string $recurring = Values::NONE, string $triggerBy = Values::NONE, string $usageCategory = Values::NONE) : ReadTriggerOptions
    {
        return new ReadTriggerOptions($recurring, $triggerBy, $usageCategory);
    }
}
class UpdateTriggerOptions extends Options
{
    /**
     * @param string $callbackMethod The HTTP method to use to call callback_url
     * @param string $callbackUrl The URL we call when the trigger fires
     * @param string $friendlyName A string to describe the resource
     */
    public function __construct(string $callbackMethod = Values::NONE, string $callbackUrl = Values::NONE, string $friendlyName = Values::NONE)
    {
        $this->options['callbackMethod'] = $callbackMethod;
        $this->options['callbackUrl'] = $callbackUrl;
        $this->options['friendlyName'] = $friendlyName;
    }
    /**
     * The HTTP method we should use to call `callback_url`. Can be: `GET` or `POST` and the default is `POST`.
     *
     * @param string $callbackMethod The HTTP method to use to call callback_url
     * @return $this Fluent Builder
     */
    public function setCallbackMethod(string $callbackMethod) : self
    {
        $this->options['callbackMethod'] = $callbackMethod;
        return $this;
    }
    /**
     * The URL we should call using `callback_method` when the trigger fires.
     *
     * @param string $callbackUrl The URL we call when the trigger fires
     * @return $this Fluent Builder
     */
    public function setCallbackUrl(string $callbackUrl) : self
    {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }
    /**
     * A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A string to describe the resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName) : self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Api.V2010.UpdateTriggerOptions ' . $options . ']';
    }
}
class CreateTriggerOptions extends Options
{
    /**
     * @param string $callbackMethod The HTTP method to use to call callback_url
     * @param string $friendlyName A string to describe the resource
     * @param string $recurring The frequency of a recurring UsageTrigger
     * @param string $triggerBy The field in the UsageRecord resource that fires
     *                          the trigger
     */
    public function __construct(string $callbackMethod = Values::NONE, string $friendlyName = Values::NONE, string $recurring = Values::NONE, string $triggerBy = Values::NONE)
    {
        $this->options['callbackMethod'] = $callbackMethod;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['recurring'] = $recurring;
        $this->options['triggerBy'] = $triggerBy;
    }
    /**
     * The HTTP method we should use to call `callback_url`. Can be: `GET` or `POST` and the default is `POST`.
     *
     * @param string $callbackMethod The HTTP method to use to call callback_url
     * @return $this Fluent Builder
     */
    public function setCallbackMethod(string $callbackMethod) : self
    {
        $this->options['callbackMethod'] = $callbackMethod;
        return $this;
    }
    /**
     * A descriptive string that you create to describe the resource. It can be up to 64 characters long.
     *
     * @param string $friendlyName A string to describe the resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName) : self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
     * The frequency of a recurring UsageTrigger.  Can be: `daily`, `monthly`, or `yearly` for recurring triggers or empty for non-recurring triggers. A trigger will only fire once during each period. Recurring times are in GMT.
     *
     * @param string $recurring The frequency of a recurring UsageTrigger
     * @return $this Fluent Builder
     */
    public function setRecurring(string $recurring) : self
    {
        $this->options['recurring'] = $recurring;
        return $this;
    }
    /**
     * The field in the [UsageRecord](https://www.twilio.com/docs/usage/api/usage-record) resource that should fire the trigger.  Can be: `count`, `usage`, or `price` as described in the [UsageRecords documentation](https://www.twilio.com/docs/usage/api/usage-record#usage-count-price).  The default is `usage`.
     *
     * @param string $triggerBy The field in the UsageRecord resource that fires
     *                          the trigger
     * @return $this Fluent Builder
     */
    public function setTriggerBy(string $triggerBy) : self
    {
        $this->options['triggerBy'] = $triggerBy;
        return $this;
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Api.V2010.CreateTriggerOptions ' . $options . ']';
    }
}
class ReadTriggerOptions extends Options
{
    /**
     * @param string $recurring The frequency of recurring UsageTriggers to read
     * @param string $triggerBy The trigger field of the UsageTriggers to read
     * @param string $usageCategory The usage category of the UsageTriggers to read
     */
    public function __construct(string $recurring = Values::NONE, string $triggerBy = Values::NONE, string $usageCategory = Values::NONE)
    {
        $this->options['recurring'] = $recurring;
        $this->options['triggerBy'] = $triggerBy;
        $this->options['usageCategory'] = $usageCategory;
    }
    /**
     * The frequency of recurring UsageTriggers to read. Can be: `daily`, `monthly`, or `yearly` to read recurring UsageTriggers. An empty value or a value of `alltime` reads non-recurring UsageTriggers.
     *
     * @param string $recurring The frequency of recurring UsageTriggers to read
     * @return $this Fluent Builder
     */
    public function setRecurring(string $recurring) : self
    {
        $this->options['recurring'] = $recurring;
        return $this;
    }
    /**
     * The trigger field of the UsageTriggers to read.  Can be: `count`, `usage`, or `price` as described in the [UsageRecords documentation](https://www.twilio.com/docs/usage/api/usage-record#usage-count-price).
     *
     * @param string $triggerBy The trigger field of the UsageTriggers to read
     * @return $this Fluent Builder
     */
    public function setTriggerBy(string $triggerBy) : self
    {
        $this->options['triggerBy'] = $triggerBy;
        return $this;
    }
    /**
     * The usage category of the UsageTriggers to read. Must be a supported [usage categories](https://www.twilio.com/docs/usage/api/usage-record#usage-categories).
     *
     * @param string $usageCategory The usage category of the UsageTriggers to read
     * @return $this Fluent Builder
     */
    public function setUsageCategory(string $usageCategory) : self
    {
        $this->options['usageCategory'] = $usageCategory;
        return $this;
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Api.V2010.ReadTriggerOptions ' . $options . ']';
    }
}
