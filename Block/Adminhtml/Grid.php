<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Block\Adminhtml;

use Hyva\Admin\Block\BaseHyvaGrid;
use Juashyam\EasyAdminGrids\Model\System\Configuration;

class Grid extends BaseHyvaGrid
{
    /**
     * @return string
     */
    public function _toHtml()
    {
        if (!$this->_scopeConfig->isSetFlag(Configuration::XML_PATH_IS_ENABLED)) {
            return '';
        }

        return parent::_toHtml();
    }
}
