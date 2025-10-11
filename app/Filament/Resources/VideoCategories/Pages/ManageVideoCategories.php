<?php

namespace App\Filament\Resources\VideoCategories\Pages;

use App\Filament\Resources\VideoCategories\VideoCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageVideoCategories extends ManageRecords
{
    protected static string $resource = VideoCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
