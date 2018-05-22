<?php

namespace FondOfSpryker\Zed\ProductAttributeCartConnector\Dependency\Facade;

class ProductAttributeCartConnectorToProductAttributeBridge implements ProductAttributeCartConnectorToProductAttributeInterface
{
    /**
     * @var \Spryker\Zed\ProductAttribute\Business\ProductAttributeFacade;
     */
    protected $productAttributeFacade;

    /**
     * ProductAttributeCartConnectorToProductAttributeBridge constructor.
     *
     * @param \Spryker\Zed\ProductAttribute\Business\ProductAttributeFacade $productAttributeFacade
     */
    public function __construct($productAttributeFacade)
    {
        $this->productAttributeFacade = $productAttributeFacade;
    }

    /**
     * @param int $idProductAbstract
     *
     * @return array
     */
    public function getProductAbstractAttributeValues($idProductAbstract): array
    {
        return $this->productAttributeFacade->getProductAbstractAttributeValues($idProductAbstract);
    }
}
