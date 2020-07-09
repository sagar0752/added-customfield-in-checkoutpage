<?php

declare(strict_types=1);

namespace Custom\CheckoutStep\Api\Data;


interface CustomFieldsInterface
{

    const PICKUP_LOCATION = 'pickup_location';


    /**
     *
     * @return string|null
     */
    public function getPickupLocation();

    /**
     *
     * @param string|null
     *
     * @return CustomFieldsInterface
     */
    public function setPickupLocation(string $pickupLocation = null);
}
