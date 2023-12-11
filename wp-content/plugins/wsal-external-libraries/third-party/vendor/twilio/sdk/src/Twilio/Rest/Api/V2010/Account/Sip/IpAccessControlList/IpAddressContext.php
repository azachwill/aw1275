<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\IpAccessControlList;

use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceContext;
use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
class IpAddressContext extends InstanceContext
{
    /**
     * Initialize the IpAddressContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique sid that identifies this account
     * @param string $ipAccessControlListSid The IpAccessControlList Sid that
     *                                       identifies the IpAddress resources to
     *                                       fetch
     * @param string $sid A string that identifies the IpAddress resource to fetch
     */
    public function __construct(Version $version, $accountSid, $ipAccessControlListSid, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'ipAccessControlListSid' => $ipAccessControlListSid, 'sid' => $sid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/SIP/IpAccessControlLists/' . \rawurlencode($ipAccessControlListSid) . '/IpAddresses/' . \rawurlencode($sid) . '.json';
    }
    /**
     * Fetch the IpAddressInstance
     *
     * @return IpAddressInstance Fetched IpAddressInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : IpAddressInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new IpAddressInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['ipAccessControlListSid'], $this->solution['sid']);
    }
    /**
     * Update the IpAddressInstance
     *
     * @param array|Options $options Optional Arguments
     * @return IpAddressInstance Updated IpAddressInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : IpAddressInstance
    {
        $options = new Values($options);
        $data = Values::of(['IpAddress' => $options['ipAddress'], 'FriendlyName' => $options['friendlyName'], 'CidrPrefixLength' => $options['cidrPrefixLength']]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new IpAddressInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['ipAccessControlListSid'], $this->solution['sid']);
    }
    /**
     * Delete the IpAddressInstance
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
        return '[Twilio.Api.V2010.IpAddressContext ' . \implode(' ', $context) . ']';
    }
}
