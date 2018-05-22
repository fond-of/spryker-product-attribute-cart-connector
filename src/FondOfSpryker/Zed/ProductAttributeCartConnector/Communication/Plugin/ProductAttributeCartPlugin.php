<?php

namespace FondOfSpryker\Zed\ProductAttributeCartConnector\Communication\Plugin;

use Generated\Shared\Transfer\CartChangeTransfer;
use Spryker\Zed\Cart\Dependency\ItemExpanderPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\ProductAttributeCartConnector\Business\ProductAttributeCartConnectorFacade getFacade()
 * @method \FondOfSpryker\Zed\ProductAttributeCartConnector\Business\ProductAttributeCartConnectorCommunicationFactory getFactory()
 */
class ProductAttributeCartPlugin extends AbstractPlugin implements ItemExpanderPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function expandItems(CartChangeTransfer $cartChangeTransfer): CartChangeTransfer
    {
        $this->getFacade()->expandItems($cartChangeTransfer);

        return $cartChangeTransfer;
    }
}
