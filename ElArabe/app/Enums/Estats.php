<?php

namespace App\Enums;

enum Estats: string
{
    case NoConveni = 'NoConveni';
    case Acceptat = 'Acceptat';
    case FinalitzatContractat = 'Finalitzat i Contractat';
    case FinalitzatNoContractat = 'Finalitzat i No contractat';
    case DEFAULT = 'null';

    public static function forMigration(): array
    {
        return collect(self::cases())
            ->map(function ($enum) {
                if (property_exists($enum, "value")) return $enum->value;
                return $enum->name;
            })
            ->values()
            ->toArray();
    }
    public static function traduction(): array {
        return collect(self::cases())
            ->map(function ($enum) {
                if (property_exists($enum, "value")) return $enum;
                return $enum;
            })
            ->values()
            ->toArray();
    }
}
