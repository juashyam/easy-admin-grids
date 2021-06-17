<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Model\Condition\ListingVisibility;

use Juashyam\EasyAdminGrids\Model\Condition\ListingVisibility;

/**
 * Dynamic validator for CMS block, control listing visibility.
 */
class CanViewNativeCmsBlock extends ListingVisibility
{
    /**
     * Unique condition name.
     *
     * @var string
     */
    const CONDITION_NAME = 'can_view_native_cms_block';

    /**
     * Validate if notification popup can be shown and set the notification flag
     *
     * @param array $arguments Attributes from element node.
     * @inheritdoc
     */
    public function isVisible(array $arguments): bool
    {
        if ($this->configuration->isEnabled() && $this->configuration->canReplaceCmsBlock()) {
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
