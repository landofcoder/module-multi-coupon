<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category  Landfocoder
 * @package   Lof\MultiCoupon
 * @author    Landofcoder <landofcoder@gmail.com>
 * @copyright 2021 Landofcoder
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Lof\MultiCoupon\Block\Cart;

/**
 * Multiple Coupon cart block.
 *
 * @category Landfocoder
 * @package  Lof\MultiCoupon
 * @author   Landofcoder <landofcoder@gmail.com>
 */
class Coupon extends \Magento\Checkout\Block\Cart\AbstractCart
{
    /**
     * @return array
     */
    public function getCouponCodes()
    {
        return array_filter(explode(",", $this->getQuote()->getCouponCode()));
    }
}
