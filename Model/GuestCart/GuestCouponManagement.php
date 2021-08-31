<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Lof\MultiCoupon\Model\GuestCart;

use Lof\MultiCoupon\Api\GuestCouponManagementInterface;
use Lof\MultiCoupon\Api\CouponManagementInterface;
use Magento\Quote\Model\QuoteIdMask;
use Magento\Quote\Model\QuoteIdMaskFactory;

/**
 * Coupon management class for guest carts.
 */
class GuestCouponManagement implements GuestCouponManagementInterface
{
    /**
     * @var QuoteIdMaskFactory
     */
    private $quoteIdMaskFactory;

    /**
     * @var CouponManagementInterface
     */
    private $couponManagement;

    /**
     * Constructs a coupon read service object.
     *
     * @param CouponManagementInterface $couponManagement
     * @param QuoteIdMaskFactory $quoteIdMaskFactory
     */
    public function __construct(
        CouponManagementInterface $couponManagement,
        QuoteIdMaskFactory $quoteIdMaskFactory
    ) {
        $this->quoteIdMaskFactory = $quoteIdMaskFactory;
        $this->couponManagement = $couponManagement;
    }

    /**
     * {@inheritdoc}
     */
    public function set($cartId, $couponCode)
    {
        /** @var $quoteIdMask QuoteIdMask */
        $quoteIdMask = $this->quoteIdMaskFactory->create()->load($cartId, 'masked_id');
        return $this->couponManagement->set($quoteIdMask->getQuoteId(), $couponCode);
    }
}
