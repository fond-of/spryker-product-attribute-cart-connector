<?php

namespace FondOfSpryker\Zed\ProductAttributeCartConnector\Business\Expander;

use FondOfSpryker\Zed\ProductAttributeCartConnector\Dependency\Facade\ProductAttributeCartConnectorToProductAttributeInterface;
use Generated\Shared\Transfer\CartChangeTransfer;
use Generated\Shared\Transfer\ItemTransfer;

class ProductAttributeExpander implements ProductAttributeExpanderInterface
{
    /**
     * @var \FondOfSpryker\Zed\ProductAttributeCartConnector\Dependency\Facade\ProductAttributeCartConnectorToProductAttributeInterface
     */
    protected $productAttributesFacade;

    /**
     * @param \FondOfSpryker\Zed\ProductAttributeCartConnector\Dependency\Facade\ProductAttributeCartConnectorToProductAttributeInterface $productAttributesFacade
     */
    public function __construct(
        ProductAttributeCartConnectorToProductAttributeInterface $productAttributesFacade
    ) {
        $this->productAttributesFacade = $productAttributesFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\CartChangeTransfer $cartChangeTransfer
     *
     * @return \Generated\Shared\Transfer\CartChangeTransfer
     */
    public function expandItems(CartChangeTransfer $cartChangeTransfer): CartChangeTransfer
    {
        foreach ($cartChangeTransfer->getItems() as $item) {
            $this->expandItemsWithAbstractAttributes($item);
        }

        return $cartChangeTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ItemTransfer $itemTransfer
     *
     * @return void
     */
    protected function expandItemsWithAbstractAttributes(ItemTransfer $itemTransfer): void
    {
        $abstractAttribute = $this->productAttributesFacade->getProductAbstractAttributeValues($itemTransfer->getIdProductAbstract());

        if (!$abstractAttribute) {
            return;
        }

        $itemTransfer->setAbstractAttributes($abstractAttribute);
    }
}
