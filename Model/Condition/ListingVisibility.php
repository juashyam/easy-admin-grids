<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\Model\Condition;

use Juashyam\EasyAdminGrids\Model\System\Configuration;
use Magento\Framework\View\Layout\Condition\VisibilityConditionInterface;

abstract class ListingVisibility implements VisibilityConditionInterface
{
    public $configuration;

    /**
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }
}
