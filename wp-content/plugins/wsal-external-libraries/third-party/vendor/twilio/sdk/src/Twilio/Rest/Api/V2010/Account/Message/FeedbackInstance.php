<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Message;

use WSAL_Vendor\Twilio\Deserialize;
use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceResource;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
/**
 * @property string $accountSid
 * @property string $messageSid
 * @property string $outcome
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $uri
 */
class FeedbackInstance extends InstanceResource
{
    /**
     * Initialize the FeedbackInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the Account that created the resource
     * @param string $messageSid The SID of the Message resource for which the
     *                           feedback was provided
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $messageSid)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['accountSid' => Values::array_get($payload, 'account_sid'), 'messageSid' => Values::array_get($payload, 'message_sid'), 'outcome' => Values::array_get($payload, 'outcome'), 'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')), 'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')), 'uri' => Values::array_get($payload, 'uri')];
        $this->solution = ['accountSid' => $accountSid, 'messageSid' => $messageSid];
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
        return '[Twilio.Api.V2010.FeedbackInstance]';
    }
}
