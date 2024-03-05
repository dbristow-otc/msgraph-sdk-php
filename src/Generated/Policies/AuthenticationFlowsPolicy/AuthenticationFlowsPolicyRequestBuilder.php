<?php

namespace Microsoft\Graph\Generated\Policies\AuthenticationFlowsPolicy;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AuthenticationFlowsPolicy;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authenticationFlowsPolicy property of the microsoft.graph.policyRoot entity.
*/
class AuthenticationFlowsPolicyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AuthenticationFlowsPolicyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/authenticationFlowsPolicy{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property authenticationFlowsPolicy for policies
     * @param AuthenticationFlowsPolicyRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AuthenticationFlowsPolicyRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of an authenticationFlowsPolicy object.
     * @param AuthenticationFlowsPolicyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationFlowsPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationflowspolicy-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?AuthenticationFlowsPolicyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationFlowsPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the selfServiceSignUp property of an authenticationFlowsPolicy object. The properties id, type, and description cannot be modified.
     * @param AuthenticationFlowsPolicy $body The request body
     * @param AuthenticationFlowsPolicyRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationFlowsPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationflowspolicy-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(AuthenticationFlowsPolicy $body, ?AuthenticationFlowsPolicyRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationFlowsPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property authenticationFlowsPolicy for policies
     * @param AuthenticationFlowsPolicyRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AuthenticationFlowsPolicyRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/policies/authenticationFlowsPolicy';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of an authenticationFlowsPolicy object.
     * @param AuthenticationFlowsPolicyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationFlowsPolicyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the selfServiceSignUp property of an authenticationFlowsPolicy object. The properties id, type, and description cannot be modified.
     * @param AuthenticationFlowsPolicy $body The request body
     * @param AuthenticationFlowsPolicyRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AuthenticationFlowsPolicy $body, ?AuthenticationFlowsPolicyRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/policies/authenticationFlowsPolicy';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return AuthenticationFlowsPolicyRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationFlowsPolicyRequestBuilder {
        return new AuthenticationFlowsPolicyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
