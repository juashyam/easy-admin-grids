<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Model\System;

use Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Store\Model\ScopeInterface;

class Configuration
{
    const XML_PATH_IS_ENABLED = "easy_admin_grids/configuration/enabled";
    const XML_PATH_REPLACE_CMS_BLOCK = "easy_admin_grids/cms/replace_block";
    const XML_PATH_REPLACE_CMS_PAGE = "easy_admin_grids/cms/replace_page";

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_IS_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function canReplaceCmsBlock()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REPLACE_CMS_BLOCK,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function canReplaceCmsPage()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REPLACE_CMS_PAGE,
            ScopeInterface::SCOPE_STORE
        );
    }
}
