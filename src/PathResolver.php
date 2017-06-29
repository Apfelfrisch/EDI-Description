<?php

namespace Proengeno\EdiDescription;

class PathResolver
{
    private static $descriptions = [
        'utilmd' => __DIR__ . '/utilmd-description.php'
    ];

    public static function getFor($description)
    {
        $lowerDescription = strtolower($description);

        if (isset(static::$descriptions[$lowerDescription])) {
            return static::$descriptions[$lowerDescription];
        }

        throw new \InvalidArgumentException("No Descriptionfile for '$description'.");
    }
}
