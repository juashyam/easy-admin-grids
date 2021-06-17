<?php
declare(strict_types=1);

namespace Juashyam\EasyAdminGrids\ViewModel\Listing\Column\Cms;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Store\Model\StoreRepository;

/**
 * Store Options for Cms Pages and Blocks
 */
class Store implements OptionSourceInterface
{
    /**
     * All Store Views value
     */
    const ALL_STORE_VIEWS = '0';

    /**
     * @var StoreRepository
     */
    private $storeRepository;

    /**
     * @var array
     */
    private $options = [];

    /**
     * @param StoreRepository $storeRepository
     */
    public function __construct(StoreRepository $storeRepository)
    {
        $this->storeRepository = $storeRepository;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        if ($this->options !== null) {
            return $this->options;
        }

        $stores = $this->storeRepository->getList();
        foreach ($stores as $store) {
            $this->options[] = [
                'label' => $store->getId() === 0 ? __('All Store Views') : $store->getName(),
                'value' => $store->getId()
            ];
        }

        return $this->options;
    }
}
