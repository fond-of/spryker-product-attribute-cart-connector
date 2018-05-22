<?php

namespace FondOfSpryker\Zed\ProductAttributeCartConnector\Business;

use FondOfSpryker\Zed\ProductAttributeCartConnector\Business\Expander\ProductAttributeExpander;
use FondOfSpryker\Zed\ProductAttributeCartConnector\Business\Expander\ProductAttributeExpanderInterface;
use FondOfSpryker\Zed\ProductAttributeCartConnector\Dependency\Facade\ProductAttributeCartConnectorToProductAttributeInterface;
use FondOfSpryker\Zed\ProductAttributeCartConnector\ProductAttributeCartConnectorDependencyProvider;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\ProductAttributeCartConnector\ProductAttributeCartConnectorConfig getConfig()
 */
class ProductAttributeCartConnectorBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\ProductAttributeCartConnector\Business\Expander\ProductAttributeExpanderInterface
     */
    public function createProductExpander(): ProductAttributeExpanderInterface
    {
        return new ProductAttributeExpander(
            $this->getProductAttributeFacade()
        );
    }

    /**
     * @return \FondOfSpryker\Zed\ProductAttributeCartConnector\Business\ProductAttributeCartConnectorFacadeInterface
     */
    protected function getProductAttributeFacade(): ProductAttributeCartConnectorToProductAttributeInterface
    {
        return $this->getProvidedDependency(ProductAttributeCartConnectorDependencyProvider::FACADE_PRODUCT_ATTRIBUTES);
    }
}
