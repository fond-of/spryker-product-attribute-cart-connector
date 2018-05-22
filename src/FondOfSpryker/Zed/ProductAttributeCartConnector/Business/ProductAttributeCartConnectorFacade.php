<?php

namespace FondOfSpryker\Zed\ProductAttributeCartConnector\Business;

use Generated\Shared\Transfer\CartChangeTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\ProductAttributeCartConnector\Business\ProductAttributeCartConnectorBusinessFactory getFactory()
 */
class ProductAttributeCartConnectorFacade extends AbstractFacade implements ProductAttributeCartConnectorFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function expandItems(CartChangeTransfer $cartChangeTransfer): CartChangeTransfer
    {
        return $this->getFactory()
            ->createProductExpander()
            ->expandItems($cartChangeTransfer);
    }
}
