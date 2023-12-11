<?php
namespace Aws\CloudWatch;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudWatch** service.
 *
 * @method \Aws\Result deleteAlarms(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise deleteAlarmsAsync(array $args = [])
 * @method \Aws\Result deleteAnomalyDetector(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise deleteAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result deleteDashboards(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise deleteDashboardsAsync(array $args = [])
 * @method \Aws\Result deleteInsightRules(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise deleteInsightRulesAsync(array $args = [])
 * @method \Aws\Result deleteMetricStream(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise deleteMetricStreamAsync(array $args = [])
 * @method \Aws\Result describeAlarmHistory(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise describeAlarmHistoryAsync(array $args = [])
 * @method \Aws\Result describeAlarms(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise describeAlarmsAsync(array $args = [])
 * @method \Aws\Result describeAlarmsForMetric(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise describeAlarmsForMetricAsync(array $args = [])
 * @method \Aws\Result describeAnomalyDetectors(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise describeAnomalyDetectorsAsync(array $args = [])
 * @method \Aws\Result describeInsightRules(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise describeInsightRulesAsync(array $args = [])
 * @method \Aws\Result disableAlarmActions(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise disableAlarmActionsAsync(array $args = [])
 * @method \Aws\Result disableInsightRules(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise disableInsightRulesAsync(array $args = [])
 * @method \Aws\Result enableAlarmActions(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise enableAlarmActionsAsync(array $args = [])
 * @method \Aws\Result enableInsightRules(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise enableInsightRulesAsync(array $args = [])
 * @method \Aws\Result getDashboard(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise getDashboardAsync(array $args = [])
 * @method \Aws\Result getInsightRuleReport(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise getInsightRuleReportAsync(array $args = [])
 * @method \Aws\Result getMetricData(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise getMetricDataAsync(array $args = [])
 * @method \Aws\Result getMetricStatistics(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise getMetricStatisticsAsync(array $args = [])
 * @method \Aws\Result getMetricStream(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise getMetricStreamAsync(array $args = [])
 * @method \Aws\Result getMetricWidgetImage(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise getMetricWidgetImageAsync(array $args = [])
 * @method \Aws\Result listDashboards(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise listDashboardsAsync(array $args = [])
 * @method \Aws\Result listMetricStreams(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise listMetricStreamsAsync(array $args = [])
 * @method \Aws\Result listMetrics(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise listMetricsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putAnomalyDetector(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise putAnomalyDetectorAsync(array $args = [])
 * @method \Aws\Result putCompositeAlarm(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise putCompositeAlarmAsync(array $args = [])
 * @method \Aws\Result putDashboard(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise putDashboardAsync(array $args = [])
 * @method \Aws\Result putInsightRule(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise putInsightRuleAsync(array $args = [])
 * @method \Aws\Result putMetricAlarm(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise putMetricAlarmAsync(array $args = [])
 * @method \Aws\Result putMetricData(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise putMetricDataAsync(array $args = [])
 * @method \Aws\Result putMetricStream(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise putMetricStreamAsync(array $args = [])
 * @method \Aws\Result setAlarmState(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise setAlarmStateAsync(array $args = [])
 * @method \Aws\Result startMetricStreams(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise startMetricStreamsAsync(array $args = [])
 * @method \Aws\Result stopMetricStreams(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise stopMetricStreamsAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \WSAL_Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 */
class CloudWatchClient extends AwsClient {}