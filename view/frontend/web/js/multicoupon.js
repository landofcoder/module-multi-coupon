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

define([
    'jquery',
    'jquery/ui'
], function ($) {
    'use strict';

    $.widget('mage.lofMultiCoupons', {
        options: {

        },

        /** @inheritdoc */
        _create: function () {
            this.couponCode = $(this.options.couponCodeSelector);
            this.removeCoupon = $(this.options.removeCouponSelector);
            this.removeCouponValueSelector = $(this.options.removeCouponValue);

            $(this.options.applyButton).on('click', $.proxy(function () {
                this.couponCode.attr('data-validate', '{required:true}');
                this.removeCoupon.attr('value', '0');
                $(this.element).validation().submit();
            }, this));

            $(this.options.cancelButton).on('click', $.proxy(function () {
                this.couponCode.removeAttr('data-validate');
                this.removeCoupon.attr('value', '1');
                this.removeCouponValueSelector.attr('value', $(this.options.cancelButton).data("value"));
                this.element.submit();
            }, this));

        }
    });

    return $.mage.discountCode;
});
