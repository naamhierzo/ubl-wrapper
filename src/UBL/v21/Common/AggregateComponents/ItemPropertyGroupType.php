<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ImportanceCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NameType;

/**
 * Class ItemPropertyGroupType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getName()
 * @method self setName($value)
 * @method mixed getImportanceCode()
 * @method self setImportanceCode($value)
 */
class ItemPropertyGroupType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:Name" => NameType::class,
        "cbc:ImportanceCode" => ImportanceCodeType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
    ];
}