<?php

declare(strict_types=1);

namespace Custom\CheckoutStep\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Custom\CheckoutStep\Api\Data\CustomFieldsInterface;

/**
 * Class AddCustomFieldsToOrder
 *
 */
class AddCustomFieldsToOrder implements ObserverInterface
{
    /**
     * Execute observer method.
     *
     * @param Observer $observer Observer
     *
     * @return void
     */
    public function execute(Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();
        $quote = $observer->getEvent()->getQuote();

        $order->setData(
            CustomFieldsInterface::PICKUP_LOCATION,
            $quote->getData(CustomFieldsInterface::PICKUP_LOCATION)
        );
    }
}
