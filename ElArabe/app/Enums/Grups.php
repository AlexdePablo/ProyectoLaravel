<?php
namespace App\Enums;

enum Grups: string {
    case A = 'A';
    case B = 'B';
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
                if (property_exists($enum, "value")) return $enum->name;
                return $enum->name;
            })
            ->values()
            ->toArray();
    }

}

