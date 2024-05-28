<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Root;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RootRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RootRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RootRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RootRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RootRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RootRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RootRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RootRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RootRequestBuilderGetQueryParameters {
        return new RootRequestBuilderGetQueryParameters($expand, $select);
    }

}
