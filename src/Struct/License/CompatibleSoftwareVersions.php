<?php

namespace App\Struct\License;

class CompatibleSoftwareVersions extends \App\Struct\Struct
{
    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /** @var int */
    public $parent;

    /** @var bool */
    public $selectable;

    /** @var string */
    public $major;

    /** @var null */
    public $releaseDate;

    /** @var bool */
    public $public;

    public static $mappedFields = [];
}
