<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum Gender: string implements HasColor, HasIcon, HasLabel
{
    case MALE = 'male';
    case FEMALE = 'class';
    case OTHER = 'other';

    public function getColor(): string
    {
        return match ($this) {
            self::MALE => 'info',
            self::FEMALE => 'success',
            self::OTHER => 'warning'
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::MALE => 'Male',
            self::FEMALE => 'Female',
            self::OTHER => 'Other'
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::MALE => 'heroicon-o-computer-desktop',
            self::FEMALE => 'heroicon-o-academic-cap',
            self::OTHER => 'heroicon-o-information-circle',
        };
    }
    public static function toArray(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
