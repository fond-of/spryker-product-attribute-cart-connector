<?php

namespace FondOfSpryker\Zed\ProductAttributeCartConnector\Business;

use Generated\Shared\Transfer\CartChangeTransfer;

interface ProductAttributeCartConnectorFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function expandItems(CartChangeTransfer $cartChangeTransfer): CartChangeTransfer;
}
