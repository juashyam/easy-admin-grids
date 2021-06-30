<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\GiftCardAccount\Model\Giftcardaccount;

/**
 * Gift Card Account Status options
 */
class GiftCardAccountStatus implements OptionSourceInterface
{
    /**
     * @var array
     */
    private $options;

    /**
     * @inheritdoc
     */
    public function toOptionArray()
    {
        if (!$this->options) {
            $this->options = [
                ['value' => Giftcardaccount::STATE_AVAILABLE, 'label' => __('Available')],
                ['value' => Giftcardaccount::STATE_USED, 'label' => __('Used')],
                ['value' => Giftcardaccount::STATE_REDEEMED, 'label' => __('Redeemed')],
                ['value' => Giftcardaccount::STATE_EXPIRED, 'label' => __('Expired')]
            ];
        }

        return $this->options;
    }
}
