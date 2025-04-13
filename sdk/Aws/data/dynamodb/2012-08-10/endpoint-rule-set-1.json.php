<?php
// This file was auto-generated from sdk-root/src/data/dynamodb/2012-08-10/endpoint-rule-set-1.json
return [ 'version' => '1.0', 'parameters' => [ 'Region' => [ 'builtIn' => 'AWS::Region', 'required' => false, 'documentation' => 'The AWS region used to dispatch the request.', 'type' => 'String', ], 'UseDualStack' => [ 'builtIn' => 'AWS::UseDualStack', 'required' => true, 'default' => false, 'documentation' => 'When true, use the dual-stack endpoint. If the configured endpoint does not support dual-stack, dispatching the request MAY return an error.', 'type' => 'Boolean', ], 'UseFIPS' => [ 'builtIn' => 'AWS::UseFIPS', 'required' => true, 'default' => false, 'documentation' => 'When true, send this request to the FIPS-compliant regional endpoint. If the configured endpoint does not have a FIPS compliant endpoint, dispatching the request will return an error.', 'type' => 'Boolean', ], 'Endpoint' => [ 'builtIn' => 'SDK::Endpoint', 'required' => false, 'documentation' => 'Override the endpoint used to send this request', 'type' => 'String', ], 'AccountId' => [ 'builtIn' => 'AWS::Auth::AccountId', 'required' => false, 'documentation' => 'The AWS AccountId used for the request.', 'type' => 'String', ], 'AccountIdEndpointMode' => [ 'builtIn' => 'AWS::Auth::AccountIdEndpointMode', 'required' => false, 'documentation' => 'The AccountId Endpoint Mode.', 'type' => 'String', ], 'ResourceArn' => [ 'required' => false, 'documentation' => 'ResourceArn containing arn of resource', 'type' => 'String', ], 'ResourceArnList' => [ 'required' => false, 'documentation' => 'ResourceArnList containing list of resource arns', 'type' => 'stringArray', ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'Endpoint', ], ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseFIPS', ], true, ], ], ], 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', 'type' => 'error', ], [ 'conditions' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseDualStack', ], true, ], ], ], 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', 'type' => 'error', ], [ 'conditions' => [], 'endpoint' => [ 'url' => '{Endpoint}', 'properties' => [], 'headers' => [], ], 'type' => 'endpoint', ], ], 'type' => 'tree', ], [ 'conditions' => [ [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'Region', ], ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'aws.partition', 'argv' => [ [ 'ref' => 'Region', ], ], 'assign' => 'PartitionResult', ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'stringEquals', 'argv' => [ [ 'ref' => 'Region', ], 'local', ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseFIPS', ], true, ], ], ], 'error' => 'Invalid Configuration: FIPS and local endpoint are not supported', 'type' => 'error', ], [ 'conditions' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseDualStack', ], true, ], ], ], 'error' => 'Invalid Configuration: Dualstack and local endpoint are not supported', 'type' => 'error', ], [ 'conditions' => [], 'endpoint' => [ 'url' => 'http://localhost:8000', 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingName' => 'dynamodb', 'signingRegion' => 'us-east-1', ], ], ], 'headers' => [], ], 'type' => 'endpoint', ], ], 'type' => 'tree', ], [ 'conditions' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseFIPS', ], true, ], ], [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseDualStack', ], true, ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'PartitionResult', ], 'supportsFIPS', ], ], true, ], ], [ 'fn' => 'booleanEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'PartitionResult', ], 'supportsDualStack', ], ], true, ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], ], ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], 'required', ], ], ], 'rules' => [ [ 'conditions' => [], 'error' => 'Invalid Configuration: AccountIdEndpointMode is required and FIPS is enabled, but FIPS account endpoints are not supported', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'endpoint' => [ 'url' => 'https://dynamodb-fips.{Region}.{PartitionResult#dualStackDnsSuffix}', 'properties' => [], 'headers' => [], ], 'type' => 'endpoint', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseFIPS', ], true, ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'PartitionResult', ], 'supportsFIPS', ], ], true, ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'stringEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'PartitionResult', ], 'name', ], ], 'aws-us-gov', ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], ], ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], 'required', ], ], ], 'rules' => [ [ 'conditions' => [], 'error' => 'Invalid Configuration: AccountIdEndpointMode is required and FIPS is enabled, but FIPS account endpoints are not supported', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'endpoint' => [ 'url' => 'https://dynamodb.{Region}.{PartitionResult#dnsSuffix}', 'properties' => [], 'headers' => [], ], 'type' => 'endpoint', ], ], 'type' => 'tree', ], [ 'conditions' => [ [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], ], ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], 'required', ], ], ], 'rules' => [ [ 'conditions' => [], 'error' => 'Invalid Configuration: AccountIdEndpointMode is required and FIPS is enabled, but FIPS account endpoints are not supported', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'endpoint' => [ 'url' => 'https://dynamodb-fips.{Region}.{PartitionResult#dnsSuffix}', 'properties' => [], 'headers' => [], ], 'type' => 'endpoint', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'error' => 'FIPS is enabled but this partition does not support FIPS', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseDualStack', ], true, ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'PartitionResult', ], 'supportsDualStack', ], ], true, ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], ], ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], 'required', ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseFIPS', ], true, ], ], ], ], ], 'rules' => [ [ 'conditions' => [], 'error' => 'Invalid Configuration: AccountIdEndpointMode is required and DualStack is enabled, but DualStack account endpoints are not supported', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'error' => 'Invalid Configuration: AccountIdEndpointMode is required and FIPS is enabled, but FIPS account endpoints are not supported', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'endpoint' => [ 'url' => 'https://dynamodb.{Region}.{PartitionResult#dualStackDnsSuffix}', 'properties' => [], 'headers' => [], ], 'type' => 'endpoint', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'error' => 'DualStack is enabled but this partition does not support DualStack', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [ [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], ], ], [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'stringEquals', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], 'disabled', ], ], ], ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'PartitionResult', ], 'name', ], ], 'aws', ], ], [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseFIPS', ], true, ], ], ], ], [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseDualStack', ], true, ], ], ], ], [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'ResourceArn', ], ], ], [ 'fn' => 'aws.parseArn', 'argv' => [ [ 'ref' => 'ResourceArn', ], ], 'assign' => 'ParsedArn', ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'ParsedArn', ], 'service', ], ], 'dynamodb', ], ], [ 'fn' => 'isValidHostLabel', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'ParsedArn', ], 'region', ], ], false, ], ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'ParsedArn', ], 'region', ], ], '{Region}', ], ], [ 'fn' => 'isValidHostLabel', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'ParsedArn', ], 'accountId', ], ], false, ], ], ], 'endpoint' => [ 'url' => 'https://{ParsedArn#accountId}.ddb.{Region}.{PartitionResult#dnsSuffix}', 'properties' => [], 'headers' => [], ], 'type' => 'endpoint', ], [ 'conditions' => [ [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], ], ], [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'stringEquals', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], 'disabled', ], ], ], ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'PartitionResult', ], 'name', ], ], 'aws', ], ], [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseFIPS', ], true, ], ], ], ], [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseDualStack', ], true, ], ], ], ], [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'ResourceArnList', ], ], ], [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'ResourceArnList', ], '[0]', ], 'assign' => 'FirstArn', ], [ 'fn' => 'aws.parseArn', 'argv' => [ [ 'ref' => 'FirstArn', ], ], 'assign' => 'ParsedArn', ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'ParsedArn', ], 'service', ], ], 'dynamodb', ], ], [ 'fn' => 'isValidHostLabel', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'ParsedArn', ], 'region', ], ], false, ], ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'ParsedArn', ], 'region', ], ], '{Region}', ], ], [ 'fn' => 'isValidHostLabel', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'ParsedArn', ], 'accountId', ], ], false, ], ], ], 'endpoint' => [ 'url' => 'https://{ParsedArn#accountId}.ddb.{Region}.{PartitionResult#dnsSuffix}', 'properties' => [], 'headers' => [], ], 'type' => 'endpoint', ], [ 'conditions' => [ [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], ], ], [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'stringEquals', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], 'disabled', ], ], ], ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'PartitionResult', ], 'name', ], ], 'aws', ], ], [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseFIPS', ], true, ], ], ], ], [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseDualStack', ], true, ], ], ], ], [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'AccountId', ], ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'isValidHostLabel', 'argv' => [ [ 'ref' => 'AccountId', ], false, ], ], ], 'rules' => [ [ 'conditions' => [], 'endpoint' => [ 'url' => 'https://{AccountId}.ddb.{Region}.{PartitionResult#dnsSuffix}', 'properties' => [], 'headers' => [], ], 'type' => 'endpoint', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'error' => 'Credentials-sourced account ID parameter is invalid', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [ [ 'fn' => 'isSet', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], ], ], [ 'fn' => 'stringEquals', 'argv' => [ [ 'ref' => 'AccountIdEndpointMode', ], 'required', ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseFIPS', ], true, ], ], ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'not', 'argv' => [ [ 'fn' => 'booleanEquals', 'argv' => [ [ 'ref' => 'UseDualStack', ], true, ], ], ], ], ], 'rules' => [ [ 'conditions' => [ [ 'fn' => 'stringEquals', 'argv' => [ [ 'fn' => 'getAttr', 'argv' => [ [ 'ref' => 'PartitionResult', ], 'name', ], ], 'aws', ], ], ], 'rules' => [ [ 'conditions' => [], 'error' => 'AccountIdEndpointMode is required but no AccountID was provided or able to be loaded', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'error' => 'Invalid Configuration: AccountIdEndpointMode is required but account endpoints are not supported in this partition', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'error' => 'Invalid Configuration: AccountIdEndpointMode is required and DualStack is enabled, but DualStack account endpoints are not supported', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'error' => 'Invalid Configuration: AccountIdEndpointMode is required and FIPS is enabled, but FIPS account endpoints are not supported', 'type' => 'error', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'endpoint' => [ 'url' => 'https://dynamodb.{Region}.{PartitionResult#dnsSuffix}', 'properties' => [], 'headers' => [], ], 'type' => 'endpoint', ], ], 'type' => 'tree', ], ], 'type' => 'tree', ], [ 'conditions' => [], 'error' => 'Invalid Configuration: Missing Region', 'type' => 'error', ], ],];
