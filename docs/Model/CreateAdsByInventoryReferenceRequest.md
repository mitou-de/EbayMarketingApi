# # CreateAdsByInventoryReferenceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bid_percentage** | **string** | The user-defined bid percentage (also known as the ad rate) sets the level that eBay increases the visibility in search results for the associated listing. The higher the bidPercentage value, the more eBay promotes the listing. The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee. The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign. bidPercentage is a single precision value that is guided by the following rules: These values are valid: &amp;nbsp;&amp;nbsp;&amp;nbsp;1, &amp;nbsp;&amp;nbsp;&amp;nbsp;1.0, &amp;nbsp;&amp;nbsp;&amp;nbsp;4.1, &amp;nbsp;&amp;nbsp;&amp;nbsp;5.0, &amp;nbsp;&amp;nbsp;&amp;nbsp;5.5, ... These values are not valid: &amp;nbsp;&amp;nbsp;&amp;nbsp;0.01, &amp;nbsp;&amp;nbsp;&amp;nbsp;10.75, &amp;nbsp;&amp;nbsp;&amp;nbsp;99.99, &amp;nbsp;&amp;nbsp;&amp;nbsp;and so on. If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.Minimum value: 1.0 Maximum value: 100.0 | [optional] 
**inventory_reference_id** | **string** | The seller&#39;s inventory reference ID for a listing. An inventory reference ID can be either a seller-defined SKU value or an inventoryItemGroupKey. An inventoryItemGroupKey is a value used by the Inventory API to indicate a listing that&#39;s the parent of a inventory item group (a multi-variation listing, such as a listing for shirt that&#39;s available in multiple sizes and colors). You must always specify both an inventory_reference_id and an inventory_reference_type. | [optional] 
**inventory_reference_type** | **string** | Indicates the item type of the listing referenced by inventoryReferenceId, and can be either INVENTORY_ITEM or INVENTORY_ITEM_GROUP. You must always pair an inventory_reference_id with and inventory_reference_type. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/marketing/types/InventoryReferenceTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


