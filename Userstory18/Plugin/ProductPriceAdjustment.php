<?php
namespace Bhavishya\Userstory18\Plugin;

class ProductPriceAdjustment
{
    public function aroundGetFinalPrice(\Magento\Catalog\Model\Product $subject, callable $proceed)
    {
        $originalPrice = $proceed();
        $adjustedPrice = $originalPrice +  1.69;
        return $adjustedPrice;
    }
}
