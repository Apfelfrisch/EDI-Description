<?php

namespace Proengeno\EdiDescription;

class EdiDescriber
{
    private $desciption;

    public function __construct($descriptionType)
    {
        $this->desciption = include(PathResolver::getFor($descriptionType));
    }

    public static function getFor($descriptionType, $key, $value = null)
    {
        $instance = new static($descriptionType);

        return $instance->get($key, $value);
    }

    public function get($key, $value = null)
    {
        if ($value === null) {
            return $this->desciption[$key] ?? [];
        }
        return $this->desciption[$key][$value] ?? null;
    }
}
