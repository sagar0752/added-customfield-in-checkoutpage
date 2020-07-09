<?php


declare(strict_types=1);

namespace Custom\CheckoutStep\Api;

use Magento\Sales\Model\Order;
use Custom\CheckoutStep\Api\Data\CustomFieldsInterface;

interface CustomFieldsRepositoryInterface
{
    /**
     * Save checkout custom fields
     *
     * @param int                                                      $cartId       Cart id
     * @param \Custom\CheckoutStep\Api\Data\CustomFieldsInterface $customFields Custom fields
     *
     * @return \Custom\CheckoutStep\Api\Data\CustomFieldsInterface
     */
    public function saveCustomFields(
        int $cartId,
        CustomFieldsInterface $customFields
    ): CustomFieldsInterface;

    /**
     * Get checkoug custom fields
     *
     * @param Order $order Order
     *
     * @return CustomFieldsInterface
     */
    public function getCustomFields(Order $order) : CustomFieldsInterface;
}
