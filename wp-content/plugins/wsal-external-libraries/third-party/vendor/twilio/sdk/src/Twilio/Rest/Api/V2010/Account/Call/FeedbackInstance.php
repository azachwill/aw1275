<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Call;

use WSAL_Vendor\Twilio\Deserialize;
use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceResource;
use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
/**
 * @property string $accountSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string[] $issues
 * @property int $qualityScore
 * @property string $sid
 */
class FeedbackInstance extends InstanceResource
{
    /**
     * Initialize the FeedbackInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The unique sid that identifies this account
     * @param string $callSid The unique string that identifies this resource
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $callSid)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['accountSid' => Values::array_get($payload, 'account_sid'), 'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')), 'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')), 'issues' => Values::array_get($payload, 'issues'), 'qualityScore' => Values::array_get($payload, 'quality_score'), 'sid' => Values::array_get($payload, 'sid')];
        $this->solution = ['accountSid' => $accountSid, 'callSid' => $callSid];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return FeedbackContext Context for this FeedbackInstance
     */
    protected function proxy() : FeedbackContext
    {
        if (!$this->context) {
            $this->context = new FeedbackContext($this->version, $this->solution['accountSid'], $this->solution['callSid']);
        }
        return $this->context;
    }
    /**
     * Fetch the FeedbackInstance
     *
     * @return FeedbackInstance Fetched FeedbackInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : FeedbackInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Create the FeedbackInstance
     *
     * @param int $qualityScore The call quality expressed as an integer from 1 to 5
     * @param array|Options $options Optional Arguments
     * @return FeedbackInstance Created FeedbackInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(int $qualityScore, array $options = []) : FeedbackInstance
    {
        return $this->proxy()->create($qualityScore, $options);
    }
    /**
     * Update the FeedbackInstance
     *
     * @param array|Options $options Optional Arguments
     * @return FeedbackInstance Updated FeedbackInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : FeedbackInstance
    {
        return $this->proxy()->update($options);
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
        return '[Twilio.Api.V2010.FeedbackInstance ' . \implode(' ', $context) . ']';
    }
}
