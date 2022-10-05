<?php

namespace Proengeno\EdiDescription;

class PathResolver
{
    private static $descriptions = [
        'utilmd' => '/utilmd-description.php',
        'remadv' => '/remadv-description.php',
        'invoic' => '/invoic-description.php',
        'aperak' => '/aperak-description.php',
        'orders' => '/orders-description.php',
        'mscons' => '/mscons-description.php',
    ];

    public static function getFor($description)
    {
        $lowerDescription = strtolower($description);

        if (isset(static::$descriptions[$lowerDescription])) {
            return __DIR__ . static::$descriptions[$lowerDescription];
        }

        throw new \InvalidArgumentException("No Descriptionfile for '$description'.");
    }
}
