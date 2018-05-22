<?php
/**
 * Created by PhpStorm.
 * User: paf
 * Date: 08.05.18
 * Time: 16:28
 */

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
