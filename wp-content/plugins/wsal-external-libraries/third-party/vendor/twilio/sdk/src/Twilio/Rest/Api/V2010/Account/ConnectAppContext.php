<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account;

use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceContext;
use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Serialize;
use WSAL_Vendor\Twilio\Values;
use WSAL_Vendor\Twilio\Version;
class ConnectAppContext extends InstanceContext
{
    /**
     * Initialize the ConnectAppContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     *                           to fetch
     * @param string $sid The unique string that identifies the resource
     */
    public function __construct(Version $version, $accountSid, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'sid' => $sid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/ConnectApps/' . \rawurlencode($sid) . '.json';
    }
    /**
     * Fetch the ConnectAppInstance
     *
     * @return ConnectAppInstance Fetched ConnectAppInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : ConnectAppInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new ConnectAppInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['sid']);
    }
    /**
     * Update the ConnectAppInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ConnectAppInstance Updated ConnectAppInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : ConnectAppInstance
    {
        $options = new Values($options);
        $data = Values::of(['AuthorizeRedirectUrl' => $options['authorizeRedirectUrl'], 'CompanyName' => $options['companyName'], 'DeauthorizeCallbackMethod' => $options['deauthorizeCallbackMethod'], 'DeauthorizeCallbackUrl' => $options['deauthorizeCallbackUrl'], 'Description' => $options['description'], 'FriendlyName' => $options['friendlyName'], 'HomepageUrl' => $options['homepageUrl'], 'Permissions' => Serialize::map($options['permissions'], function ($e) {
            return $e;
        })]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new ConnectAppInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['sid']);
    }
    /**
     * Delete the ConnectAppInstance
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
        return '[Twilio.Api.V2010.ConnectAppContext ' . \implode(' ', $context) . ']';
    }
}
