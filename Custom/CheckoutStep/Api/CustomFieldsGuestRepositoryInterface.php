<?php

namespace Custom\CheckoutStep\Api;

use Magento\Sales\Model\Order;
use Custom\CheckoutStep\Api\Data\CustomFieldsInterface;

/**
 * Interface CustomFieldsGuestRepositoryInterface
 *
 * @category Api/Interface
 * @package  Custom\CheckoutStep\Api
 */
interface CustomFieldsGuestRepositoryInterface
{
    /**
     * Save checkout custom fields
     *
     * @param string                                                   
     * @param \Custom\CheckoutStep\Api\Data\CustomFieldsInterface $customFields Custom fields
     *
     * @return \Custom\CheckoutStep\Api\Data\CustomFieldsInterface
     */
    public function saveCustomFields(
        string $cartId,
        CustomFieldsInterface $customFields
    ): CustomFieldsInterface;
}
