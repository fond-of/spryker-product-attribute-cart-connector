<?php

namespace FondOfSpryker\Zed\ProductAttributeCartConnector;

use Pyz\Zed\ProductAttributeCartConnector\Dependency\Facade\ProductAttributeCartConnectorToProductAttributeBridge;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class ProductAttributeCartConnectorDependencyProvider extends AbstractBundleDependencyProvider
{
    const FACADE_PRODUCT_ATTRIBUTES = 'FACADE_PRODUCT_ATTRIBUTES';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container[self::FACADE_PRODUCT_ATTRIBUTES] = function (Container $container) {
            return new ProductAttributeCartConnectorToProductAttributeBridge(
                $container->getLocator()->productAttribute()->facade()
            );
        };

        return $container;
    }
}
