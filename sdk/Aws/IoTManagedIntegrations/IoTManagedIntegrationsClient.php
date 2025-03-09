<?php
namespace Aws\IoTManagedIntegrations;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Managed integrations for AWS IoT Device Management** service.
 * @method \Aws\Result createCredentialLocker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCredentialLockerAsync(array $args = [])
 * @method \Aws\Result createDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDestinationAsync(array $args = [])
 * @method \Aws\Result createEventLogConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createEventLogConfigurationAsync(array $args = [])
 * @method \Aws\Result createManagedThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createManagedThingAsync(array $args = [])
 * @method \Aws\Result createNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNotificationConfigurationAsync(array $args = [])
 * @method \Aws\Result createOtaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOtaTaskAsync(array $args = [])
 * @method \Aws\Result createOtaTaskConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOtaTaskConfigurationAsync(array $args = [])
 * @method \Aws\Result createProvisioningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProvisioningProfileAsync(array $args = [])
 * @method \Aws\Result deleteCredentialLocker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCredentialLockerAsync(array $args = [])
 * @method \Aws\Result deleteDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDestinationAsync(array $args = [])
 * @method \Aws\Result deleteEventLogConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteEventLogConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteManagedThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteManagedThingAsync(array $args = [])
 * @method \Aws\Result deleteNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNotificationConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteOtaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOtaTaskAsync(array $args = [])
 * @method \Aws\Result deleteOtaTaskConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOtaTaskConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteProvisioningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProvisioningProfileAsync(array $args = [])
 * @method \Aws\Result getCredentialLocker(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCredentialLockerAsync(array $args = [])
 * @method \Aws\Result getCustomEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCustomEndpointAsync(array $args = [])
 * @method \Aws\Result getDefaultEncryptionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDefaultEncryptionConfigurationAsync(array $args = [])
 * @method \Aws\Result getDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDestinationAsync(array $args = [])
 * @method \Aws\Result getDeviceDiscovery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceDiscoveryAsync(array $args = [])
 * @method \Aws\Result getEventLogConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getEventLogConfigurationAsync(array $args = [])
 * @method \Aws\Result getHubConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getHubConfigurationAsync(array $args = [])
 * @method \Aws\Result getManagedThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getManagedThingAsync(array $args = [])
 * @method \Aws\Result getManagedThingCapabilities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getManagedThingCapabilitiesAsync(array $args = [])
 * @method \Aws\Result getManagedThingConnectivityData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getManagedThingConnectivityDataAsync(array $args = [])
 * @method \Aws\Result getManagedThingMetaData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getManagedThingMetaDataAsync(array $args = [])
 * @method \Aws\Result getManagedThingState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getManagedThingStateAsync(array $args = [])
 * @method \Aws\Result getNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getNotificationConfigurationAsync(array $args = [])
 * @method \Aws\Result getOtaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOtaTaskAsync(array $args = [])
 * @method \Aws\Result getOtaTaskConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOtaTaskConfigurationAsync(array $args = [])
 * @method \Aws\Result getProvisioningProfile(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getProvisioningProfileAsync(array $args = [])
 * @method \Aws\Result getRuntimeLogConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRuntimeLogConfigurationAsync(array $args = [])
 * @method \Aws\Result getSchemaVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSchemaVersionAsync(array $args = [])
 * @method \Aws\Result listCredentialLockers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCredentialLockersAsync(array $args = [])
 * @method \Aws\Result listDestinations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDestinationsAsync(array $args = [])
 * @method \Aws\Result listEventLogConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listEventLogConfigurationsAsync(array $args = [])
 * @method \Aws\Result listManagedThingSchemas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listManagedThingSchemasAsync(array $args = [])
 * @method \Aws\Result listManagedThings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listManagedThingsAsync(array $args = [])
 * @method \Aws\Result listNotificationConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNotificationConfigurationsAsync(array $args = [])
 * @method \Aws\Result listOtaTaskConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOtaTaskConfigurationsAsync(array $args = [])
 * @method \Aws\Result listOtaTaskExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOtaTaskExecutionsAsync(array $args = [])
 * @method \Aws\Result listOtaTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOtaTasksAsync(array $args = [])
 * @method \Aws\Result listProvisioningProfiles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProvisioningProfilesAsync(array $args = [])
 * @method \Aws\Result listSchemaVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSchemaVersionsAsync(array $args = [])
 * @method \Aws\Result putDefaultEncryptionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDefaultEncryptionConfigurationAsync(array $args = [])
 * @method \Aws\Result putHubConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putHubConfigurationAsync(array $args = [])
 * @method \Aws\Result putRuntimeLogConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRuntimeLogConfigurationAsync(array $args = [])
 * @method \Aws\Result registerCustomEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerCustomEndpointAsync(array $args = [])
 * @method \Aws\Result resetRuntimeLogConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetRuntimeLogConfigurationAsync(array $args = [])
 * @method \Aws\Result sendManagedThingCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendManagedThingCommandAsync(array $args = [])
 * @method \Aws\Result startDeviceDiscovery(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDeviceDiscoveryAsync(array $args = [])
 * @method \Aws\Result updateDestination(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDestinationAsync(array $args = [])
 * @method \Aws\Result updateEventLogConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateEventLogConfigurationAsync(array $args = [])
 * @method \Aws\Result updateManagedThing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateManagedThingAsync(array $args = [])
 * @method \Aws\Result updateNotificationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateNotificationConfigurationAsync(array $args = [])
 * @method \Aws\Result updateOtaTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOtaTaskAsync(array $args = [])
 */
class IoTManagedIntegrationsClient extends AwsClient {}
