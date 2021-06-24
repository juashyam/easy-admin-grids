<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Model\Condition\ListingVisibility\Customer;

use Juashyam\EasyAdminGrids\Model\Condition\ListingVisibility;

/**
 * Dynamic validator for Customer online listing page, control listing visibility.
 */
class CanViewNativeCustomerOnlineListing extends ListingVisibility
{
    /**
     * Unique condition name.
     *
     * @var string
     */
    const CONDITION_NAME = 'can_view_native_customer_online_listing';

    /**
     * Validate logical condition for ui component
     *
     * @param array $arguments Attributes from element node.
     */
    public function isVisible(array $arguments): bool
    {
        if ($this->configuration->isEnabled() && $this->configuration->canReplaceCustomerNowOnlineListing()) {
            return false;
        }

        return true;
    }

    /**
     * Get condition name
     *
     * @return string
     */
    public function getName(): string
    {
        return self::CONDITION_NAME;
    }
}
