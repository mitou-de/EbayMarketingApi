<?php
/**
 * AdReportMetadataApi
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
 * AdReportMetadataApi Class Doc Comment
 *
 * @category Class
 * @package  EbayMarketingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdReportMetadataApi
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
     * Operation getReportMetadata
     *
     *
     * @throws \EbayMarketingApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EbayMarketingApi\Model\ReportMetadatas
     */
    public function getReportMetadata()
    {
        list($response) = $this->getReportMetadataWithHttpInfo();
        return $response;
    }

    /**
     * Operation getReportMetadataWithHttpInfo
     *
     *
     * @throws \EbayMarketingApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EbayMarketingApi\Model\ReportMetadatas, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportMetadataWithHttpInfo()
    {
        $request = $this->getReportMetadataRequest();

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
                    if ('\EbayMarketingApi\Model\ReportMetadatas' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EbayMarketingApi\Model\ReportMetadatas', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EbayMarketingApi\Model\ReportMetadatas';
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
                        '\EbayMarketingApi\Model\ReportMetadatas',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getReportMetadataAsync
     *
     * 
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportMetadataAsync()
    {
        return $this->getReportMetadataAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportMetadataAsyncWithHttpInfo
     *
     * 
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportMetadataAsyncWithHttpInfo()
    {
        $returnType = '\EbayMarketingApi\Model\ReportMetadatas';
        $request = $this->getReportMetadataRequest();

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
     * Create request for operation 'getReportMetadata'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getReportMetadataRequest()
    {

        $resourcePath = '/ad_report_metadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




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
     * Operation getReportMetadataForReportType
     *
     * @param  string $report_type The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT (required)
     *
     * @throws \EbayMarketingApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EbayMarketingApi\Model\ReportMetadata
     */
    public function getReportMetadataForReportType($report_type)
    {
        list($response) = $this->getReportMetadataForReportTypeWithHttpInfo($report_type);
        return $response;
    }

    /**
     * Operation getReportMetadataForReportTypeWithHttpInfo
     *
     * @param  string $report_type The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT (required)
     *
     * @throws \EbayMarketingApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EbayMarketingApi\Model\ReportMetadata, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportMetadataForReportTypeWithHttpInfo($report_type)
    {
        $request = $this->getReportMetadataForReportTypeRequest($report_type);

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
                    if ('\EbayMarketingApi\Model\ReportMetadata' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EbayMarketingApi\Model\ReportMetadata', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EbayMarketingApi\Model\ReportMetadata';
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
                        '\EbayMarketingApi\Model\ReportMetadata',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getReportMetadataForReportTypeAsync
     *
     * 
     *
     * @param  string $report_type The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportMetadataForReportTypeAsync($report_type)
    {
        return $this->getReportMetadataForReportTypeAsyncWithHttpInfo($report_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportMetadataForReportTypeAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $report_type The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReportMetadataForReportTypeAsyncWithHttpInfo($report_type)
    {
        $returnType = '\EbayMarketingApi\Model\ReportMetadata';
        $request = $this->getReportMetadataForReportTypeRequest($report_type);

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
     * Create request for operation 'getReportMetadataForReportType'
     *
     * @param  string $report_type The name of the report type whose metadata you want to get. For details about each report type, see ReportTypeEnum. Valid values: &amp;nbsp;&amp;nbsp;&amp;nbsp;ACCOUNT_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;LISTING_PERFORMANCE_REPORT &amp;nbsp;&amp;nbsp;&amp;nbsp;INVENTORY_PERFORMANCE_REPORT (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getReportMetadataForReportTypeRequest($report_type)
    {
        // verify the required parameter 'report_type' is set
        if ($report_type === null || (is_array($report_type) && count($report_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $report_type when calling getReportMetadataForReportType'
            );
        }

        $resourcePath = '/ad_report_metadata/{report_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($report_type !== null) {
            $resourcePath = str_replace(
                '{' . 'report_type' . '}',
                ObjectSerializer::toPathValue($report_type),
                $resourcePath
            );
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
