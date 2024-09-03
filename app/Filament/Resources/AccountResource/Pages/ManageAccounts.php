<?php

namespace App\Filament\Resources\AccountResource\Pages;

use App\Filament\Resources\AccountResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Builder;

class ManageAccounts extends ManageRecords
{
    protected static string $resource = AccountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'payable' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'payable')),
            'receivable' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'receivable')),
        ];
    }
}
