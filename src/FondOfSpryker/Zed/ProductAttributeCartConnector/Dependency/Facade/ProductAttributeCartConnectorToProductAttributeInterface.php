<?php

namespace FondOfSpryker\Zed\ProductAttributeCartConnector\Dependency\Facade;

interface ProductAttributeCartConnectorToProductAttributeInterface
{
    /**
     * Specification:
     * - Returns product abstract attributes with metadata info
     *
     * @api
     *
     * @param int $idProductAbstract
     *
     * @return array
     */
    public function getProductAbstractAttributeValues($idProductAbstract): array;
}
