<?php

declare(strict_types=1);

namespace Custom\CheckoutStep\Plugin\Block\Adminhtml;

use Magento\Framework\Exception\LocalizedException;
use Magento\Sales\Block\Adminhtml\Order\View\Info;
use Custom\CheckoutStep\Api\CustomFieldsRepositoryInterface;

/**
 * Class CustomFieldsRepository
 *
 */
class CustomFields
{
    /**
     * CustomFieldsRepositoryInterface
     *
     * @var CustomFieldsRepositoryInterface
     */
    protected $customFieldsRepository;

    /**
     * CustomFields constructor.
     *
     * @param CustomFieldsRepositoryInterface $customFieldsRepository Repository Interface
     */
    public function __construct(CustomFieldsRepositoryInterface $customFieldsRepository)
    {
        $this->customFieldsRepository = $customFieldsRepository;
    }

    /**
     * Modify after to html.
     *
     * @param Info   $subject Info
     * @param string $result  Result
     *
     * @return string
     * @throws LocalizedException
     */
    public function afterToHtml(Info $subject, $result) {
        $block = $subject->getLayout()->getBlock('order_custom_fields');
        if ($block !== false) {
            $block->setOrderCustomFields(
                $this->customFieldsRepository->getCustomFields($subject->getOrder())
            );
            $result = $result . $block->toHtml();
        }

        return $result;
    }
}
