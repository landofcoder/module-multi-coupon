<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Lof\MultiCoupon\Api;

/**
 * Coupon management interface for guest carts.
 * @api
 * @since 100.0.2
 */
interface GuestCouponManagementInterface
{
    /**
     * Add a coupon by code to a specified cart.
     *
     * @param string $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException The specified cart does not exist.
     * @throws \Magento\Framework\Exception\CouldNotSaveException The specified coupon could not be added.
     */
    public function set($cartId, $couponCode);
}
