<?php

namespace Hal\Metadata;

class RouteBasedResourceMetadata extends AbstractResourceMetadata
{
    /** @var string */
    private $resourceIdentifier;

    /** @var string */
    private $route;

    /** @var string */
    private $routeIdentifierPlaceholder;

    /** @var string */
    private $routeParams;

    public function __construct(
        string $class,
        string $route,
        string $extractor,
        string $resourceIdentifier = 'id',
        string $routeIdentifierPlaceholder = 'id',
        array $routeParams = []
    ) {
        $this->class = $class;
        $this->route = $route;
        $this->extractor = $extractor;
        $this->resourceIdentifier = $resourceIdentifier;
        $this->routeIdentifierPlaceholder = $routeIdentifierPlaceholder;
        $this->routeParams = $routeParams;
    }

    public function getRoute() : string
    {
        return $this->route;
    }

    public function getResourceIdentifier() : string
    {
        return $this->route;
    }

    public function getRouteIdentifierPlaceholder() : string
    {
        return $this->route;
    }

    public function getRouteParams() : array
    {
        return $this->route;
    }
}
