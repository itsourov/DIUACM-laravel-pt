<?php

namespace App\Filament\Resources\TrackerResource\Pages;

use App\Filament\Resources\TrackerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTracker extends EditRecord
{
    protected static string $resource = TrackerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
