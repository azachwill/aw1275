<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain;

use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceContext;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
class CredentialListMappingContext extends InstanceContext
{
    /**
     * Initialize the CredentialListMappingContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique sid that identifies this account
     * @param string $domainSid A string that identifies the SIP Domain that
     *                          includes the resource to fetch
     * @param string $sid A string that identifies the resource to fetch
     */
    public function __construct(Version $version, $accountSid, $domainSid, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'domainSid' => $domainSid, 'sid' => $sid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/SIP/Domains/' . \rawurlencode($domainSid) . '/CredentialListMappings/' . \rawurlencode($sid) . '.json';
    }
    /**
     * Fetch the CredentialListMappingInstance
     *
     * @return CredentialListMappingInstance Fetched CredentialListMappingInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : CredentialListMappingInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new CredentialListMappingInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['domainSid'], $this->solution['sid']);
    }
    /**
     * Delete the CredentialListMappingInstance
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
        return '[Twilio.Api.V2010.CredentialListMappingContext ' . \implode(' ', $context) . ']';
    }
}
