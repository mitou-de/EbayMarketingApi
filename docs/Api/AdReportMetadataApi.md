# EbayMarketingApi\AdReportMetadataApi

All URIs are relative to *https://api.ebay.com/sell/marketing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReportMetadata**](AdReportMetadataApi.md#getReportMetadata) | **GET** /ad_report_metadata | 
[**getReportMetadataForReportType**](AdReportMetadataApi.md#getReportMetadataForReportType) | **GET** /ad_report_metadata/{report_type} | 



## getReportMetadata

> \EbayMarketingApi\Model\ReportMetadatas getReportMetadata()



This call retrieves information that details the fields used in each of the Promoted Listings reports. The request for this method does not use a payload or any URI parameters. Use the information returned by this method to configure the different Promoted Listings report types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = EbayMarketingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EbayMarketingApi\Api\AdReportMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getReportMetadata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdReportMetadataApi->getReportMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\EbayMarketingApi\Model\ReportMetadatas**](../Model/ReportMetadatas.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReportMetadataForReportType

> \EbayMarketingApi\Model\ReportMetadata getReportMetadataForReportType($report_type)



This call retrieves metadata that details the fields used by the Promoted Listings report type that's specified by the report_type path parameter. This method does not use a request payload. Use the information returned by this method to configure the specified Promoted Listings report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = EbayMarketingApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new EbayMarketingApi\Api\AdReportMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_type = 'report_type_example'; // string | The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &nbsp;&nbsp;&nbsp;ACCOUNT_PERFORMANCE_REPORT &nbsp;&nbsp;&nbsp;CAMPAIGN_PERFORMANCE_REPORT &nbsp;&nbsp;&nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &nbsp;&nbsp;&nbsp;LISTING_PERFORMANCE_REPORT &nbsp;&nbsp;&nbsp;INVENTORY_PERFORMANCE_REPORT

try {
    $result = $apiInstance->getReportMetadataForReportType($report_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdReportMetadataApi->getReportMetadataForReportType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_type** | **string**| The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT |

### Return type

[**\EbayMarketingApi\Model\ReportMetadata**](../Model/ReportMetadata.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

