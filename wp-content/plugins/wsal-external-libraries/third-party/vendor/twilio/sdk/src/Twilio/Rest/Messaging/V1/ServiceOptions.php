<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Messaging\V1;

use WSAL_Vendor\Twilio\Options;
use WSAL_Vendor\Twilio\Values;
/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class ServiceOptions
{
    /**
     * @param string $inboundRequestUrl The URL we call using inbound_method when a
     *                                  message is received by any phone number or
     *                                  short code in the Service. This field will
     *                                  be overridden if the
     *                                  `use_inbound_webhook_on_number` field is
     *                                  enabled.
     * @param string $inboundMethod The HTTP method we should use to call
     *                              inbound_request_url
     * @param string $fallbackUrl The URL that we call using fallback_method if an
     *                            error occurs while retrieving or executing the
     *                            TwiML from the Inbound Request URL. This field
     *                            will be overridden if the
     *                            `use_inbound_webhook_on_number` field is enabled.
     * @param string $fallbackMethod The HTTP method we should use to call
     *                               fallback_url
     * @param string $statusCallback The URL we should call to pass status updates
     *                               about message delivery
     * @param bool $stickySender Whether to enable Sticky Sender on the Service
     *                           instance
     * @param bool $mmsConverter Whether to enable the MMS Converter for messages
     *                           sent through the Service instance
     * @param bool $smartEncoding Whether to enable Encoding for messages sent
     *                            through the Service instance
     * @param string $scanMessageContent Reserved
     * @param bool $fallbackToLongCode Whether to enable Fallback to Long Code for
     *                                 messages sent through the Service instance
     * @param bool $areaCodeGeomatch Whether to enable Area Code Geomatch on the
     *                               Service Instance
     * @param int $validityPeriod How long, in seconds, messages sent from the
     *                            Service are valid
     * @param bool $synchronousValidation Reserved
     * @param string $usecase A string describing the scenario in which the
     *                        Messaging Service will be used
     * @param bool $useInboundWebhookOnNumber If enabled, the webhook url
     *                                        configured on the phone number will
     *                                        be used and will override the
     *                                        `inbound_request_url`/`fallback_url`
     *                                        url called when an inbound message is
     *                                        received.
     * @return CreateServiceOptions Options builder
     */
    public static function create(string $inboundRequestUrl = Values::NONE, string $inboundMethod = Values::NONE, string $fallbackUrl = Values::NONE, string $fallbackMethod = Values::NONE, string $statusCallback = Values::NONE, bool $stickySender = Values::NONE, bool $mmsConverter = Values::NONE, bool $smartEncoding = Values::NONE, string $scanMessageContent = Values::NONE, bool $fallbackToLongCode = Values::NONE, bool $areaCodeGeomatch = Values::NONE, int $validityPeriod = Values::NONE, bool $synchronousValidation = Values::NONE, string $usecase = Values::NONE, bool $useInboundWebhookOnNumber = Values::NONE) : CreateServiceOptions
    {
        return new CreateServiceOptions($inboundRequestUrl, $inboundMethod, $fallbackUrl, $fallbackMethod, $statusCallback, $stickySender, $mmsConverter, $smartEncoding, $scanMessageContent, $fallbackToLongCode, $areaCodeGeomatch, $validityPeriod, $synchronousValidation, $usecase, $useInboundWebhookOnNumber);
    }
    /**
     * @param string $friendlyName A string to describe the resource
     * @param string $inboundRequestUrl The URL we call using inbound_method when a
     *                                  message is received by any phone number or
     *                                  short code in the Service. This field will
     *                                  be overridden if the
     *                                  `use_inbound_webhook_on_number` field is
     *                                  enabled.
     * @param string $inboundMethod The HTTP method we should use to call
     *                              inbound_request_url
     * @param string $fallbackUrl The URL that we call using fallback_method if an
     *                            error occurs while retrieving or executing the
     *                            TwiML from the Inbound Request URL. This field
     *                            will be overridden if the
     *                            `use_inbound_webhook_on_number` field is enabled.
     * @param string $fallbackMethod The HTTP method we should use to call
     *                               fallback_url
     * @param string $statusCallback The URL we should call to pass status updates
     *                               about message delivery
     * @param bool $stickySender Whether to enable Sticky Sender on the Service
     *                           instance
     * @param bool $mmsConverter Whether to enable the MMS Converter for messages
     *                           sent through the Service instance
     * @param bool $smartEncoding Whether to enable Encoding for messages sent
     *                            through the Service instance
     * @param string $scanMessageContent Reserved
     * @param bool $fallbackToLongCode Whether to enable Fallback to Long Code for
     *                                 messages sent through the Service instance
     * @param bool $areaCodeGeomatch Whether to enable Area Code Geomatch on the
     *                               Service Instance
     * @param int $validityPeriod How long, in seconds, messages sent from the
     *                            Service are valid
     * @param bool $synchronousValidation Reserved
     * @param string $usecase A string describing the scenario in which the
     *                        Messaging Service will be used
     * @param bool $useInboundWebhookOnNumber If enabled, the webhook url
     *                                        configured on the phone number will
     *                                        be used and will override the
     *                                        `inbound_request_url`/`fallback_url`
     *                                        url called when an inbound message is
     *                                        received.
     * @return UpdateServiceOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE, string $inboundRequestUrl = Values::NONE, string $inboundMethod = Values::NONE, string $fallbackUrl = Values::NONE, string $fallbackMethod = Values::NONE, string $statusCallback = Values::NONE, bool $stickySender = Values::NONE, bool $mmsConverter = Values::NONE, bool $smartEncoding = Values::NONE, string $scanMessageContent = Values::NONE, bool $fallbackToLongCode = Values::NONE, bool $areaCodeGeomatch = Values::NONE, int $validityPeriod = Values::NONE, bool $synchronousValidation = Values::NONE, string $usecase = Values::NONE, bool $useInboundWebhookOnNumber = Values::NONE) : UpdateServiceOptions
    {
        return new UpdateServiceOptions($friendlyName, $inboundRequestUrl, $inboundMethod, $fallbackUrl, $fallbackMethod, $statusCallback, $stickySender, $mmsConverter, $smartEncoding, $scanMessageContent, $fallbackToLongCode, $areaCodeGeomatch, $validityPeriod, $synchronousValidation, $usecase, $useInboundWebhookOnNumber);
    }
}
class CreateServiceOptions extends Options
{
    /**
     * @param string $inboundRequestUrl The URL we call using inbound_method when a
     *                                  message is received by any phone number or
     *                                  short code in the Service. This field will
     *                                  be overridden if the
     *                                  `use_inbound_webhook_on_number` field is
     *                                  enabled.
     * @param string $inboundMethod The HTTP method we should use to call
     *                              inbound_request_url
     * @param string $fallbackUrl The URL that we call using fallback_method if an
     *                            error occurs while retrieving or executing the
     *                            TwiML from the Inbound Request URL. This field
     *                            will be overridden if the
     *                            `use_inbound_webhook_on_number` field is enabled.
     * @param string $fallbackMethod The HTTP method we should use to call
     *                               fallback_url
     * @param string $statusCallback The URL we should call to pass status updates
     *                               about message delivery
     * @param bool $stickySender Whether to enable Sticky Sender on the Service
     *                           instance
     * @param bool $mmsConverter Whether to enable the MMS Converter for messages
     *                           sent through the Service instance
     * @param bool $smartEncoding Whether to enable Encoding for messages sent
     *                            through the Service instance
     * @param string $scanMessageContent Reserved
     * @param bool $fallbackToLongCode Whether to enable Fallback to Long Code for
     *                                 messages sent through the Service instance
     * @param bool $areaCodeGeomatch Whether to enable Area Code Geomatch on the
     *                               Service Instance
     * @param int $validityPeriod How long, in seconds, messages sent from the
     *                            Service are valid
     * @param bool $synchronousValidation Reserved
     * @param string $usecase A string describing the scenario in which the
     *                        Messaging Service will be used
     * @param bool $useInboundWebhookOnNumber If enabled, the webhook url
     *                                        configured on the phone number will
     *                                        be used and will override the
     *                                        `inbound_request_url`/`fallback_url`
     *                                        url called when an inbound message is
     *                                        received.
     */
    public function __construct(string $inboundRequestUrl = Values::NONE, string $inboundMethod = Values::NONE, string $fallbackUrl = Values::NONE, string $fallbackMethod = Values::NONE, string $statusCallback = Values::NONE, bool $stickySender = Values::NONE, bool $mmsConverter = Values::NONE, bool $smartEncoding = Values::NONE, string $scanMessageContent = Values::NONE, bool $fallbackToLongCode = Values::NONE, bool $areaCodeGeomatch = Values::NONE, int $validityPeriod = Values::NONE, bool $synchronousValidation = Values::NONE, string $usecase = Values::NONE, bool $useInboundWebhookOnNumber = Values::NONE)
    {
        $this->options['inboundRequestUrl'] = $inboundRequestUrl;
        $this->options['inboundMethod'] = $inboundMethod;
        $this->options['fallbackUrl'] = $fallbackUrl;
        $this->options['fallbackMethod'] = $fallbackMethod;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['stickySender'] = $stickySender;
        $this->options['mmsConverter'] = $mmsConverter;
        $this->options['smartEncoding'] = $smartEncoding;
        $this->options['scanMessageContent'] = $scanMessageContent;
        $this->options['fallbackToLongCode'] = $fallbackToLongCode;
        $this->options['areaCodeGeomatch'] = $areaCodeGeomatch;
        $this->options['validityPeriod'] = $validityPeriod;
        $this->options['synchronousValidation'] = $synchronousValidation;
        $this->options['usecase'] = $usecase;
        $this->options['useInboundWebhookOnNumber'] = $useInboundWebhookOnNumber;
    }
    /**
     * The URL we call using `inbound_method` when a message is received by any phone number or short code in the Service. When this property is `null`, receiving inbound messages is disabled. All messages sent to the Twilio phone number or short code will not be logged and received on the Account. If the `use_inbound_webhook_on_number` field is enabled then the webhook url defined on the phone number will override the `inbound_request_url` defined for the Messaging Service.
     *
     * @param string $inboundRequestUrl The URL we call using inbound_method when a
     *                                  message is received by any phone number or
     *                                  short code in the Service. This field will
     *                                  be overridden if the
     *                                  `use_inbound_webhook_on_number` field is
     *                                  enabled.
     * @return $this Fluent Builder
     */
    public function setInboundRequestUrl(string $inboundRequestUrl) : self
    {
        $this->options['inboundRequestUrl'] = $inboundRequestUrl;
        return $this;
    }
    /**
     * The HTTP method we should use to call `inbound_request_url`. Can be `GET` or `POST` and the default is `POST`.
     *
     * @param string $inboundMethod The HTTP method we should use to call
     *                              inbound_request_url
     * @return $this Fluent Builder
     */
    public function setInboundMethod(string $inboundMethod) : self
    {
        $this->options['inboundMethod'] = $inboundMethod;
        return $this;
    }
    /**
     * The URL that we call using `fallback_method` if an error occurs while retrieving or executing the TwiML from the Inbound Request URL. If the `use_inbound_webhook_on_number` field is enabled then the webhook url defined on the phone number will override the `fallback_url` defined for the Messaging Service.
     *
     * @param string $fallbackUrl The URL that we call using fallback_method if an
     *                            error occurs while retrieving or executing the
     *                            TwiML from the Inbound Request URL. This field
     *                            will be overridden if the
     *                            `use_inbound_webhook_on_number` field is enabled.
     * @return $this Fluent Builder
     */
    public function setFallbackUrl(string $fallbackUrl) : self
    {
        $this->options['fallbackUrl'] = $fallbackUrl;
        return $this;
    }
    /**
     * The HTTP method we should use to call `fallback_url`. Can be: `GET` or `POST`.
     *
     * @param string $fallbackMethod The HTTP method we should use to call
     *                               fallback_url
     * @return $this Fluent Builder
     */
    public function setFallbackMethod(string $fallbackMethod) : self
    {
        $this->options['fallbackMethod'] = $fallbackMethod;
        return $this;
    }
    /**
     * The URL we should call to [pass status updates](https://www.twilio.com/docs/sms/api/message-resource#message-status-values) about message delivery.
     *
     * @param string $statusCallback The URL we should call to pass status updates
     *                               about message delivery
     * @return $this Fluent Builder
     */
    public function setStatusCallback(string $statusCallback) : self
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }
    /**
     * Whether to enable [Sticky Sender](https://www.twilio.com/docs/sms/services#sticky-sender) on the Service instance.
     *
     * @param bool $stickySender Whether to enable Sticky Sender on the Service
     *                           instance
     * @return $this Fluent Builder
     */
    public function setStickySender(bool $stickySender) : self
    {
        $this->options['stickySender'] = $stickySender;
        return $this;
    }
    /**
     * Whether to enable the [MMS Converter](https://www.twilio.com/docs/sms/services#mms-converter) for messages sent through the Service instance.
     *
     * @param bool $mmsConverter Whether to enable the MMS Converter for messages
     *                           sent through the Service instance
     * @return $this Fluent Builder
     */
    public function setMmsConverter(bool $mmsConverter) : self
    {
        $this->options['mmsConverter'] = $mmsConverter;
        return $this;
    }
    /**
     * Whether to enable [Smart Encoding](https://www.twilio.com/docs/sms/services#smart-encoding) for messages sent through the Service instance.
     *
     * @param bool $smartEncoding Whether to enable Encoding for messages sent
     *                            through the Service instance
     * @return $this Fluent Builder
     */
    public function setSmartEncoding(bool $smartEncoding) : self
    {
        $this->options['smartEncoding'] = $smartEncoding;
        return $this;
    }
    /**
     * Reserved.
     *
     * @param string $scanMessageContent Reserved
     * @return $this Fluent Builder
     */
    public function setScanMessageContent(string $scanMessageContent) : self
    {
        $this->options['scanMessageContent'] = $scanMessageContent;
        return $this;
    }
    /**
     * Whether to enable [Fallback to Long Code](https://www.twilio.com/docs/sms/services#fallback-to-long-code) for messages sent through the Service instance.
     *
     * @param bool $fallbackToLongCode Whether to enable Fallback to Long Code for
     *                                 messages sent through the Service instance
     * @return $this Fluent Builder
     */
    public function setFallbackToLongCode(bool $fallbackToLongCode) : self
    {
        $this->options['fallbackToLongCode'] = $fallbackToLongCode;
        return $this;
    }
    /**
     * Whether to enable [Area Code Geomatch](https://www.twilio.com/docs/sms/services#area-code-geomatch) on the Service Instance.
     *
     * @param bool $areaCodeGeomatch Whether to enable Area Code Geomatch on the
     *                               Service Instance
     * @return $this Fluent Builder
     */
    public function setAreaCodeGeomatch(bool $areaCodeGeomatch) : self
    {
        $this->options['areaCodeGeomatch'] = $areaCodeGeomatch;
        return $this;
    }
    /**
     * How long, in seconds, messages sent from the Service are valid. Can be an integer from `1` to `14,400`.
     *
     * @param int $validityPeriod How long, in seconds, messages sent from the
     *                            Service are valid
     * @return $this Fluent Builder
     */
    public function setValidityPeriod(int $validityPeriod) : self
    {
        $this->options['validityPeriod'] = $validityPeriod;
        return $this;
    }
    /**
     * Reserved.
     *
     * @param bool $synchronousValidation Reserved
     * @return $this Fluent Builder
     */
    public function setSynchronousValidation(bool $synchronousValidation) : self
    {
        $this->options['synchronousValidation'] = $synchronousValidation;
        return $this;
    }
    /**
     * A string that describes the scenario in which the Messaging Service will be used. Examples: [notification, marketing, verification, poll ..].
     *
     * @param string $usecase A string describing the scenario in which the
     *                        Messaging Service will be used
     * @return $this Fluent Builder
     */
    public function setUsecase(string $usecase) : self
    {
        $this->options['usecase'] = $usecase;
        return $this;
    }
    /**
     * A boolean value that indicates either the webhook url configured on the phone number will be used or `inbound_request_url`/`fallback_url` url will be called when a message is received from the phone number. If this field is enabled then the webhook url defined on the phone number will override the `inbound_request_url`/`fallback_url` defined for the Messaging Service.
     *
     * @param bool $useInboundWebhookOnNumber If enabled, the webhook url
     *                                        configured on the phone number will
     *                                        be used and will override the
     *                                        `inbound_request_url`/`fallback_url`
     *                                        url called when an inbound message is
     *                                        received.
     * @return $this Fluent Builder
     */
    public function setUseInboundWebhookOnNumber(bool $useInboundWebhookOnNumber) : self
    {
        $this->options['useInboundWebhookOnNumber'] = $useInboundWebhookOnNumber;
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
        return '[Twilio.Messaging.V1.CreateServiceOptions ' . $options . ']';
    }
}
class UpdateServiceOptions extends Options
{
    /**
     * @param string $friendlyName A string to describe the resource
     * @param string $inboundRequestUrl The URL we call using inbound_method when a
     *                                  message is received by any phone number or
     *                                  short code in the Service. This field will
     *                                  be overridden if the
     *                                  `use_inbound_webhook_on_number` field is
     *                                  enabled.
     * @param string $inboundMethod The HTTP method we should use to call
     *                              inbound_request_url
     * @param string $fallbackUrl The URL that we call using fallback_method if an
     *                            error occurs while retrieving or executing the
     *                            TwiML from the Inbound Request URL. This field
     *                            will be overridden if the
     *                            `use_inbound_webhook_on_number` field is enabled.
     * @param string $fallbackMethod The HTTP method we should use to call
     *                               fallback_url
     * @param string $statusCallback The URL we should call to pass status updates
     *                               about message delivery
     * @param bool $stickySender Whether to enable Sticky Sender on the Service
     *                           instance
     * @param bool $mmsConverter Whether to enable the MMS Converter for messages
     *                           sent through the Service instance
     * @param bool $smartEncoding Whether to enable Encoding for messages sent
     *                            through the Service instance
     * @param string $scanMessageContent Reserved
     * @param bool $fallbackToLongCode Whether to enable Fallback to Long Code for
     *                                 messages sent through the Service instance
     * @param bool $areaCodeGeomatch Whether to enable Area Code Geomatch on the
     *                               Service Instance
     * @param int $validityPeriod How long, in seconds, messages sent from the
     *                            Service are valid
     * @param bool $synchronousValidation Reserved
     * @param string $usecase A string describing the scenario in which the
     *                        Messaging Service will be used
     * @param bool $useInboundWebhookOnNumber If enabled, the webhook url
     *                                        configured on the phone number will
     *                                        be used and will override the
     *                                        `inbound_request_url`/`fallback_url`
     *                                        url called when an inbound message is
     *                                        received.
     */
    public function __construct(string $friendlyName = Values::NONE, string $inboundRequestUrl = Values::NONE, string $inboundMethod = Values::NONE, string $fallbackUrl = Values::NONE, string $fallbackMethod = Values::NONE, string $statusCallback = Values::NONE, bool $stickySender = Values::NONE, bool $mmsConverter = Values::NONE, bool $smartEncoding = Values::NONE, string $scanMessageContent = Values::NONE, bool $fallbackToLongCode = Values::NONE, bool $areaCodeGeomatch = Values::NONE, int $validityPeriod = Values::NONE, bool $synchronousValidation = Values::NONE, string $usecase = Values::NONE, bool $useInboundWebhookOnNumber = Values::NONE)
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['inboundRequestUrl'] = $inboundRequestUrl;
        $this->options['inboundMethod'] = $inboundMethod;
        $this->options['fallbackUrl'] = $fallbackUrl;
        $this->options['fallbackMethod'] = $fallbackMethod;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['stickySender'] = $stickySender;
        $this->options['mmsConverter'] = $mmsConverter;
        $this->options['smartEncoding'] = $smartEncoding;
        $this->options['scanMessageContent'] = $scanMessageContent;
        $this->options['fallbackToLongCode'] = $fallbackToLongCode;
        $this->options['areaCodeGeomatch'] = $areaCodeGeomatch;
        $this->options['validityPeriod'] = $validityPeriod;
        $this->options['synchronousValidation'] = $synchronousValidation;
        $this->options['usecase'] = $usecase;
        $this->options['useInboundWebhookOnNumber'] = $useInboundWebhookOnNumber;
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
     * The URL we call using `inbound_method` when a message is received by any phone number or short code in the Service. When this property is `null`, receiving inbound messages is disabled. All messages sent to the Twilio phone number or short code will not be logged and received on the Account. If the `use_inbound_webhook_on_number` field is enabled then the webhook url defined on the phone number will override the `inbound_request_url` defined for the Messaging Service.
     *
     * @param string $inboundRequestUrl The URL we call using inbound_method when a
     *                                  message is received by any phone number or
     *                                  short code in the Service. This field will
     *                                  be overridden if the
     *                                  `use_inbound_webhook_on_number` field is
     *                                  enabled.
     * @return $this Fluent Builder
     */
    public function setInboundRequestUrl(string $inboundRequestUrl) : self
    {
        $this->options['inboundRequestUrl'] = $inboundRequestUrl;
        return $this;
    }
    /**
     * The HTTP method we should use to call `inbound_request_url`. Can be `GET` or `POST` and the default is `POST`.
     *
     * @param string $inboundMethod The HTTP method we should use to call
     *                              inbound_request_url
     * @return $this Fluent Builder
     */
    public function setInboundMethod(string $inboundMethod) : self
    {
        $this->options['inboundMethod'] = $inboundMethod;
        return $this;
    }
    /**
     * The URL that we call using `fallback_method` if an error occurs while retrieving or executing the TwiML from the Inbound Request URL. If the `use_inbound_webhook_on_number` field is enabled then the webhook url defined on the phone number will override the `fallback_url` defined for the Messaging Service.
     *
     * @param string $fallbackUrl The URL that we call using fallback_method if an
     *                            error occurs while retrieving or executing the
     *                            TwiML from the Inbound Request URL. This field
     *                            will be overridden if the
     *                            `use_inbound_webhook_on_number` field is enabled.
     * @return $this Fluent Builder
     */
    public function setFallbackUrl(string $fallbackUrl) : self
    {
        $this->options['fallbackUrl'] = $fallbackUrl;
        return $this;
    }
    /**
     * The HTTP method we should use to call `fallback_url`. Can be: `GET` or `POST`.
     *
     * @param string $fallbackMethod The HTTP method we should use to call
     *                               fallback_url
     * @return $this Fluent Builder
     */
    public function setFallbackMethod(string $fallbackMethod) : self
    {
        $this->options['fallbackMethod'] = $fallbackMethod;
        return $this;
    }
    /**
     * The URL we should call to [pass status updates](https://www.twilio.com/docs/sms/api/message-resource#message-status-values) about message delivery.
     *
     * @param string $statusCallback The URL we should call to pass status updates
     *                               about message delivery
     * @return $this Fluent Builder
     */
    public function setStatusCallback(string $statusCallback) : self
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }
    /**
     * Whether to enable [Sticky Sender](https://www.twilio.com/docs/sms/services#sticky-sender) on the Service instance.
     *
     * @param bool $stickySender Whether to enable Sticky Sender on the Service
     *                           instance
     * @return $this Fluent Builder
     */
    public function setStickySender(bool $stickySender) : self
    {
        $this->options['stickySender'] = $stickySender;
        return $this;
    }
    /**
     * Whether to enable the [MMS Converter](https://www.twilio.com/docs/sms/services#mms-converter) for messages sent through the Service instance.
     *
     * @param bool $mmsConverter Whether to enable the MMS Converter for messages
     *                           sent through the Service instance
     * @return $this Fluent Builder
     */
    public function setMmsConverter(bool $mmsConverter) : self
    {
        $this->options['mmsConverter'] = $mmsConverter;
        return $this;
    }
    /**
     * Whether to enable [Smart Encoding](https://www.twilio.com/docs/sms/services#smart-encoding) for messages sent through the Service instance.
     *
     * @param bool $smartEncoding Whether to enable Encoding for messages sent
     *                            through the Service instance
     * @return $this Fluent Builder
     */
    public function setSmartEncoding(bool $smartEncoding) : self
    {
        $this->options['smartEncoding'] = $smartEncoding;
        return $this;
    }
    /**
     * Reserved.
     *
     * @param string $scanMessageContent Reserved
     * @return $this Fluent Builder
     */
    public function setScanMessageContent(string $scanMessageContent) : self
    {
        $this->options['scanMessageContent'] = $scanMessageContent;
        return $this;
    }
    /**
     * Whether to enable [Fallback to Long Code](https://www.twilio.com/docs/sms/services#fallback-to-long-code) for messages sent through the Service instance.
     *
     * @param bool $fallbackToLongCode Whether to enable Fallback to Long Code for
     *                                 messages sent through the Service instance
     * @return $this Fluent Builder
     */
    public function setFallbackToLongCode(bool $fallbackToLongCode) : self
    {
        $this->options['fallbackToLongCode'] = $fallbackToLongCode;
        return $this;
    }
    /**
     * Whether to enable [Area Code Geomatch](https://www.twilio.com/docs/sms/services#area-code-geomatch) on the Service Instance.
     *
     * @param bool $areaCodeGeomatch Whether to enable Area Code Geomatch on the
     *                               Service Instance
     * @return $this Fluent Builder
     */
    public function setAreaCodeGeomatch(bool $areaCodeGeomatch) : self
    {
        $this->options['areaCodeGeomatch'] = $areaCodeGeomatch;
        return $this;
    }
    /**
     * How long, in seconds, messages sent from the Service are valid. Can be an integer from `1` to `14,400`.
     *
     * @param int $validityPeriod How long, in seconds, messages sent from the
     *                            Service are valid
     * @return $this Fluent Builder
     */
    public function setValidityPeriod(int $validityPeriod) : self
    {
        $this->options['validityPeriod'] = $validityPeriod;
        return $this;
    }
    /**
     * Reserved.
     *
     * @param bool $synchronousValidation Reserved
     * @return $this Fluent Builder
     */
    public function setSynchronousValidation(bool $synchronousValidation) : self
    {
        $this->options['synchronousValidation'] = $synchronousValidation;
        return $this;
    }
    /**
     * A string that describes the scenario in which the Messaging Service will be used. Examples: [notification, marketing, verification, poll ..]
     *
     * @param string $usecase A string describing the scenario in which the
     *                        Messaging Service will be used
     * @return $this Fluent Builder
     */
    public function setUsecase(string $usecase) : self
    {
        $this->options['usecase'] = $usecase;
        return $this;
    }
    /**
     * A boolean value that indicates either the webhook url configured on the phone number will be used or `inbound_request_url`/`fallback_url` url will be called when a message is received from the phone number. If this field is enabled then the webhook url defined on the phone number will override the `inbound_request_url`/`fallback_url` defined for the Messaging Service.
     *
     * @param bool $useInboundWebhookOnNumber If enabled, the webhook url
     *                                        configured on the phone number will
     *                                        be used and will override the
     *                                        `inbound_request_url`/`fallback_url`
     *                                        url called when an inbound message is
     *                                        received.
     * @return $this Fluent Builder
     */
    public function setUseInboundWebhookOnNumber(bool $useInboundWebhookOnNumber) : self
    {
        $this->options['useInboundWebhookOnNumber'] = $useInboundWebhookOnNumber;
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
        return '[Twilio.Messaging.V1.UpdateServiceOptions ' . $options . ']';
    }
}
