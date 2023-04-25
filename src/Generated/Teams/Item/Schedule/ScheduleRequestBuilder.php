<?php

namespace Microsoft\Graph\Generated\Teams\Item\Schedule;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Schedule;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OfferShiftRequests\OfferShiftRequestsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OpenShiftChangeRequests\OpenShiftChangeRequestsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\OpenShifts\OpenShiftsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\SchedulingGroups\SchedulingGroupsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\Share\ShareRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\Shifts\ShiftsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\SwapShiftsChangeRequests\SwapShiftsChangeRequestsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\TimeOffReasons\TimeOffReasonsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\TimeOffRequests\TimeOffRequestsRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Schedule\TimesOff\TimesOffRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the schedule property of the microsoft.graph.team entity.
*/
class ScheduleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the offerShiftRequests property of the microsoft.graph.schedule entity.
    */
    public function offerShiftRequests(): OfferShiftRequestsRequestBuilder {
        return new OfferShiftRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the openShiftChangeRequests property of the microsoft.graph.schedule entity.
    */
    public function openShiftChangeRequests(): OpenShiftChangeRequestsRequestBuilder {
        return new OpenShiftChangeRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the openShifts property of the microsoft.graph.schedule entity.
    */
    public function openShifts(): OpenShiftsRequestBuilder {
        return new OpenShiftsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the schedulingGroups property of the microsoft.graph.schedule entity.
    */
    public function schedulingGroups(): SchedulingGroupsRequestBuilder {
        return new SchedulingGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the share method.
    */
    public function share(): ShareRequestBuilder {
        return new ShareRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the shifts property of the microsoft.graph.schedule entity.
    */
    public function shifts(): ShiftsRequestBuilder {
        return new ShiftsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the swapShiftsChangeRequests property of the microsoft.graph.schedule entity.
    */
    public function swapShiftsChangeRequests(): SwapShiftsChangeRequestsRequestBuilder {
        return new SwapShiftsChangeRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the timeOffReasons property of the microsoft.graph.schedule entity.
    */
    public function timeOffReasons(): TimeOffReasonsRequestBuilder {
        return new TimeOffReasonsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the timeOffRequests property of the microsoft.graph.schedule entity.
    */
    public function timeOffRequests(): TimeOffRequestsRequestBuilder {
        return new TimeOffRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the timesOff property of the microsoft.graph.schedule entity.
    */
    public function timesOff(): TimesOffRequestBuilder {
        return new TimesOffRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ScheduleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], "{+baseurl}/teams/{team%2Did}/schedule{?%24select,%24expand}");
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property schedule for teams
     * @param ScheduleRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ScheduleRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The schedule of shifts for this team.
     * @param ScheduleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ScheduleRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Schedule::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property schedule in teams
     * @param Schedule $body The request body
     * @param ScheduleRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function put(Schedule $body, ?ScheduleRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Schedule::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property schedule for teams
     * @param ScheduleRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ScheduleRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * The schedule of shifts for this team.
     * @param ScheduleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ScheduleRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property schedule in teams
     * @param Schedule $body The request body
     * @param ScheduleRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(Schedule $body, ?ScheduleRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
