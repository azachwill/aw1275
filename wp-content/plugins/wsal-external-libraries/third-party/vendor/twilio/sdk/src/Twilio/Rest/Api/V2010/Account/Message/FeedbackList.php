<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Message;

use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\ListResource;
use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
class FeedbackList extends ListResource
{
    /**
     * Construct the FeedbackList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     * @param string $messageSid The SID of the Message resource for which the
     *                           feedback was provided
     */
    public function __construct(Version $version, string $accountSid, string $messageSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'messageSid' => $messageSid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Messages/' . \rawurlencode($messageSid) . '/Feedback.json';
    }
    /**
     * Create the FeedbackInstance
     *
     * @param array|Options $options Optional Arguments
     * @return FeedbackInstance Created FeedbackInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(array $options = []) : FeedbackInstance
    {
        $options = new Values($options);
        $data = Values::of(['Outcome' => $options['outcome']]);
        $payload = $this->version->create('POST', $this->uri, [], $data);
        return new FeedbackInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['messageSid']);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Api.V2010.FeedbackList]';
    }
}
