# # AdPagedCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ads** | [**\EbayMarketingApi\Model\Ad[]**](Ad.md) | A list of ads contained on this page from the paginated response. | [optional] 
**href** | **string** | The URI of the current page of results from the result set. | [optional] 
**limit** | **int** | The number of items returned on a single page from the result set. | [optional] 
**next** | **string** | The URI for the next page of results. This value is returned only if there is an additional page of results in the result set. Max length: 2048 | [optional] 
**offset** | **int** | The value of the offset submitted in the request, which is the number of results to skip before listing the first returned result. | [optional] 
**prev** | **string** | The URI for the previous page of results. This value is returned only if there is a previous page of results in the result set. Max length: 2048 | [optional] 
**total** | **int** | The total number of items in the result set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


