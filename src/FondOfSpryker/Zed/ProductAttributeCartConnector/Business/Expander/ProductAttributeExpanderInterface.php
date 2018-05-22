<?php

namespace FondOfSpryker\Zed\ProductAttributeCartConnector\Business\Expander;

use Generated\Shared\Transfer\CartChangeTransfer;

interface ProductAttributeExpanderInterface
{
    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function expandItems(CartChangeTransfer $cartChangeTransfer): CartChangeTransfer;
}
