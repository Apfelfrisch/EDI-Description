<?php

namespace Proengeno\EdiDescription;

function edifactDesciption($type) : array
{
    $descriptions = [
        'utilmd' => '/utilmd-description.php',
        'remadv' => '/remadv-description.php',
        'invoic' => '/invoic-description.php',
        'aperak' => '/aperak-description.php',
    ];

    $type = strtolower($type);

    if (isset($descriptions[$type])) {
        return include(__DIR__ . $descriptions[$type]);
    }

    throw new \InvalidArgumentException("No Descriptionfile for '$description'.");
}

function describe($descriptionType, $key, $value) : string
{
    return edifactDesciption($descriptionType)[$key][$value] ?? null;
}

function possibilities($descriptionType, $key) : array
{
    return edifactDesciption($descriptionType)[$key] ?? [];
}
