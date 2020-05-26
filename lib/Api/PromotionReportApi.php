<?php
/**
 * PromotionReportApi
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

namespace EbayMarketingApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EbayMarketingApi\ApiException;
use EbayMarketingApi\Configuration;
use EbayMarketingApi\HeaderSelector;
use EbayMarketingApi\ObjectSerializer;

/**
 * PromotionReportApi Class Doc Comment
 *
 * @category Class
 * @package  EbayMarketingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PromotionReportApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getPromotionReports
     *
     * @param  string $marketplace_id The eBay marketplace ID of the site for which you want the promotions report. Valid values: EBAY_AU &#x3D; Australia EBAY_DE &#x3D; Germany EBAY_ES &#x3D; Spain EBAY_FR &#x3D; France EBAY_GB &#x3D; Great Britain EBAY_IT &#x3D; Italy EBAY_US &#x3D; United States (required)
     * @param  string $limit Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200 (optional)
     * @param  string $offset Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     * @param  string $promotion_status Limits the results to the promotions that are in the state specified by this query parameter. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of values supported: 1 (optional)
     * @param  string $promotion_type Filters the returned promotions in the report based on the their campaign promotion type. Specify one of the following values to indicate the promotion type you want returned in the report: MARKDOWN_SALE &amp;ndash; A markdown promotion set with createItemPriceMarkdownPromotion. ORDER_DISCOUNT &amp;ndash; A threshold promotion set with createItemPromotion. VOLUME_DISCOUNT &amp;ndash; A volume pricing promotion set with createItemPromotion. (optional)
     * @param  string $q A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &amp;quot;iPhone&amp;quot; or &amp;quot;Harry Potter.&amp;quot; Commas that separate keywords are ignored. For example, a keyword string of &amp;quot;iPhone, iPad&amp;quot; equals &amp;quot;iPhone iPad&amp;quot;, and each results in a response that contains promotions with both &amp;quot;iPhone&amp;quot; and &amp;quot;iPad&amp;quot; in the title. (optional)
     *
     * @throws \EbayMarketingApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EbayMarketingApi\Model\PromotionsReportPagedCollection
     */
    public function getPromotionReports($marketplace_id, $limit = null, $offset = null, $promotion_status = null, $promotion_type = null, $q = null)
    {
        list($response) = $this->getPromotionReportsWithHttpInfo($marketplace_id, $limit, $offset, $promotion_status, $promotion_type, $q);
        return $response;
    }

    /**
     * Operation getPromotionReportsWithHttpInfo
     *
     * @param  string $marketplace_id The eBay marketplace ID of the site for which you want the promotions report. Valid values: EBAY_AU &#x3D; Australia EBAY_DE &#x3D; Germany EBAY_ES &#x3D; Spain EBAY_FR &#x3D; France EBAY_GB &#x3D; Great Britain EBAY_IT &#x3D; Italy EBAY_US &#x3D; United States (required)
     * @param  string $limit Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200 (optional)
     * @param  string $offset Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     * @param  string $promotion_status Limits the results to the promotions that are in the state specified by this query parameter. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of values supported: 1 (optional)
     * @param  string $promotion_type Filters the returned promotions in the report based on the their campaign promotion type. Specify one of the following values to indicate the promotion type you want returned in the report: MARKDOWN_SALE &amp;ndash; A markdown promotion set with createItemPriceMarkdownPromotion. ORDER_DISCOUNT &amp;ndash; A threshold promotion set with createItemPromotion. VOLUME_DISCOUNT &amp;ndash; A volume pricing promotion set with createItemPromotion. (optional)
     * @param  string $q A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &amp;quot;iPhone&amp;quot; or &amp;quot;Harry Potter.&amp;quot; Commas that separate keywords are ignored. For example, a keyword string of &amp;quot;iPhone, iPad&amp;quot; equals &amp;quot;iPhone iPad&amp;quot;, and each results in a response that contains promotions with both &amp;quot;iPhone&amp;quot; and &amp;quot;iPad&amp;quot; in the title. (optional)
     *
     * @throws \EbayMarketingApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EbayMarketingApi\Model\PromotionsReportPagedCollection, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPromotionReportsWithHttpInfo($marketplace_id, $limit = null, $offset = null, $promotion_status = null, $promotion_type = null, $q = null)
    {
        $request = $this->getPromotionReportsRequest($marketplace_id, $limit, $offset, $promotion_status, $promotion_type, $q);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\EbayMarketingApi\Model\PromotionsReportPagedCollection' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EbayMarketingApi\Model\PromotionsReportPagedCollection', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EbayMarketingApi\Model\PromotionsReportPagedCollection';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EbayMarketingApi\Model\PromotionsReportPagedCollection',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPromotionReportsAsync
     *
     * 
     *
     * @param  string $marketplace_id The eBay marketplace ID of the site for which you want the promotions report. Valid values: EBAY_AU &#x3D; Australia EBAY_DE &#x3D; Germany EBAY_ES &#x3D; Spain EBAY_FR &#x3D; France EBAY_GB &#x3D; Great Britain EBAY_IT &#x3D; Italy EBAY_US &#x3D; United States (required)
     * @param  string $limit Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200 (optional)
     * @param  string $offset Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     * @param  string $promotion_status Limits the results to the promotions that are in the state specified by this query parameter. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of values supported: 1 (optional)
     * @param  string $promotion_type Filters the returned promotions in the report based on the their campaign promotion type. Specify one of the following values to indicate the promotion type you want returned in the report: MARKDOWN_SALE &amp;ndash; A markdown promotion set with createItemPriceMarkdownPromotion. ORDER_DISCOUNT &amp;ndash; A threshold promotion set with createItemPromotion. VOLUME_DISCOUNT &amp;ndash; A volume pricing promotion set with createItemPromotion. (optional)
     * @param  string $q A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &amp;quot;iPhone&amp;quot; or &amp;quot;Harry Potter.&amp;quot; Commas that separate keywords are ignored. For example, a keyword string of &amp;quot;iPhone, iPad&amp;quot; equals &amp;quot;iPhone iPad&amp;quot;, and each results in a response that contains promotions with both &amp;quot;iPhone&amp;quot; and &amp;quot;iPad&amp;quot; in the title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPromotionReportsAsync($marketplace_id, $limit = null, $offset = null, $promotion_status = null, $promotion_type = null, $q = null)
    {
        return $this->getPromotionReportsAsyncWithHttpInfo($marketplace_id, $limit, $offset, $promotion_status, $promotion_type, $q)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPromotionReportsAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $marketplace_id The eBay marketplace ID of the site for which you want the promotions report. Valid values: EBAY_AU &#x3D; Australia EBAY_DE &#x3D; Germany EBAY_ES &#x3D; Spain EBAY_FR &#x3D; France EBAY_GB &#x3D; Great Britain EBAY_IT &#x3D; Italy EBAY_US &#x3D; United States (required)
     * @param  string $limit Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200 (optional)
     * @param  string $offset Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     * @param  string $promotion_status Limits the results to the promotions that are in the state specified by this query parameter. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of values supported: 1 (optional)
     * @param  string $promotion_type Filters the returned promotions in the report based on the their campaign promotion type. Specify one of the following values to indicate the promotion type you want returned in the report: MARKDOWN_SALE &amp;ndash; A markdown promotion set with createItemPriceMarkdownPromotion. ORDER_DISCOUNT &amp;ndash; A threshold promotion set with createItemPromotion. VOLUME_DISCOUNT &amp;ndash; A volume pricing promotion set with createItemPromotion. (optional)
     * @param  string $q A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &amp;quot;iPhone&amp;quot; or &amp;quot;Harry Potter.&amp;quot; Commas that separate keywords are ignored. For example, a keyword string of &amp;quot;iPhone, iPad&amp;quot; equals &amp;quot;iPhone iPad&amp;quot;, and each results in a response that contains promotions with both &amp;quot;iPhone&amp;quot; and &amp;quot;iPad&amp;quot; in the title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPromotionReportsAsyncWithHttpInfo($marketplace_id, $limit = null, $offset = null, $promotion_status = null, $promotion_type = null, $q = null)
    {
        $returnType = '\EbayMarketingApi\Model\PromotionsReportPagedCollection';
        $request = $this->getPromotionReportsRequest($marketplace_id, $limit, $offset, $promotion_status, $promotion_type, $q);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPromotionReports'
     *
     * @param  string $marketplace_id The eBay marketplace ID of the site for which you want the promotions report. Valid values: EBAY_AU &#x3D; Australia EBAY_DE &#x3D; Germany EBAY_ES &#x3D; Spain EBAY_FR &#x3D; France EBAY_GB &#x3D; Great Britain EBAY_IT &#x3D; Italy EBAY_US &#x3D; United States (required)
     * @param  string $limit Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200 (optional)
     * @param  string $offset Specifies the number of promotions to skip in the result set before returning the first promotion in the paginated response. Combine offset with the limit query parameter to control the items returned in the response. For example, if you supply an offset of 0 and a limit of 10, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If offset is 10 and limit is 20, the first page of the response contains items 11-30 from the complete result set. Default: 0 (optional)
     * @param  string $promotion_status Limits the results to the promotions that are in the state specified by this query parameter. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of values supported: 1 (optional)
     * @param  string $promotion_type Filters the returned promotions in the report based on the their campaign promotion type. Specify one of the following values to indicate the promotion type you want returned in the report: MARKDOWN_SALE &amp;ndash; A markdown promotion set with createItemPriceMarkdownPromotion. ORDER_DISCOUNT &amp;ndash; A threshold promotion set with createItemPromotion. VOLUME_DISCOUNT &amp;ndash; A volume pricing promotion set with createItemPromotion. (optional)
     * @param  string $q A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &amp;quot;iPhone&amp;quot; or &amp;quot;Harry Potter.&amp;quot; Commas that separate keywords are ignored. For example, a keyword string of &amp;quot;iPhone, iPad&amp;quot; equals &amp;quot;iPhone iPad&amp;quot;, and each results in a response that contains promotions with both &amp;quot;iPhone&amp;quot; and &amp;quot;iPad&amp;quot; in the title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPromotionReportsRequest($marketplace_id, $limit = null, $offset = null, $promotion_status = null, $promotion_type = null, $q = null)
    {
        // verify the required parameter 'marketplace_id' is set
        if ($marketplace_id === null || (is_array($marketplace_id) && count($marketplace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_id when calling getPromotionReports'
            );
        }

        $resourcePath = '/promotion_report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($marketplace_id !== null) {
            if('form' === 'form' && is_array($marketplace_id)) {
                foreach($marketplace_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['marketplace_id'] = $marketplace_id;
            }
        }
        // query params
        if ($offset !== null) {
            if('form' === 'form' && is_array($offset)) {
                foreach($offset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['offset'] = $offset;
            }
        }
        // query params
        if ($promotion_status !== null) {
            if('form' === 'form' && is_array($promotion_status)) {
                foreach($promotion_status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['promotion_status'] = $promotion_status;
            }
        }
        // query params
        if ($promotion_type !== null) {
            if('form' === 'form' && is_array($promotion_type)) {
                foreach($promotion_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['promotion_type'] = $promotion_type;
            }
        }
        // query params
        if ($q !== null) {
            if('form' === 'form' && is_array($q)) {
                foreach($q as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['q'] = $q;
            }
        }



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
