<?php

namespace App\Enums;


enum Cicles: int {
    case SMX = 1;
    case DAM = 2;
    case DAMVI = 3;
    case ASIX = 4;
    case DEFAULT = 0;


    public static function forMigration(): array {
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
    public static function traductionMapa(): array {
        return collect(self::cases())
            ->map(function ($enum) {
                if (property_exists($enum, "value")) return $enum->name;
                return $enum->name;
            })
            ->values()
            ->toArray();
    }
    public static function desTraduction(string $keyCicle): string {

        foreach (self::cases() as $case) {
            if ($case == $keyCicle) return $case->value;
        }
        return '';
    }
}

