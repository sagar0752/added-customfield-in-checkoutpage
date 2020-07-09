<?php

declare(strict_types=1);

namespace Custom\CheckoutStep\Model\Data;

use Magento\Framework\Api\AbstractExtensibleObject;
use Custom\CheckoutStep\Api\Data\CustomFieldsInterface;

/**
 * Class CustomFields
 *
 */
class CustomFields extends AbstractExtensibleObject implements CustomFieldsInterface
{
    /**getPickupLocation
     *
     * @return string|null
     */
    public function getPickupLocation()
    {
        return $this->_get(self::PICKUP_LOCATION);
    }

    /**setPickupLocation
     * 
     */
    public function setPickupLocation(string $pickupLocation = null)
    {
        return $this->setData(self::PICKUP_LOCATION, $pickupLocation);
    }

}
