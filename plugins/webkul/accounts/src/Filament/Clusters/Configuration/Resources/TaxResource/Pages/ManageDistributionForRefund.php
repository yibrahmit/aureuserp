<?php

namespace Webkul\Account\Filament\Clusters\Configuration\Resources\TaxResource\Pages;

use Filament\Pages\SubNavigationPosition;
use Webkul\Account\Enums;
use Filament\Resources\Pages\ManageRelatedRecords;
use Webkul\Account\Filament\Clusters\Configuration\Resources\TaxResource;
use Webkul\Account\Traits\TaxPartition;

class ManageDistributionForRefund extends ManageRelatedRecords
{
    use TaxPartition;

    protected static string $resource = TaxResource::class;

    protected static string $relationship = 'distributionForRefund';

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public function getDocumentType(): string
    {
        return Enums\DocumentType::REFUND->value;
    }

    public function getSubNavigationPosition(): SubNavigationPosition
    {
        return SubNavigationPosition::Top;
    }

    public static function getNavigationLabel(): string
    {
        return __('accounts::filament/clusters/configurations/resources/tax/pages/manage-distribution-for-refund.navigation.title');
    }
}
