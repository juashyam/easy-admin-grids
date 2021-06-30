<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\TargetRule\Model\Rule;

/**
 * Target Rule applies to options
 */
class TargetRuleApplies implements OptionSourceInterface
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
                ['value' => Rule::RELATED_PRODUCTS, 'label' => __('Related Products')],
                ['value' => Rule::UP_SELLS, 'label' => __('Up-sells')],
                ['value' => Rule::CROSS_SELLS, 'label' => __('Cross-sells')]
            ];
        }

        return $this->options;
    }
}
