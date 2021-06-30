<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Block\Adminhtml\Customer;

use Juashyam\EasyAdminGrids\Model\System\Configuration;
use Magento\Backend\Block\Widget\Button;

/**
 * Extend the grid container block of customer segment to display conditionally
 */
class Customersegment extends \Magento\CustomerSegment\Block\Adminhtml\Customersegment
{
    /**
     * @return string
     */
    public function getGridHtml()
    {
        if ($this->_scopeConfig->isSetFlag(Configuration::XML_PATH_IS_ENABLED)
            && $this->_scopeConfig->isSetFlag(Configuration::XML_PATH_REPLACE_CUSTOMER_SEGMENT_LISTING)
        ) {
            return '';
        }

        return parent::getGridHtml();
    }

    /**
     * Check whether button rendering is allowed in current context
     *
     * @param \Magento\Backend\Block\Widget\Button\Item $item
     * @return bool
     */
    public function canRender(Button\Item $item)
    {
        if ($this->_scopeConfig->isSetFlag(Configuration::XML_PATH_IS_ENABLED)
            && $this->_scopeConfig->isSetFlag(Configuration::XML_PATH_REPLACE_CUSTOMER_SEGMENT_LISTING)
        ) {
            return false;
        }

        return parent::canRender($item);
    }
}
