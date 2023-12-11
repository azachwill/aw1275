<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes;

use WSAL_Vendor\Twilio\Exceptions\TwilioException;
use WSAL_Vendor\Twilio\InstanceContext;
use WSAL_Vendor\Twilio\ListResource;
use WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeRegistrations\AuthRegistrationsCredentialListMappingList;
use WSAL_Vendor\Twilio\Version;
/**
 * @property AuthRegistrationsCredentialListMappingList $credentialListMappings
 * @method \Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeRegistrations\AuthRegistrationsCredentialListMappingContext credentialListMappings(string $sid)
 */
class AuthTypeRegistrationsList extends ListResource
{
    protected $_credentialListMappings = null;
    /**
     * Construct the AuthTypeRegistrationsList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     * @param string $domainSid The unique string that identifies the resource
     */
    public function __construct(Version $version, string $accountSid, string $domainSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'domainSid' => $domainSid];
    }
    /**
     * Access the credentialListMappings
     */
    protected function getCredentialListMappings() : AuthRegistrationsCredentialListMappingList
    {
        if (!$this->_credentialListMappings) {
            $this->_credentialListMappings = new AuthRegistrationsCredentialListMappingList($this->version, $this->solution['accountSid'], $this->solution['domainSid']);
        }
        return $this->_credentialListMappings;
    }
    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return \Twilio\ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name)
    {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->{$method}();
        }
        throw new TwilioException('Unknown subresource ' . $name);
    }
    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments) : InstanceContext
    {
        $property = $this->{$name};
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }
        throw new TwilioException('Resource does not have a context');
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Api.V2010.AuthTypeRegistrationsList]';
    }
}
