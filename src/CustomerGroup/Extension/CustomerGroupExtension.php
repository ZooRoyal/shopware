<?php declare(strict_types=1);

namespace Shopware\CustomerGroup\Extension;

use Shopware\Api\Read\FactoryExtensionInterface;
use Shopware\Api\Search\QueryBuilder;
use Shopware\Api\Search\QuerySelection;
use Shopware\Context\Struct\TranslationContext;
use Shopware\CustomerGroup\Event\CustomerGroupBasicLoadedEvent;
use Shopware\CustomerGroup\Event\CustomerGroupDetailLoadedEvent;
use Shopware\CustomerGroup\Struct\CustomerGroupBasicStruct;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

abstract class CustomerGroupExtension implements FactoryExtensionInterface, EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            CustomerGroupBasicLoadedEvent::NAME => 'customerGroupBasicLoaded',
            CustomerGroupDetailLoadedEvent::NAME => 'customerGroupDetailLoaded',
        ];
    }

    public function joinDependencies(
        QuerySelection $selection,
        QueryBuilder $query,
        TranslationContext $context
    ): void {
    }

    public function getDetailFields(): array
    {
        return [];
    }

    public function getBasicFields(): array
    {
        return [];
    }

    public function hydrate(
        CustomerGroupBasicStruct $customerGroup,
        array $data,
        QuerySelection $selection,
        TranslationContext $translation
    ): void {
    }

    public function customerGroupBasicLoaded(CustomerGroupBasicLoadedEvent $event): void
    {
    }

    public function customerGroupDetailLoaded(CustomerGroupDetailLoadedEvent $event): void
    {
    }
}