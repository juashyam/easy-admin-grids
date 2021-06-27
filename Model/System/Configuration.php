<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Model\System;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Configuration
{
    /**@#+
     * @const string System Configuration Path
     */
    const XML_PATH_IS_ENABLED = "easy_admin_grids/configuration/enabled";
    const XML_PATH_REPLACE_CMS_BLOCK = "easy_admin_grids/cms/replace_block";
    const XML_PATH_REPLACE_CMS_PAGE = "easy_admin_grids/cms/replace_page";
    const XML_PATH_REPLACE_CUSTOMER_LISTING = "easy_admin_grids/customer/replace_listing";
    const XML_PATH_REPLACE_CUSTOMER_NOW_ONLINE_LISTING = "easy_admin_grids/customer/replace_now_online";
    const XML_PATH_REPLACE_CUSTOMER_GROUP_LISTING = "easy_admin_grids/customer/replace_group";
    const XML_PATH_REPLACE_CUSTOMER_SEGMENT_LISTING = "easy_admin_grids/customer/replace_segment";
    const XML_PATH_REPLACE_MARKETING_CATALOG_RULE_LISTING = "easy_admin_grids/marketing/replace_catalog_rule";
    const XML_PATH_REPLACE_MARKETING_RELATED_RULE_LISTING = "easy_admin_grids/marketing/replace_related_product_rule";
    const XML_PATH_REPLACE_MARKETING_CART_RULE_LISTING = "easy_admin_grids/marketing/replace_cart_rule";
    const XML_PATH_REPLACE_MARKETING_GIFT_ACC_RULE_LISTING = "easy_admin_grids/marketing/replace_giftacc_rule";
    /**#@-*/

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

    /**
     * @return mixed
     */
    public function canReplaceCustomerListing()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REPLACE_CUSTOMER_LISTING,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function canReplaceCustomerNowOnlineListing()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REPLACE_CUSTOMER_NOW_ONLINE_LISTING,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function canReplaceCustomerGroupListing()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REPLACE_CUSTOMER_GROUP_LISTING,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function canReplaceCustomerSegmentListing()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REPLACE_CUSTOMER_SEGMENT_LISTING,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function canReplaceMarketingCatalogRuleListing()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REPLACE_MARKETING_CATALOG_RULE_LISTING,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function canReplaceMarketingRelatedRuleListing()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REPLACE_MARKETING_RELATED_RULE_LISTING,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function canReplaceMarketingCartRuleListing()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REPLACE_MARKETING_CART_RULE_LISTING,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return mixed
     */
    public function canReplaceMarketingGiftAccountListing()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REPLACE_MARKETING_GIFT_ACC_RULE_LISTING,
            ScopeInterface::SCOPE_STORE
        );
    }
}
