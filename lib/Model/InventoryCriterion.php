<?php
/**
 * InventoryCriterion
 *
 * PHP version 5
 *
 * @category Class
 * @package  EbayMarketingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing API
 *
 * <p>The <i>Marketing API </i> offers two platforms that sellers can use to promote and advertise their products:</p> <ul><li><b>Promoted Listings</b> is an eBay ad service that lets sellers set up <i>ad campaigns </i> for the products they want to promote. eBay displays the ads in search results and in other marketing modules as <b>SPONSORED</b> listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, see <a href=\"/api-docs/sell/static/marketing/promoted-listings.html\">Promoted Listings</a>.</li>  <li><b>Promotions Manager</b> gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as \"20% off\" and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion <i>teasers</i> throughout buyer flows. For complete details, see <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Promotions Manager</a>.</li></ul>  <p><b>Marketing reports</b>, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts.</p> <p class=\"tablenote\"><b>Important!</b> Sellers must have an active eBay Store subscription, and they must accept the <b>Terms and Conditions</b> before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the \"requirements and restrictions\" sections for <a href=\"/api-docs/sell/marketing/static/overview.html#PL-requirements\">Promoted Listings</a> and <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Promotions Manager</a>.</p> <p>The table below lists all the Marketing API calls grouped by resource.</p>
 *
 * The version of the OpenAPI document: v1.7.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EbayMarketingApi\Model;

use \ArrayAccess;
use \EbayMarketingApi\ObjectSerializer;

/**
 * InventoryCriterion Class Doc Comment
 *
 * @category Class
 * @description This type defines either the selections rules or the list of listing IDs for the promotion. The &amp;quot;listing IDs&amp;quot; are are either the seller&#39;s item IDs or the eBay listing IDs.
 * @package  EbayMarketingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InventoryCriterion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryCriterion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inventory_criterion_type' => 'string',
        'inventory_items' => '\EbayMarketingApi\Model\InventoryItem[]',
        'listing_ids' => 'string[]',
        'rule_criteria' => '\EbayMarketingApi\Model\RuleCriteria'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'inventory_criterion_type' => null,
        'inventory_items' => null,
        'listing_ids' => null,
        'rule_criteria' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'inventory_criterion_type' => 'inventoryCriterionType',
        'inventory_items' => 'inventoryItems',
        'listing_ids' => 'listingIds',
        'rule_criteria' => 'ruleCriteria'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory_criterion_type' => 'setInventoryCriterionType',
        'inventory_items' => 'setInventoryItems',
        'listing_ids' => 'setListingIds',
        'rule_criteria' => 'setRuleCriteria'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory_criterion_type' => 'getInventoryCriterionType',
        'inventory_items' => 'getInventoryItems',
        'listing_ids' => 'getListingIds',
        'rule_criteria' => 'getRuleCriteria'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['inventory_criterion_type'] = isset($data['inventory_criterion_type']) ? $data['inventory_criterion_type'] : null;
        $this->container['inventory_items'] = isset($data['inventory_items']) ? $data['inventory_items'] : null;
        $this->container['listing_ids'] = isset($data['listing_ids']) ? $data['listing_ids'] : null;
        $this->container['rule_criteria'] = isset($data['rule_criteria']) ? $data['rule_criteria'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets inventory_criterion_type
     *
     * @return string|null
     */
    public function getInventoryCriterionType()
    {
        return $this->container['inventory_criterion_type'];
    }

    /**
     * Sets inventory_criterion_type
     *
     * @param string|null $inventory_criterion_type Indicates how the items to include in the promotion are selected. You can include inventory by ID, using rules, or globally include all your inventory. Valid values: INVENTORY_BY_RULE INVENTORY_BY_VALUE INVENTORY_ANY For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/marketing/types/InventoryCriterionEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setInventoryCriterionType($inventory_criterion_type)
    {
        $this->container['inventory_criterion_type'] = $inventory_criterion_type;

        return $this;
    }

    /**
     * Gets inventory_items
     *
     * @return \EbayMarketingApi\Model\InventoryItem[]|null
     */
    public function getInventoryItems()
    {
        return $this->container['inventory_items'];
    }

    /**
     * Sets inventory_items
     *
     * @param \EbayMarketingApi\Model\InventoryItem[]|null $inventory_items Required if: InventoryCriterionType is set to INVENTORY_BY_VALUE, you must specify either inventoryItems or listingIds. An array of containers for the seller's inventory reference IDs (also known as an &quot;SKU&quot; or &quot;custom label&quot;) to be added to the promotion. Note: The request can have either inventoryItems or listingIds, but not both. Required: All listings in a promotion must offer an electronic payment method. Maximum: 500 parent items Maximum SKU or custom label length: 50 characters
     *
     * @return $this
     */
    public function setInventoryItems($inventory_items)
    {
        $this->container['inventory_items'] = $inventory_items;

        return $this;
    }

    /**
     * Gets listing_ids
     *
     * @return string[]|null
     */
    public function getListingIds()
    {
        return $this->container['listing_ids'];
    }

    /**
     * Sets listing_ids
     *
     * @param string[]|null $listing_ids Required if: InventoryCriterionEnum is set to INVENTORY_BY_VALUE, you must specify either inventoryItems or listingIds. An array of eBay listing IDs to be added to the promotion. Note: The request can have either inventoryItems or listingIds, but not both. Required: All listings in a promotion must offer an electronic payment method. Maximum: 500 parent items
     *
     * @return $this
     */
    public function setListingIds($listing_ids)
    {
        $this->container['listing_ids'] = $listing_ids;

        return $this;
    }

    /**
     * Gets rule_criteria
     *
     * @return \EbayMarketingApi\Model\RuleCriteria|null
     */
    public function getRuleCriteria()
    {
        return $this->container['rule_criteria'];
    }

    /**
     * Sets rule_criteria
     *
     * @param \EbayMarketingApi\Model\RuleCriteria|null $rule_criteria rule_criteria
     *
     * @return $this
     */
    public function setRuleCriteria($rule_criteria)
    {
        $this->container['rule_criteria'] = $rule_criteria;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

