<?php declare(strict_types=1);

namespace Shopware\ListingSorting\Event;

use Shopware\Api\Write\WrittenEvent;

class ListingSortingTranslationWrittenEvent extends WrittenEvent
{
    const NAME = 'listing_sorting_translation.written';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getEntityName(): string
    {
        return 'listing_sorting_translation';
    }
}