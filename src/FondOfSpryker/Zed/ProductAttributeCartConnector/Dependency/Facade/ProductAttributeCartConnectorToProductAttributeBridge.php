<?php

namespace FondOfSpryker\Zed\ProductAttributeCartConnector\Dependency\Facade;

use Spryker\Zed\ProductAttribute\Business\ProductAttributeFacadeInterface;

class ProductAttributeCartConnectorToProductAttributeBridge implements ProductAttributeCartConnectorToProductAttributeInterface
{
    /**
     * @var \Spryker\Zed\ProductAttribute\Business\ProductAttributeFacade;
     */
    protected $productAttributeFacade;

    /**
     * @param \Spryker\Zed\ProductAttribute\Business\ProductAttributeFacade $productAttributeFacade
     */
    public function __construct(ProductAttributeFacadeInterface $productAttributeFacade)
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
