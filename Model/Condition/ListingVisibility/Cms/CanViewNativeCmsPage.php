<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Model\Condition\ListingVisibility\Cms;

use Juashyam\EasyAdminGrids\Model\Condition\ListingVisibility;

/**
 * Dynamic validator for CMS page, control listing visibility.
 */
class CanViewNativeCmsPage extends ListingVisibility
{
    /**
     * Unique condition name.
     *
     * @var string
     */
    const CONDITION_NAME = 'can_view_native_cms_page';

    /**
     * Validate logical condition for ui component
     *
     * @param array $arguments Attributes from element node.
     */
    public function isVisible(array $arguments): bool
    {
        if ($this->configuration->isEnabled() && $this->configuration->canReplaceCmsPage()) {
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
