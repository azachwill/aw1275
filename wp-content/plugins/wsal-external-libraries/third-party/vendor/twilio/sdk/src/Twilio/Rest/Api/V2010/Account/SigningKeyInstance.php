<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account;

use WSAL_Vendor\Twilio\Deserialize;
use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceResource;
use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
/**
 * @property string $sid
 * @property string $friendlyName
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 */
class SigningKeyInstance extends InstanceResource
{
    /**
     * Initialize the SigningKeyInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid A 34 character string that uniquely identifies
     *                           this resource.
     * @param string $sid The sid
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $sid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['sid' => Values::array_get($payload, 'sid'), 'friendlyName' => Values::array_get($payload, 'friendly_name'), 'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')), 'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated'))];
        $this->solution = ['accountSid' => $accountSid, 'sid' => $sid ?: $this->properties['sid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return SigningKeyContext Context for this SigningKeyInstance
     */
    protected function proxy() : SigningKeyContext
    {
        if (!$this->context) {
            $this->context = new SigningKeyContext($this->version, $this->solution['accountSid'], $this->solution['sid']);
        }
        return $this->context;
    }
    /**
     * Fetch the SigningKeyInstance
     *
     * @return SigningKeyInstance Fetched SigningKeyInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : SigningKeyInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Update the SigningKeyInstance
     *
     * @param array|Options $options Optional Arguments
     * @return SigningKeyInstance Updated SigningKeyInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : SigningKeyInstance
    {
        return $this->proxy()->update($options);
    }
    /**
     * Delete the SigningKeyInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->proxy()->delete();
    }
    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->{$method}();
        }
        throw new TwilioException('Unknown property: ' . $name);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "{$key}={$value}";
        }
        return '[Twilio.Api.V2010.SigningKeyInstance ' . \implode(' ', $context) . ']';
    }
}
