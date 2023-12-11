<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Recording\AddOnResult;

use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceContext;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
class PayloadContext extends InstanceContext
{
    /**
     * Initialize the PayloadContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     *                           to fetch
     * @param string $referenceSid The SID of the recording to which the
     *                             AddOnResult resource that contains the payload
     *                             to fetch belongs
     * @param string $addOnResultSid The SID of the AddOnResult to which the
     *                               payload to fetch belongs
     * @param string $sid The unique string that identifies the resource to fetch
     */
    public function __construct(Version $version, $accountSid, $referenceSid, $addOnResultSid, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'referenceSid' => $referenceSid, 'addOnResultSid' => $addOnResultSid, 'sid' => $sid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Recordings/' . \rawurlencode($referenceSid) . '/AddOnResults/' . \rawurlencode($addOnResultSid) . '/Payloads/' . \rawurlencode($sid) . '.json';
    }
    /**
     * Fetch the PayloadInstance
     *
     * @return PayloadInstance Fetched PayloadInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : PayloadInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new PayloadInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['referenceSid'], $this->solution['addOnResultSid'], $this->solution['sid']);
    }
    /**
     * Delete the PayloadInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->version->delete('DELETE', $this->uri);
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
        return '[Twilio.Api.V2010.PayloadContext ' . \implode(' ', $context) . ']';
    }
}
