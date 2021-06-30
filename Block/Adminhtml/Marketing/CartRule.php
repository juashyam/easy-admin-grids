<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Block\Adminhtml\Marketing;

use Juashyam\EasyAdminGrids\Model\System\Configuration;
use Magento\Backend\Block\Widget\Button;

/**
 * Extend the grid container block of cart rules to display conditionally
 */
class CartRule extends \Magento\SalesRule\Block\Adminhtml\Promo\Quote
{
    /**
     * @return string
     */
    public function getGridHtml()
    {
        if ($this->_scopeConfig->isSetFlag(Configuration::XML_PATH_IS_ENABLED)
            && $this->_scopeConfig->isSetFlag(Configuration::XML_PATH_REPLACE_MARKETING_CART_RULE_LISTING)
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
            && $this->_scopeConfig->isSetFlag(Configuration::XML_PATH_REPLACE_MARKETING_CART_RULE_LISTING)
        ) {
            return false;
        }

        return parent::canRender($item);
    }
}
