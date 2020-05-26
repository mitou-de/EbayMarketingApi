<?php
/**
 * CreateReportTaskTest
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
 * Please update the test case below to test the model.
 */

namespace EbayMarketingApi;

use PHPUnit\Framework\TestCase;

/**
 * CreateReportTaskTest Class Doc Comment
 *
 * @category    Class
 * @description This type defines the rules that govern the generation of a report task and the criteria that&#39;s used to create the report. The report-generation rules include the starting and ending dates for the report. Report-task criteria includes the report dimensions, metrics, listings covered in the report, and so on. For information on the required and optional fields for each report type, see Reading Promoted Listings reports.
 * @package     EbayMarketingApi
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CreateReportTaskTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "CreateReportTask"
     */
    public function testCreateReportTask()
    {
    }

    /**
     * Test attribute "campaign_ids"
     */
    public function testPropertyCampaignIds()
    {
    }

    /**
     * Test attribute "date_from"
     */
    public function testPropertyDateFrom()
    {
    }

    /**
     * Test attribute "date_to"
     */
    public function testPropertyDateTo()
    {
    }

    /**
     * Test attribute "dimensions"
     */
    public function testPropertyDimensions()
    {
    }

    /**
     * Test attribute "inventory_references"
     */
    public function testPropertyInventoryReferences()
    {
    }

    /**
     * Test attribute "listing_ids"
     */
    public function testPropertyListingIds()
    {
    }

    /**
     * Test attribute "marketplace_id"
     */
    public function testPropertyMarketplaceId()
    {
    }

    /**
     * Test attribute "metric_keys"
     */
    public function testPropertyMetricKeys()
    {
    }

    /**
     * Test attribute "report_format"
     */
    public function testPropertyReportFormat()
    {
    }

    /**
     * Test attribute "report_type"
     */
    public function testPropertyReportType()
    {
    }
}
