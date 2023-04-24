<?php
// This file was auto-generated from sdk-root/src/data/sagemaker-geospatial/2020-05-27/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial-fips.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-gov-east-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial-fips.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-gov-east-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-gov-east-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-gov-east-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial-fips.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseFIPS' => true, 'Region' => 'cn-north-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial-fips.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => true, 'Region' => 'cn-north-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'cn-north-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'cn-north-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-iso-east-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-iso-east-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-iso-east-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-iso-east-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial-fips.us-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-east-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial-fips.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-east-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial.us-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-east-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-east-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-isob-east-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-isob-east-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-isob-east-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://sagemaker-geospatial.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-isob-east-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-east-1', 'UseDualStack' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-east-1', 'UseDualStack' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-east-1', 'UseDualStack' => true, 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
