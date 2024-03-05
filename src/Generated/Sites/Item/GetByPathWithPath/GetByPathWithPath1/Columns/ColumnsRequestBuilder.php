<?php

namespace Microsoft\Graph\Generated\Sites\Item\GetByPathWithPath\GetByPathWithPath1\Columns;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ColumnDefinition;
use Microsoft\Graph\Generated\Models\ColumnDefinitionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the columns property of the microsoft.graph.site entity.
*/
class ColumnsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ColumnsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/getByPath(path=\'{path}\')/getByPath(path=\'{path1}\')/columns{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the collection of columns represented as [columnDefinition][columnDefinition] resources in a [site][site].
     * @param ColumnsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ColumnDefinitionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/site-list-columns?view=graph-rest-1.0 Find more info here
    */
    public function get(?ColumnsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ColumnDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a column for a [site][site] with a request that specifies a [columnDefinition][columnDefinition].
     * @param ColumnDefinition $body The request body
     * @param ColumnsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ColumnDefinition|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/site-post-columns?view=graph-rest-1.0 Find more info here
    */
    public function post(ColumnDefinition $body, ?ColumnsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ColumnDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the collection of columns represented as [columnDefinition][columnDefinition] resources in a [site][site].
     * @param ColumnsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ColumnsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create a column for a [site][site] with a request that specifies a [columnDefinition][columnDefinition].
     * @param ColumnDefinition $body The request body
     * @param ColumnsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ColumnDefinition $body, ?ColumnsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/sites/{site%2Did}/getByPath(path=\'{path}\')/getByPath(path=\'{path1}\')/columns';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ColumnsRequestBuilder
    */
    public function withUrl(string $rawUrl): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
